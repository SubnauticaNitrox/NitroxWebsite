<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadDetail()
    {
        $version = collect(require resource_path('data/versions.php'))->first();
        $changelog = collect(require resource_path('data/changelogs.php'))->first();

        // Handle both old and new version formats
        $version = $this->normalizeVersion($version);

        return view('download.detail', compact('version', 'changelog'));
    }

    public function downloadStart(Request $request)
    {
        $version = collect(require resource_path('data/versions.php'))->first();

        // Handle both old and new version formats
        $version = $this->normalizeVersion($version);

        // Get platform and architecture from request
        $platform = $request->get('platform', 'windows');
        $architecture = $request->get('arch', 'x64');

        // Get the specific platform download info
        $selectedDownload = $this->getPlatformDownload($version, $platform, $architecture);
        
        // If no platform-specific download found, fallback to first available
        if (!$selectedDownload && isset($version['platforms'])) {
            $firstPlatform = array_key_first($version['platforms']);
            if ($firstPlatform) {
                $platformData = $version['platforms'][$firstPlatform];
                $firstArch = array_key_first($platformData['architectures'] ?? []);
                $archData = $platformData['architectures'][$firstArch] ?? [];
                $selectedDownload = [
                    'url' => $archData['url'] ?? $platformData['url'] ?? '',
                    'platform' => $firstPlatform,
                    'architecture' => $firstArch ?? 'x64',
                    'md5' => $archData['md5'] ?? $platformData['md5'] ?? '',
                    'filesize' => $archData['filesize'] ?? $platformData['filesize'] ?? $version['filesize']
                ];
                $platform = $firstPlatform;
                $architecture = $firstArch ?? 'x64';
            }
        }

        return view('download.start', compact('version', 'selectedDownload', 'platform', 'architecture'));
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

    /**
     * Get platform-specific download information
     */
    private function getPlatformDownload($version, $platform, $architecture)
    {
        // If version has platforms array (new format)
        if (isset($version['platforms']) && isset($version['platforms'][$platform])) {
            $platformData = $version['platforms'][$platform];
            
            // Check if the requested architecture is supported
            if (isset($platformData['architectures'][$architecture])) {
                $archData = $platformData['architectures'][$architecture];
                return [
                    'url' => $archData['url'],
                    'platform' => $platform,
                    'architecture' => $architecture,
                    'md5' => $archData['md5'],
                    'filesize' => $archData['filesize'] ?? $platformData['filesize'] ?? $version['filesize']
                ];
            }
            
            // Fallback to first available architecture
            if (isset($platformData['architectures']) && count($platformData['architectures']) > 0) {
                $firstArch = array_key_first($platformData['architectures']);
                $archData = $platformData['architectures'][$firstArch];
                return [
                    'url' => $archData['url'],
                    'platform' => $platform,
                    'architecture' => $firstArch,
                    'md5' => $archData['md5'],
                    'filesize' => $archData['filesize'] ?? $platformData['filesize'] ?? $version['filesize']
                ];
            }
        }

        // Fallback to first available platform
        if (isset($version['platforms'])) {
            $firstPlatform = array_key_first($version['platforms']);
            if ($firstPlatform) {
                $platformData = $version['platforms'][$firstPlatform];
                if (isset($platformData['architectures']) && count($platformData['architectures']) > 0) {
                    $firstArch = array_key_first($platformData['architectures']);
                    $archData = $platformData['architectures'][$firstArch];
                    return [
                        'url' => $archData['url'],
                        'platform' => $firstPlatform,
                        'architecture' => $firstArch,
                        'md5' => $archData['md5'],
                        'filesize' => $archData['filesize'] ?? $platformData['filesize'] ?? $version['filesize']
                    ];
                }
            }
        }

        // Fallback for old format
        if (isset($version['url'])) {
            return [
                'url' => $version['url'],
                'platform' => 'windows',
                'architecture' => 'x64',
                'md5' => $version['md5'],
                'filesize' => $version['filesize']
            ];
        }

        return null;
    }
}
