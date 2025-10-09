<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\StatsService;

class RefreshStatsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stats:refresh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Refresh community statistics cache';

    /**
     * Execute the console command.
     */
    public function handle(StatsService $statsService)
    {
        $this->info('Refreshing community statistics...');
        
        $statsService->clearCache();
        
        $stats = $statsService->getCommunityStats();
        $rawDownloadStats = $statsService->getRawDownloadStats();
        $rawDiscordStats = $statsService->getRawDiscordStats();
        $rawNexusStats = $statsService->getRawNexusStats();
        
        $this->table(
            ['Metric', 'Value'],
            [
                ['Downloads (Formatted)', $stats['downloads']],
                ['Downloads (Raw Total)', number_format($rawDownloadStats['total_downloads'])],
                ['GitHub Downloads', number_format($rawDownloadStats['github_downloads'])],
                ['Legacy Downloads', number_format($rawDownloadStats['legacy_downloads'])],
                ['Discord Online (Formatted)', $stats['discord_members']],
                ['Discord Online (Raw)', number_format($rawDiscordStats['online_count'])],
                ['Discord Source', $rawDiscordStats['source']],
                ['Nexus Views (Formatted)', $stats['nexus_views']],
                ['Nexus Views (Raw)', number_format($rawNexusStats['nexus_views'])],
            ]
        );
        
        $this->info('Statistics refreshed successfully!');
    }
}
