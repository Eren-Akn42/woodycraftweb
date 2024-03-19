<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\DeliveryAddresse;
use App\Models\Order;
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

        $cart = session()->get('cart', []);

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

        // Création des données du customer pour un user
        if (Auth::check()) {
            $customer = Auth::user()->customer;

            if (!$customer->registered) {
                $data['registered'] = true;
                $customer->update($data);
            }
        }

        if (Auth::check()) {
            $order = Order::create([
                'customer_id' => Auth::user()->customer->id,
                'delivery_addresse_id' => $address->id,
                'registered' => FALSE,
                'payment_type' => NULL,
                'status' => 0,
                'session' => NULL,
                'total' => $cart['price'] * $cart['quantity'],
            ]);
        } else {
            $order = Order::create([
                'customer_id' => NULL,
                'delivery_addresse_id' => $address->id,
                'registered' => FALSE,
                'payment_type' => NULL,
                'status' => 0,
                'session' => NULL,
                'total' => NULL,
            ]);
        }

        return view('payment.index', compact('address'));
    }
}
