@extends('layouts.app')

@section('title')
    Catégories - Woodycraftweb
@endsection

@section('content')

    <h1>Catégories</h1>

    <div>
        @foreach($categories as $categorie)
            <div>
                <h2>{{ $categorie->name }}</h2>
                <p>{{ $categorie->description }}</p>
                <img src="{{ asset('img/' . $categorie->image) }}" alt="{{ $product->name }}">
                <a href="{{ route('categorie.products', $categorie->id) }}">Voir la catégorie</a>
            </div>
        @endforeach
    </div>

@endsection
