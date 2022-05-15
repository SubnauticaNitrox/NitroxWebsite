<?php

namespace App\Http\Controllers;

use App\Models\Version;

class HomeController extends Controller
{
    public function __invoke()
    {
        $version = collect(require_once resource_path('data/versions.php'))->first();

        return view('home', compact('version'));
    }
}
