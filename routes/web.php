<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\Page2;
use App\Http\Controllers\pages\HomePage;
use App\Http\Controllers\pages\MiscError;

Route::get('/', [HomePage::class, 'index'])->name('pages-home');
Route::get('/page-2', [Page2::class, 'index'])->name('pages-page-2');

Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
  Route::get('/dashboard', function () {
    return view('/');
  })->name('dashboard');
});
