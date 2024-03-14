@extends('layouts.app')

@section('title')
    {{ $categoryName }} - Woodycraftweb
@endsection

@section('content')

    <h1>{{ $categoryName }}</h1>

    <div>
        @foreach($products as $product)
            <div>
                <h2>{{ $product->name }}</h2>
                <p>{{ $product->description }}</p>
                <img src="{{ asset('img/' . $product->image) }}" alt="{{ $product->name }}">
                <p>{{ number_format($product->price, 2) }}</p>
                <a href="#">Choisir la quantité</a>
            </div>
        @endforeach
    </div>

@endsection
