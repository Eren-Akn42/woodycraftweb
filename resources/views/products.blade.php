@extends('layouts.app')

@section('title')
    Catégorie - Woodycraftweb
@endsection

@section('content')

    <h1>{{ $products[1]->categorie_id }}</h1>

    <div class="product-box">
        @foreach($products as $product)
            <x-product :product="$product"/>
        @endforeach
    </div>

@endsection
