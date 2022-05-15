<?php

namespace App\Http\Controllers;

use App\Models\Version;

class AboutController extends Controller
{
    public function nitrox()
    {
        $version = collect(require_once resource_path('data/versions.php'))->first();

        return view('about.about-nitrox', compact('version'));
    }
}
