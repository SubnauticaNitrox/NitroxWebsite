<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Services\StatsService;

class StatsViewServiceProvider extends ServiceProvider
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
        // Share stats with footer-extended component
        View::composer('components.layouts.partials.footer-extended', function ($view) {
            $statsService = app(StatsService::class);
            $view->with('stats', $statsService->getCommunityStats());
        });
    }
}
