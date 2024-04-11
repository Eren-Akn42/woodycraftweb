@extends('layouts.app')

@section('title')
    Page de paiement - Woodycraftweb
@endsection

@section('content')
    <h1>Choisissez votre mode de paiement</h1>

    <li>{{ $address->forename }}</li>
    <li>{{ $address->surname }}</li>
    <li>{{ $address->add1 }}</li>
    @if ($address->add2 != null)
        <li>{{ $address->add2 }}</li>
    @endif
    @if ($address->add3 != null)
        <li>{{ $address->add3 }}</li>
    @endif
    <li>{{ $address->postcode }}</li>
    <li>{{ $address->phone }}</li>
    <li>{{ $address->email }}</li> <br>

    <a href="{{ route('payment.paypal') }}" target="_blank">Payer avec Paypal</a> <br><br>

<<<<<<< HEAD
    <a href="{{ route('payment.facture') }}">Payer par chèque</a>
=======
    <a href="{{ route('payment.cheque') }}">Payer par chèque</a>

>>>>>>> 790a13f53b5680621aa68fd01b9f7447b263a3b8
@endsection
