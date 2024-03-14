@extends('layouts.app')

@section('title')
    Panier - Woodycraftweb
@endsection

@section('content')
    <h1>Panier</h1>

        @if(session('success'))
            <div>
                {{ session('success') }}
            </div>
        @endif

        <h2>{{ $product->name }}</h2>
        <p>{{ $product->description }}</p>
        <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">

        <form action="{{ route('cart.add', $product->id) }}" method="POST">
            @csrf
            <div>
                <label for="quantity">Quantité :</label>
                <input type="number" id="quantity" name="quantity" value="1" min="1">
            </div>
            <button type="submit">Ajouter au panier</button>
        </form>

@endsection
