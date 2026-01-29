
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReleaseController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ShowController;

// Health check (keep this forever)
Route::get('/health', fn () => 'OK');

// Real site routes
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/releases', [ReleaseController::class, 'index'])->name('releases.index');
Route::get('/releases/{slug}', [ReleaseController::class, 'show'])->name('releases.show');

Route::get('/artists', [ArtistController::class, 'index'])->name('artists.index');
Route::get('/artists/{slug}', [ArtistController::class, 'show'])->name('artists.show');

Route::get('/news', [NewsController::class, 'index'])->name('news.index');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.show');

Route::get('/shows', [ShowController::class, 'index'])->name('shows.index');
