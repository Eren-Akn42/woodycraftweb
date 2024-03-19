<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Deliveryaddresse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DeliveryAddresseController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $customer = Auth::user()->customer;
            if (!$customer->registered) {
                return view('addresse.create');
            }
            return view('addresse.index', compact('customer'));
        }
    }

    public function create()
    {
        return view('addresse.create');
    }

    public function store(Request $request)
    {
        // Validation des données
        $data = $request->validate([
            'forename' => 'required',
            'surname' => 'required',
            'add1' => 'required',
            'add2' => 'nullable',
            'add3' => 'nullable',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        // Création d'une nouvelle adresse dans la table d'adresse
        $address = new Deliveryaddresse($data);

        // Création des données du customer pour un user
        if (Auth::check()) {
            $customer = Auth::user()->customer;

            if (!$customer->registered) {
                $data['registered'] = true;
                $customer->update($data);
            }
        }

        return view('payment.index', compact('address'));
    }
}
