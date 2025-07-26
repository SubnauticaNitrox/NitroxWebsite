<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\BlogService;

class BlogController extends Controller
{
    public function latest()
    {
        $blogService = app(BlogService::class);
        $latestPost = $blogService->getLatestPost();

        return response()->json($latestPost);
    }
} 