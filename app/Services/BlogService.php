<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class BlogService
{
    private const BLOG_API_URL = 'https://nitroxblog.rux.gg/wp-json/wp/v2/posts';
    private const CACHE_KEY = 'latest_blog_post';
    private const CACHE_TTL = 3600; // 1 hour

    public function getLatestPost()
    {
        return Cache::remember(self::CACHE_KEY, self::CACHE_TTL, function () {
            try {
                $response = Http::timeout(10)->get(self::BLOG_API_URL, [
                    'per_page' => 1,
                    'orderby' => 'date',
                    'order' => 'desc',
                    '_embed' => true
                ]);

                if ($response->successful()) {
                    $posts = $response->json();
                    
                    if (!empty($posts)) {
                        $latestPost = $posts[0];
                        
                        return [
                            'title' => $latestPost['title']['rendered'] ?? '',
                            'excerpt' => $latestPost['excerpt']['rendered'] ?? '',
                            'link' => $latestPost['link'] ?? '',
                            'date' => $latestPost['date'] ?? '',
                            'slug' => $latestPost['slug'] ?? ''
                        ];
                    }
                }
            } catch (\Exception $e) {
                // Log the error if needed
                \Log::warning('Failed to fetch latest blog post: ' . $e->getMessage());
            }

            // Return fallback data if API call fails
            return [
                'title' => 'Nitrox Dev Blog',
                'excerpt' => 'Code, time and patience.',
                'link' => 'https://nitroxblog.rux.gg/2023/09/20/dev-blog-6-code-time-and-patience/',
                'date' => '2023-09-20T00:00:00',
                'slug' => 'dev-blog-6-code-time-and-patience'
            ];
        });
    }

    public function clearCache()
    {
        Cache::forget(self::CACHE_KEY);
    }
} 