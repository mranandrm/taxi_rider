<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;


// Home page route
Route::get('/', [HomeController::class, 'home'])->name('home');

// 404 page route
Route::get('/404', [HomeController::class, 'notFound'])->name('404');