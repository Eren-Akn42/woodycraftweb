<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CartController;
use App\Http\Middleware\PreventCacheMiddleware;

// Accueil
Route::get('/', [ProductController::class, 'index'] , function () {
    return view('home');
})->name('home');

// Connexion
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Inscription
Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [LoginController::class, 'register']);

// Déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Catégories
Route::get('/categories', [CategorieController::class, 'index'], function () {
    return view('categories');
})->name('categories');

Route::get('/categories/{categorie}', [ProductController::class, 'showByCategory']);

// Panier
Route::get('/cart', [CartController::class, 'showCart'])->name('cart');
Route::get('/product/{product}/quantity', [ProductController::class, 'ShowQuantityForm'])->name('product.quantity');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Admin
Route::middleware('admin')->get('/admin', function () {
    return view('admin');
});
