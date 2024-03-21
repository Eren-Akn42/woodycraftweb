@extends('layouts.app')

@section('title')
   Adresses - Woodycraftweb
@endsection

@section('content')

    <h1>Vos Adresses</h1>

    <li>{{ $customer->forename }}</li>
    <li>{{ $customer->surname }}</li>
    <li>{{ $customer->add1 }}</li>
    @if ($customer->add2 != NULL)
        <li>{{ $customer->add2 }}</li>
    @endif
    @if ($customer->add3 != NULL)
        <li>{{ $customer->add3 }}</li>
    @endif
    <li>{{ $customer->postcode }}</li>
    <li>{{ $customer->phone }}</li>
    <li>{{ $customer->email }}</li>

    <a href="{{ route('addresse.use') }}">Utiliser cette adresse</a>

    <a href="{{ route('addresse.create') }}">Utiliser une adresse différente</a>

@endsection
