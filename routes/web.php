<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;

Route::get('/', function () {
    if (Auth::check()) {
        $account = Auth::user();
        return view('home', ['account' => $account]);
    }
    return view('home');
});

// Route pour afficher le formulaire de connexion
Route::get('/login', function () {
    return view('authentification.login');
})->name('login');

// Route pour traiter la soumission du formulaire de connexion
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

// Route pour afficher le formulaire d'inscription
Route::get('/register', function () {
    return view('authentification.register');
})->name('register');

// Route pour traiter la soumission du formulaire d'inscription
Route::post('/register', [LoginController::class, 'register']);

// Route pour déconnecter l'utilisateur
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');