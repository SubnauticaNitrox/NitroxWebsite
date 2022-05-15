<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::view('/wiki/home', 'wiki.home')->name('wiki.home');
Route::view('/wiki/article/installing-nitrox-mod-subnautica', 'wiki.article.install')->name('wiki.article.install');
Route::view('/wiki/article/run-and-host-nitrox-subnautica-server', 'wiki.article.run')->name('wiki.article.run');
Route::view('/wiki/article/join-nitrox-subnautica-server', 'wiki.article.join')->name('wiki.article.join');

Route::get('/download', [\App\Http\Controllers\DownloadController::class, 'downloadDetail'])->name('download');
Route::get('/download/start', [\App\Http\Controllers\DownloadController::class, 'downloadStart'])->name('download.start');

Route::view('/community', 'community')->name('community');

Route::get('/pages/changelog', \App\Http\Controllers\ChangelogController::class)->name('pages.changelog');

Route::get('/about/about-nitrox', [\App\Http\Controllers\AboutController::class, 'nitrox'])->name('about.about');
Route::view('/about/team', 'about.team')->name('about.team');

Route::redirect('/deeplink/download/latest', config('nitrox.download_url'), 302);

Route::view('/features/resources', 'features.resources')->name('features.resources');
Route::view('/features/launcher', 'features.launcher')->name('features.launcher');
Route::view('/features/server', 'features.server')->name('features.server');
Route::view('/features/open-source', 'features.open-source')->name('features.open-source');

Route::view('/wizard', 'wizard.home')->name('wizard.home');
Route::view('/wizard/update/choose', 'wizard.update')->name('wizard.choose.update');
Route::view('/wizard/fresh-install/choose', 'wizard.fresh')->name('wizard.choose.fresh');

Route::view('/wizard/fresh-install/steam/done', 'wizard.steam.fresh.done')->name('wizard.steam.done');
Route::view('/wizard/fresh-install/steam/step-2', 'wizard.steam.fresh.step2')->name('wizard.steam.step2');
Route::view('/wizard/fresh-install/steam/step-3', 'wizard.steam.fresh.step3')->name('wizard.steam.step3');
Route::view('/wizard/fresh-install/steam/step-4', 'wizard.steam.fresh.step4')->name('wizard.steam.step4');
Route::view('/wizard/fresh-install/steam/step-5', 'wizard.steam.fresh.step5')->name('wizard.steam.step5');

Route::view('/wizard/update/steam/done', 'wizard.steam.update.done')->name('wizard.steam.update.done');
Route::view('/wizard/steam/update/step-2', 'wizard.steam.update.step2')->name('wizard.steam.update.step2');
Route::view('/wizard/steam/update/step-3', 'wizard.steam.update.step3')->name('wizard.steam.update.step3');
Route::view('/wizard/steam/update/step-4', 'wizard.steam.update.step4')->name('wizard.steam.update.step4');
Route::view('/wizard/steam/update/step-5', 'wizard.steam.update.step5')->name('wizard.steam.update.step5');
Route::view('/wizard/steam/update/step-6', 'wizard.steam.update.step6')->name('wizard.steam.update.step6');

Route::view('/wizard/fresh-install/epic/done', 'wizard.epic.fresh.done')->name('wizard.epic.done');
Route::view('/wizard/fresh-install/epic/step-2', 'wizard.epic.fresh.step2')->name('wizard.epic.step2');
Route::view('/wizard/fresh-install/epic/step-3', 'wizard.epic.fresh.step3')->name('wizard.epic.step3');
Route::view('/wizard/fresh-install/epic/step-4', 'wizard.epic.fresh.step4')->name('wizard.epic.step4');
Route::view('/wizard/fresh-install/epic/step-5', 'wizard.epic.fresh.step5')->name('wizard.epic.step5');

Route::view('/wizard/update/epic/done', 'wizard.epic.update.done')->name('wizard.epic.update.done');
Route::view('/wizard/epic/update/step-2', 'wizard.epic.update.step2')->name('wizard.epic.update.step2');
Route::view('/wizard/epic/update/step-3', 'wizard.epic.update.step3')->name('wizard.epic.update.step3');
Route::view('/wizard/epic/update/step-4', 'wizard.epic.update.step4')->name('wizard.epic.update.step4');
Route::view('/wizard/epic/update/step-5', 'wizard.epic.update.step5')->name('wizard.epic.update.step5');
Route::view('/wizard/epic/update/step-6', 'wizard.epic.update.step6')->name('wizard.epic.update.step6');
