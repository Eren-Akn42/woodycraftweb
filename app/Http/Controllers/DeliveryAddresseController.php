<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\DeliveryAddresse;
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
        } else {
            return view('addresse.create');
        }
    }

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
        $validatedData = $request->validate([
            'forename' => 'required',
            'surname' => 'required',
            'add1' => 'required',
            'add2' => 'nullable',
            'add3' => 'nullable',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
        ]);

        if (Auth::check()) {
            $customer = Auth::user()->customer;

            if (!$customer->registered) {
                $customer->registered = true;
                $customer->update($validatedData);
                session(['customer_id' => $customer->id]);
                $address = $customer;
                return view('payment.index', compact('address'));
            }

            session(['customer_id' => $customer->id]);
            $address = DeliveryAddresse::create($validatedData);
        } else {
            $address = DeliveryAddresse::create($validatedData);
            session(['address_id' => $address->id]);
        }

        return view('payment.index', compact('address'));
    }
}
