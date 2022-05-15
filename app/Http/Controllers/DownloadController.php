<?php

namespace App\Http\Controllers;

class DownloadController extends Controller
{
    public function downloadDetail()
    {
        $version = collect(require_once resource_path('data/versions.php'))->first();
        $changelog = collect(require_once resource_path('data/changelogs.php'))->first();

        return view('download.detail', compact('version', 'changelog'));
    }

    public function downloadStart()
    {
        $version = collect(require_once resource_path('data/versions.php'))->first();

        return view('download.start', compact('version'));
    }
}
