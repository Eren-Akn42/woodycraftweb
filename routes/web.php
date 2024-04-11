<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DeliveryAddresseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;

// Accueil
Route::get('/', [ProductController::class, 'index'] , function () {
    return view('home');
})->name('home');

// Connexion
Route::get('/login', function () {
    return view('authentication.login');
})->name('login');

Route::post('/login', [UserController::class, 'login']);

// Inscription
Route::get('/register', function () {
    return view('authentication.register');
})->name('register');

Route::post('/register', [UserController::class, 'register']);

// Déconnexion
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Catégories
Route::get('/categories', [CategorieController::class, 'index'], function () {
    return view('categories');
})->name('categories');

Route::get('/categories/{categorie}', [CategorieController::class, 'showByCategorie'])->name('categorie.products');

// Panier
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/product/{product}/quantity', [ProductController::class, 'ShowQuantityForm'])->name('product.quantity');
Route::post('/cart/add/{productId}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('/cart/remove/{productId}', [CartController::class, 'removeFromCart'])->name('cart.remove');

// Formulaire de création d'une nouvelle adresse
Route::get('/addresse/create', function () {
    return view('addresse.create');
})->name('addresse.create');

// Pour lister les adresses existantes et fournir un bouton pour rediriger vers la création d'une nouvelle adresse
Route::get('/addresse/index', [DeliveryAddresseController::class, 'index'])->name('addresse.index');

Route::get('/addresse/use', [DeliveryAddresseController::class, 'use'])->name('addresse.use');

// Enregistrement d'une nouvelle adresse
Route::post('/addresse/store', [DeliveryAddresseController::class, 'store'])->name('addresse.store');

// Paiement par chèque
Route::get('/payment/facture', [PaymentController::class, 'generatePDF'])->name('payment.facture');

// Paiement via Paypal
Route::get('/payment/paypal', function () {
    return redirect('https://www.paypal.com/paypalme/woodycraftweb');
});

// Admin

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

Route::post('/admin/validate/{orderId}', [AdminController::class, 'validateOrder'])->middleware('admin')->name('admin.validateOrder');
