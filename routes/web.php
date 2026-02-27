<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontendController;


/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';
require __DIR__.'/admin-dashboard.php';


/*
|--------------------------------------------------------------------------
| Frontend Routes
|--------------------------------------------------------------------------
*/
Route::group([], function () {
    // Homepage
    Route::get('/', [FrontendController::class, 'index'])->name('index');
    Route::get('/about', [FrontendController::class, 'About'])->name('about');
    Route::get('/service', [FrontendController::class, 'Service'])->name('ser');
    Route::get('/portfolio', [FrontendController::class, 'pro'])->name('port');
    Route::get('/contact', [FrontendController::class, 'Contact'])->name('contact');
});










