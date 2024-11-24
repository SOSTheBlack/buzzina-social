<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\MiscError;

Route::name('site.')->group(function () {
  Route::get('/', fn() => response()->json(['site' => 'home']))->name('home');
});

Route::prefix('dashboard')->name('dashboard.')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
  Route::get('/', [HomePage::class, 'index'])->name('home');
  Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

  Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
});


Route::fallback([MiscError::class, 'index'])->name('404');
