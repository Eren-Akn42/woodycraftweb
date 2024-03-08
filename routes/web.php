<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Middleware\PreventCacheMiddleware;

Route::get('/', [ProductController::class, 'index'] , function () {
    return view('home');
})->name('home');

Route::get('/categories', [CategorieController::class, 'index'], function () {
    return view('categories');
})->name('categories');

Route::get('/categories/{categorie}', [ProductController::class, 'showByCategory']);

Route::get('/basket', function () {
    return view('basket');
})->name('basket');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [LoginController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('admin')->get('/admin', function () {
    return view('admin');
});
