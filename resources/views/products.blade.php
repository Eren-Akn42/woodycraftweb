@extends('layouts.app')

@section('title')
    {{ $categoryName }} - Woodycraftweb
@endsection

@section('content')

    <h1>{{ $categoryName }}</h1>

    <div class="product-box">
        @foreach($products as $product)
            <x-product :product="$product"/>
        @endforeach
    </div>

@endsection
