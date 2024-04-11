<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function generatePDF()
    {
        $cart = session('cart', []);
        if (empty($cart)) {
            return redirect()->back()->with('error', 'Votre panier est vide.');
        }

        $total = 0;

        $customer_id = Auth::check() ? Auth::user()->customer->id : null;

        $addresse_id = session('address_id');

        $order = Order::create([
            'customer_id' => $customer_id,
            'delivery_addresse_id' => $addresse_id,
            'registered' => Auth::check() ? 1 : 0,
            'payment_type' => 'cheque',
            'status' => 0,
            'session' => json_encode($cart),
            'total' => 0,
        ]);

        foreach ($cart as $productId => $details) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $details['quantity'],
            ]);

            $total += $details['price'] * $details['quantity'];
        }

        $order->update(['total' => $total]);

        $pdf = PDF::loadView('facture', [
            'cart' => $cart,
            'order' => $order
        ]);

        return $pdf->stream('facture_woodycraft.pdf');
    }
}
