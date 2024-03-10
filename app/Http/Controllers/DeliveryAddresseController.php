<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DeliveryAddresse;

class DeliveryAddresseController extends Controller
{
    public function index()
    {
        // Assurer que l'utilisateur est connecté pour accéder à ses adresses
        if (!Auth::check()) {
            return redirect()->route('home'); // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
        }

        $user = Auth::user();
        // Assumer que tu as une relation définie dans User pour les adresses
        $addresses = $user->deliveryAddresses; // Récupère les adresses de l'utilisateur

        return view('address.index', compact('addresses'));
    }

    public function create()
    {
        return view('create'); // Retourne la vue pour créer une nouvelle adresse
    }

    public function store(Request $request)
    {
        $request->validate([
            'forename' => 'required',
            'surname' => 'required',
            'add1' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        $user = Auth::user();
        $user->deliveryAddresses()->create($request->all()); // Crée une nouvelle adresse pour l'utilisateur

        return redirect()->route('address.index')->with('success', 'Adresse ajoutée avec succès.');
    }
}
