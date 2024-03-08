<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Categorie;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('home', compact('products'));
    }

    public function showByCategory(Categorie $categorie)
    {
        $products = $categorie->products;
        $categoryName = $categorie->name;
        return view('products', compact('products', 'categoryName'));
    }
}
