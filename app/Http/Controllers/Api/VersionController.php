<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class VersionController extends Controller
{
    public function latest()
    {
        return response()->json(
            (require_once resource_path('data/versions.php'))[0]
        );
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

        return response()->json($version ?? ['message' => 'Sorry this version is in another castle... :-(']);
    }
}
