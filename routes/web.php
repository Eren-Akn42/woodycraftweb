<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

// Route pour afficher le formulaire de connexion
Route::get('/login', function () {
    return view('authentification.login');
})->name('login');

// Route pour traiter la soumission du formulaire de connexion
Route::post('/login', [AuthController::class, 'login'])->name('login.perform');

// Route pour afficher le formulaire d'inscription
Route::get('/register', function () {
    return view('authentification.register');
})->name('register');

// Route pour traiter la soumission du formulaire d'inscription
Route::post('/register', [AuthController::class, 'register']);