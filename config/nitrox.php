<?php

return [
    'download_url' => env('NITROX_DOWNLOAD_URL'),
    
    'stats' => [
        'discord_members' => env('NITROX_STATS_DISCORD_MEMBERS', 44000),
        'nexus_views' => env('NITROX_STATS_NEXUS_VIEWS', 1267200),
        'legacy_downloads' => env('NITROX_STATS_LEGACY_DOWNLOADS', 500000),
    ],
];
