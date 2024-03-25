<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\DeliveryAddresse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class DeliveryAddresseController extends Controller
{
    // Fonction pour afficher l'adresse existante du user
    public function index()
    {
        if (Auth::check()) {
            $customer = Auth::user()->customer;
            if (!$customer->registered) {
                return view('addresse.create');
            }
            return view('addresse.index', compact('customer'));
        } else {
            return view('addresse.create');
        }
    }

    // Utiliser une adresse existante pour un customer
    public function use()
    {
        if (Auth::check()) {
            $customer = Auth::user()->customer;
            $address = $customer;
            session(['customer_id' => $customer->id]);
            return view('payment.index', compact('address'));
        } else {
            return view('addresse.create');
        }
    }

    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'forename' => 'required',
            'surname' => 'required',
            'add1' => 'required',
            'add2' => 'nullable',
            'add3' => 'nullable',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        // Création données customer première fois puis redirection vers page de paiement
        if (Auth::check()) {
            $customer = Auth::user()->customer;
            if (!$customer->registered) {
                $customer['forename'] = $request->forename;
                $customer['surname'] = $request->surname;
                $customer['add1'] = $request->add1;
                $customer['add2'] = $request->add2;
                $customer['add3'] = $request->add3;
                $customer['postcode'] = $request->postcode;
                $customer['phone'] = $request->phone;
                $customer['email'] = $request->email;
                $customer['registered'] = true;
                $customer->update();
                $address = $customer;
                return view('payment.index', compact('address'));
            }
        }

        // Insertion en base de données
        $address = DeliveryAddresse::create([
            'forename' => $request->forename,
            'surname' => $request->surname,
            'add1' => $request->add1,
            'add2' => $request->add2,
            'add3' => $request->add3,
            'postcode' => $request->postcode,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        session(['address_id' => $address->id]);

        return view('payment.index', compact('address'));
    }
}
