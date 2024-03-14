<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DeliveryAddresseController;

// Accueil
Route::get('/', [ProductController::class, 'index'] , function () {
    return view('home');
})->name('home');

// Connexion
Route::get('/login', function () {
    return view('authentication.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login']);

// Inscription
Route::get('/register', function () {
    return view('authentication.register');
})->name('register');

Route::post('/register', [LoginController::class, 'register']);

// Déconnexion
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Catégories
Route::get('/categories', [CategorieController::class, 'index'], function () {
    return view('categories');
})->name('categories');

Route::get('/categories/{id}', [CategorieController::class, 'showByCategorie'])->name('categorie.products');

// Panier
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/product/{product}/quantity', [ProductController::class, 'ShowQuantityForm'])->name('product.quantity');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Formulaire de création d'une nouvelle adresse
Route::get('/addresse/create', [DeliveryAddresseController::class, 'create'])->name('addresse.create');

// Pour lister les adresses existantes et fournir un bouton pour rediriger vers la création d'une nouvelle adresse
Route::get('/addresse/index', [DeliveryAddresseController::class, 'index'])->name('addresse.index');

// Enregistrement d'une nouvelle adresse
Route::post('/addresse', [DeliveryAddresseController::class, 'store'])->name('addresse.store');

// Admin
Route::get('/admin', function () {
    return view('admin');
});
