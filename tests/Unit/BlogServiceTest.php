<?php

namespace Tests\Unit;

use App\Services\BlogService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class BlogServiceTest extends TestCase
{
    public function test_get_latest_post_returns_cached_data()
    {
        $blogService = new BlogService();
        
        // Mock the HTTP response
        Http::fake([
            'nitroxblog.rux.gg/wp-json/wp/v2/posts*' => Http::response([
                [
                    'title' => ['rendered' => 'Test Blog Post'],
                    'excerpt' => ['rendered' => '<p>Test excerpt</p>'],
                    'link' => 'https://nitroxblog.rux.gg/test-post',
                    'date' => '2025-01-01T00:00:00',
                    'slug' => 'test-post'
                ]
            ], 200)
        ]);

        $result = $blogService->getLatestPost();

        $this->assertEquals('Test Blog Post', $result['title']);
        $this->assertEquals('<p>Test excerpt</p>', $result['excerpt']);
        $this->assertEquals('https://nitroxblog.rux.gg/test-post', $result['link']);
    }

    public function test_get_latest_post_returns_fallback_on_error()
    {
        $blogService = new BlogService();
        
        // Mock HTTP failure
        Http::fake([
            'nitroxblog.rux.gg/wp-json/wp/v2/posts*' => Http::response([], 500)
        ]);

        $result = $blogService->getLatestPost();

        $this->assertEquals('Nitrox Dev Blog', $result['title']);
        $this->assertEquals('Code, time and patience.', $result['excerpt']);
    }

    public function test_clear_cache_removes_cached_data()
    {
        $blogService = new BlogService();
        
        // First call to cache the data
        Http::fake([
            'nitroxblog.rux.gg/wp-json/wp/v2/posts*' => Http::response([
                [
                    'title' => ['rendered' => 'Test Post'],
                    'excerpt' => ['rendered' => 'Test excerpt'],
                    'link' => 'https://nitroxblog.rux.gg/test',
                    'date' => '2025-01-01T00:00:00',
                    'slug' => 'test'
                ]
            ], 200)
        ]);

        $blogService->getLatestPost();
        
        // Verify cache exists
        $this->assertTrue(Cache::has('latest_blog_post'));
        
        // Clear cache
        $blogService->clearCache();
        
        // Verify cache is cleared
        $this->assertFalse(Cache::has('latest_blog_post'));
    }
} 