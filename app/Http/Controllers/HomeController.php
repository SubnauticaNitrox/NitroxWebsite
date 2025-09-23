<?php

namespace App\Http\Controllers;

use App\Models\Version;

class HomeController extends Controller
{
    public function __invoke()
    {
        $version = collect(require_once resource_path('data/versions.php'))->first();
        $version = $this->normalizeVersion($version);

        return view('home', compact('version'));
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
                        'url' => $version['url'],
                        'architectures' => ['x64'],
                        'md5' => $version['md5']
                    ]
                ]
            ];
        }

        return $version;
    }
}
