<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\StatsService;

class StatsController extends Controller
{
    public function __construct(
        private StatsService $statsService
    ) {}

    public function community()
    {
        return response()->json($this->statsService->getCommunityStats());
    }

    public function downloads()
    {
        $rawStats = $this->statsService->getRawDownloadStats();
        
        return response()->json([
            'formatted_total' => $this->statsService->getTotalDownloads(),
            'raw_stats' => $rawStats,
            'github' => $rawStats['github_downloads'],
            'legacy' => $rawStats['legacy_downloads'],
            'total' => $rawStats['total_downloads'],
        ]);
    }

    public function discord()
    {
        $rawStats = $this->statsService->getRawDiscordStats();
        
        return response()->json([
            'formatted_online' => $this->statsService->getDiscordMembers(),
            'raw_stats' => $rawStats,
            'online' => $rawStats['online_count'],
            'source' => $rawStats['source'],
            'description' => $rawStats['description'] ?? 'Discord online members',
        ]);
    }


    public function nexus()
    {
        $rawStats = $this->statsService->getRawNexusStats();
        
        return response()->json([
            'formatted_views' => $this->statsService->getNexusViews(),
            'raw_stats' => $rawStats,
            'views' => $rawStats['nexus_views'],
            'source' => $rawStats['source'],
        ]);
    }
}
