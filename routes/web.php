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

Route::get('/login', function () {
    return view('authentification.login');
})->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.perform');

Route::get('/register', function () {
    return view('authentification.register');
})->name('register');

Route::post('/register', [LoginController::class, 'register']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['admin'])->group(function () {
    // Routes réservées aux administrateurs
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
});