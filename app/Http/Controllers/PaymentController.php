<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Order;
use App\Models\OrderItem;

class PaymentController extends Controller
{
    // public function generatePDF()
    // {
    //     // Création de la commande
    //     $order = Order::create([
    //         'customer_id' => session('customer_id'),
    //         'delivery_addresse_id' => session('address_id'),
    //         'registered' => NULL,
    //         'payment_type' => 'Chèque',
    //         'status' => 0,
    //         'session' => json_encode(session()->all()),
    //         'total' => NULL,
    //     ]);

    //     // Création des objets de la commande
    //     $cart = session('cart', []);
    //     foreach($cart as $id) {
    //         $orderitem = OrderItem::create([
    //             'order_id' => $order->id,
    //             'product_id' => $id['product_id'],
    //             'quantity' => $id['quantity'],
    //         ]);
    //         $order->total += $id['price'] * $id['quantity'];
    //     };

    //     $session_data = $order->session;
    //     $pdf = PDF::loadView('facture', compact('session_data'));
    //     return $pdf->download('facture.pdf');
    // }

    public function listDataCheque()
    {
        return view('payment.cheque');
    }
}
