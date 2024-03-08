@extends('layouts.app')

@section('title')
    Page d'accueil - Woodycraftweb
@endsection

@section('content')

    @foreach ($products as $product)
        <x-product :product="$product" />
    @endforeach

@endsection
