<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    public function index()
    {
        $categories = Categorie::all();
        return view('categories', compact('categories'));
    }

    public function showByCategorie(Categorie $categorie)
    {
        $products = $categorie->products;
        $categoryName = $categorie->name;
        return view('products', compact('products', 'categoryName'));
    }
}
