<?php

namespace App\Providers;

use App\Services\BlogService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class BlogViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('components.layouts.partials.navigation', function ($view) {
            // Only fetch blog post data if we're on the home page
            if (request()->routeIs('home')) {
                $blogService = app(BlogService::class);
                $latestBlogPost = $blogService->getLatestPost();
                $view->with('latestBlogPost', $latestBlogPost);
            }
        });
    }
} 