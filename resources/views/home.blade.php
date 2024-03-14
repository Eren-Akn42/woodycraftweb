@extends('layouts.app')

@section('title')
    Page d'accueil - Woodycraftweb
@endsection

@section('content')

    <h1>Bienvenue sur Woodycraft</h1>

    <div>
        @foreach ($products as $product)
            <div>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                <p>{{ number_format($product->price, 2) }}€</p>
                <a href="{{ route('product.quantity', $product->id) }}">Choisir la quantité</a>
            </div>
        @endforeach
    </div>

@endsection
