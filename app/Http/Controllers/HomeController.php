<?php

namespace App\Http\Controllers;

use App\Models\Version;
use App\Services\StatsService;

class HomeController extends Controller
{
    public function __invoke(StatsService $statsService)
    {
        $version = collect(require_once resource_path('data/versions.php'))->first();
        $version = $this->normalizeVersion($version);
        $stats = $statsService->getCommunityStats();

        return view('home', compact('version', 'stats'));
    }

    /**
     * Normalize version data to handle both old and new formats
     */
    private function normalizeVersion($version)
    {
        // If version has platforms array (new format), keep as is
        if (isset($version['platforms'])) {
            return $version;
        }

        // If version has url (old format), create a platforms structure
        if (isset($version['url'])) {
            return [
                'version' => $version['version'],
                'filesize' => $version['filesize'],
                'platforms' => [
                    'windows' => [
                        'architectures' => [
                            'x64' => [
                                'url' => $version['url'],
                                'md5' => $version['md5']
                            ]
                        ]
                    ]
                ]
            ];
        }

        return $version;
    }
}
