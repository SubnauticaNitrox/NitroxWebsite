<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class StatsService
{
    private const CACHE_DURATION = 3600; // 1 hour
    private const GITHUB_OWNER = 'SubnauticaNitrox';
    private const GITHUB_REPO = 'Nitrox';
    private const DISCORD_SERVER_ID = '525437013403631617'; // Nitrox Discord server ID

    /**
     * Get all community statistics
     */
    public function getCommunityStats(): array
    {
        return Cache::remember('community_stats', self::CACHE_DURATION, function () {
            return [
                'downloads' => $this->getTotalDownloads(),
                'discord_members' => $this->getDiscordMembers(),
                'nexus_views' => $this->getNexusViews(),
            ];
        });
    }

    /**
     * Get total download count from GitHub releases + legacy count
     */
    public function getTotalDownloads(): string
    {
        $githubDownloads = $this->getGitHubDownloads();
        $legacyDownloads = $this->getLegacyDownloads();
        $total = $githubDownloads + $legacyDownloads;
        
        return $this->formatNumber($total);
    }

    /**
     * Get download count from GitHub releases
     */
    public function getGitHubDownloads(): int
    {
        return Cache::remember('github_downloads', self::CACHE_DURATION, function () {
            try {
                $response = Http::timeout(10)
                    ->withHeaders([
                        'Accept' => 'application/vnd.github.v3+json',
                        'User-Agent' => 'NitroxWebsite/1.0'
                    ])
                    ->get("https://api.github.com/repos/" . self::GITHUB_OWNER . "/" . self::GITHUB_REPO . "/releases");

                if ($response->successful()) {
                    $releases = $response->json();
                    $totalDownloads = 0;

                    foreach ($releases as $release) {
                        if (isset($release['assets'])) {
                            foreach ($release['assets'] as $asset) {
                                $totalDownloads += $asset['download_count'] ?? 0;
                            }
                        }
                    }

                    Log::info("GitHub downloads fetched successfully: {$totalDownloads} total downloads");
                    return $totalDownloads;
                } else {
                    Log::warning('GitHub API request failed: ' . $response->status() . ' - ' . $response->body());
                }
            } catch (\Exception $e) {
                Log::warning('Failed to fetch GitHub download stats: ' . $e->getMessage());
            }

            return 0;
        });
    }

    /**
     * Get legacy download count (before GitHub releases)
     */
    private function getLegacyDownloads(): int
    {
        return config('nitrox.stats.legacy_downloads', 500000);
    }

    /**
     * Get Discord online members count
     */
    public function getDiscordMembers(): string
    {
        return Cache::remember('discord_members', self::CACHE_DURATION, function () {
            try {
                $response = Http::timeout(10)
                    ->withHeaders([
                        'User-Agent' => 'NitroxWebsite/1.0'
                    ])
                    ->get("https://discord.com/api/v9/guilds/" . self::DISCORD_SERVER_ID . "/widget.json");

                if ($response->successful()) {
                    $widget = $response->json();
                    $onlineCount = $widget['presence_count'] ?? 0;
                    
                    Log::info("Discord widget fetched successfully: {$onlineCount} online members");
                    return $this->formatNumber($onlineCount);
                } else {
                    Log::warning('Discord widget API request failed: ' . $response->status() . ' - ' . $response->body());
                }
            } catch (\Exception $e) {
                Log::warning('Failed to fetch Discord online count: ' . $e->getMessage());
            }

            // Fallback to config value
            return $this->formatNumber(config('nitrox.stats.discord_members', 44000));
        });
    }

    /**
     * Get Nexus views count
     */
    public function getNexusViews(): string
    {
        $nexusViews = config('nitrox.stats.nexus_views', 1267200);
        return $this->formatNumber($nexusViews);
    }

    /**
     * Format number with appropriate suffix
     */
    private function formatNumber(int $number): string
    {
        if ($number >= 1000000) {
            return number_format($number / 1000000, 1) . 'M+';
        } elseif ($number >= 1000) {
            return number_format($number / 1000, 0) . 'K+';
        }
        
        return number_format($number);
    }

    /**
     * Get raw download numbers for debugging
     */
    public function getRawDownloadStats(): array
    {
        $githubDownloads = $this->getGitHubDownloads();
        $legacyDownloads = $this->getLegacyDownloads();
        
        return [
            'github_downloads' => $githubDownloads,
            'legacy_downloads' => $legacyDownloads,
            'total_downloads' => $githubDownloads + $legacyDownloads,
            'formatted_total' => $this->formatNumber($githubDownloads + $legacyDownloads)
        ];
    }

    /**
     * Get raw Discord online count for debugging
     */
    public function getRawDiscordStats(): array
    {
        try {
            $response = Http::timeout(10)
                ->withHeaders([
                    'User-Agent' => 'NitroxWebsite/1.0'
                ])
                ->get("https://discord.com/api/v9/guilds/" . self::DISCORD_SERVER_ID . "/widget.json");

            if ($response->successful()) {
                $widget = $response->json();
                $onlineCount = $widget['presence_count'] ?? 0;
                
                return [
                    'online_count' => $onlineCount,
                    'formatted_online' => $this->formatNumber($onlineCount),
                    'source' => 'discord_widget_api',
                    'description' => 'Real-time online members'
                ];
            }
        } catch (\Exception $e) {
            Log::warning('Failed to fetch raw Discord stats: ' . $e->getMessage());
        }

        return [
            'online_count' => 0,
            'formatted_online' => $this->formatNumber(config('nitrox.stats.discord_members', 44000)),
            'source' => 'fallback'
        ];
    }

    /**
     * Get raw Nexus views for debugging
     */
    public function getRawNexusStats(): array
    {
        $nexusViews = config('nitrox.stats.nexus_views', 1267200);
        
        return [
            'nexus_views' => $nexusViews,
            'formatted_views' => $this->formatNumber($nexusViews),
            'source' => 'config'
        ];
    }

    /**
     * Clear stats cache
     */
    public function clearCache(): void
    {
        Cache::forget('community_stats');
        Cache::forget('github_downloads');
        Cache::forget('discord_members');
    }
}
