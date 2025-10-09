<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/version/latest', [\App\Http\Controllers\Api\VersionController::class, 'latest'])->name('api.version.latest');
Route::get('/version/releases', [\App\Http\Controllers\Api\VersionController::class, 'releases'])->name('api.version.releases');
Route::get('/version/{version}', [\App\Http\Controllers\Api\VersionController::class, 'version'])->name('api.version');

Route::get('/changelog/latest', [\App\Http\Controllers\Api\ChangelogController::class, 'latest'])->name('api.changelog.latest');
Route::get('/changelog/releases', [\App\Http\Controllers\Api\ChangelogController::class, 'releases'])->name('api.changelog.releases');
Route::get('/changelog/{version}', [\App\Http\Controllers\Api\ChangelogController::class, 'version'])->name('api.changelog');

Route::get('/blog/latest', [\App\Http\Controllers\Api\BlogController::class, 'latest'])->name('api.blog.latest');

Route::middleware('throttle:60,1')->group(function () {
    Route::get('/stats/community', [\App\Http\Controllers\Api\StatsController::class, 'community'])->name('api.stats.community');
    Route::get('/stats/downloads', [\App\Http\Controllers\Api\StatsController::class, 'downloads'])->name('api.stats.downloads');
    Route::get('/stats/discord', [\App\Http\Controllers\Api\StatsController::class, 'discord'])->name('api.stats.discord');
    Route::get('/stats/nexus', [\App\Http\Controllers\Api\StatsController::class, 'nexus'])->name('api.stats.nexus');
});