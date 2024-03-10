@extends('layouts.app')

@section('title')
    Catégories - Woodycraftweb
@endsection

@section('content')

    <h1>Catégories</h1>

    <div class="categorie-box">
        @foreach($categories as $categorie)
            <x-categorie :categorie="$categorie"/>
        @endforeach
    </div>

@endsection
