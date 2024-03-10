@extends('layouts.app')

@section('title')
   Adresses - Woodycraftweb
@endsection

@section('content')

    <h1>Vos Adresses</h1>

    <a href="{{ route('address.create') }}>Ajouter une nouvelle adresse</a>
    <ul>
        @foreach ($addresses as $address)
            <li>
                {{ $address->forename }} {{ $address->surname }} - {{ $address->add1 }} {{ $address->add2 }} {{ $address->postcode }} - {{ $address->phone }} - {{ $address->email }}
            </li>
        @endforeach
    </ul>

@endsection
