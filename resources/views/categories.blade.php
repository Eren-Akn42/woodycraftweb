@extends('layouts.app')

@section('title')
    Catégories - Woodycraftweb
@endsection

@section('content')

    @foreach($categories as $categorie)
        <li> {{ $categorie->name }} </li>
    @endforeach

@endsection
