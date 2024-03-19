<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart', compact('cart'));
    }

    public function addToCart(Request $request, $productId)
    {
        $product = Product::findOrFail($productId);
        $cart = session()->get('cart', []);

        $quantity = (int) $request->input('quantity', 1);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += $quantity;
        } else {
            $cart[$productId] = [
                "productId" => $productId,
                "name" => $product->name,
                "quantity" => $quantity,
                "price" => $product->price,
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Produit ajouté au panier avec succès !');
    }

    public function removeFromCart(Request $request, $productId)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', 'Produit retiré du panier avec succès !');
    }


}
