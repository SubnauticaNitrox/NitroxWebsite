<?php

namespace App\Console\Commands;

use App\Services\BlogService;
use Illuminate\Console\Command;

class ClearBlogCache extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'blog:clear-cache';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear the cached blog post data';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $blogService = app(BlogService::class);
        $blogService->clearCache();

        $this->info('Blog cache cleared successfully!');
    }
} 