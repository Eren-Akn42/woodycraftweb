<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255|unique:logins',
            'password' => 'required|string|min:6|confirmed',
        ], [
            'username.required' => 'Le nom d’utilisateur est requis.',
            'username.unique' => 'Ce nom d’utilisateur existe déjà.',
            'password.required' => 'Un mot de passe est requis.',
            'password.min' => 'Le mot de passe doit contenir au moins 6 caractères.',
            'password.confirmed' => 'Les mots de passe ne correspondent pas.',
        ]);

        $customer = Customer::create();

        $login = Login::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'customer_id' => $customer->id,
        ]);

        Auth::login($login);

        return redirect('/');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required', 'string'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->with('login_error', 'Les informations de connexion fournies ne sont pas valides.')->onlyInput('username');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
