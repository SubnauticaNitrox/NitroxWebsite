<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

class ChangelogController extends Controller
{
    public function latest()
    {
        return response()->json(
            (require_once resource_path('data/changelogs.php'))[0]
        );
    }

    public function releases()
    {
        return response()->json(
            (require_once resource_path('data/changelogs.php'))
        );
    }

    public function version($version)
    {
        $changelogs = collect(require_once resource_path('data/changelogs.php'));
        $changelog = $changelogs->where('version', $version)->first();

        return response()->json($changelog ?? ['message' => 'Sorry this changelog is in another castle... :-(']);
    }
}
