<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\DeliveryAddresse;
use App\Models\Customer;

class DeliveryAddresseController extends Controller
{
    public function create()
    {
        return view('addresse.create');
    }

    public function index()
    {
        $user = auth()->user();

        if (!$user) {
            return view('login');
        }

        $customerId = $user->customer_id;

        $customer = Customer::find($customerId);

        if($customer->registered == NULL) {
            return view('addresse.create');
        }

        $addresse = [
            $customer->forename,
            $customer->surname,
            $customer->add1,
            $customer->add2,
            $customer->add3,
            $customer->postcode,
            $customer->phone,
            $customer->email,
        ];

        return view('addresse.index', compact('addresse'));
    }

    public function store(Request $request)
    {
        // Validation des données entrées
        $validated = $request->validate([
            'forename' => 'required|max:100',
            'surname' => 'required|max:100',
            'add1' => 'required|max:100',
            'add2' => 'max:100',
            'add3' => 'max:100',
            'postcode' => 'required|max:5',
            'phone' => 'required|max:10',
            'email' => 'required|max:100',
        ]);

        // Création et sauvegarde de la nouvelle adresse
        $adresse = new DeliveryAddresse();

        $adresse->forename = $request->forename;
        $adresse->surname = $request->surname;
        $adresse->add1 = $request->add1;
        $adresse->add2 = $request->add2;
        $adresse->add3 = $request->add3;
        $adresse->postcode = $request->postcode;
        $adresse->phone = $request->phone;
        $adresse->email = $request->email;
        $adresse->registered = true;

        $adresse->save();

        // Redirection vers la page de paiement
        return redirect()->route('paiement.index', compact('adresse'));
    }
}
