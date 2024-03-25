@extends('layouts.app')

@section('title')
    Page de paiement - Woodycraftweb
@endsection

@section('content')

    <h1>Choisissez votre mode de paiement</h1>

    <li>{{ $address->forename }}</li>
    <li>{{ $address->surname }}</li>
    <li>{{ $address->add1 }}</li>
    @if ($address->add2 != NULL)
        <li>{{ $address->add2 }}</li>
    @endif
    @if ($address->add3 != NULL)
        <li>{{ $address->add3 }}</li>
    @endif
    <li>{{ $address->postcode }}</li>
    <li>{{ $address->phone }}</li>
    <li>{{ $address->email }}</li> <br>

    {{-- <a href="{{ route(payment.paypal) }}">Payer avec Paypal</a> --}}

    <a href="{{ route('payment.facture') }}">Payer par chèque</a>

@endsection
