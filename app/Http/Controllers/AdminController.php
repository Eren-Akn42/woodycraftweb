<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class AdminController extends Controller
{
    public function index()
{
    $orders = Order::with(['customer', 'orderItems.product'])->get();
    return view('admin', compact('orders'));
}

    public function validateOrder($orderId)
    {
        $order = Order::find($orderId);
        if ($order) {
            $order->update(['status' => 1]);
        }

        return redirect('/admin')->with('success', 'Commande validée avec succès.');
    }
}
