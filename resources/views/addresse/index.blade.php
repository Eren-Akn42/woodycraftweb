@extends('layouts.app')

@section('title')
   Adresses - Woodycraftweb
@endsection

@section('content')

    <h1>Vos Adresses</h1>

    @foreach ($addresse as $addresse_elem)
        <li>{{ $addresse_elem }}</li>
    @endforeach

@endsection
