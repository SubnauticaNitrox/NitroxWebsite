<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class VersionController extends Controller
{
    public function latest()
    {
        $version = (require_once resource_path('data/versions.php'))[0];
        $version = $this->normalizeVersion($version);
        
        return response()->json($version);
    }

    public function releases()
    {
        return response()->json(
            (require_once resource_path('data/versions.php'))
        );
    }

    public function version($version)
    {
        $versions = collect(require_once resource_path('data/versions.php'));
        $version = $versions->where('version', $version)->first();
        
        if ($version) {
            $version = $this->normalizeVersion($version);
        }

        return response()->json($version ?? ['message' => 'Sorry this version is in another castle... :-(']);
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
