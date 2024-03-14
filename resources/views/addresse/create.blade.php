@extends('layouts.app')

@section('title')
   Créer une adresse - Woodycraftweb
@endsection

@section('content')

    <h1>Créer une Adresse</h1>

    @guest
        <form action=" {{ route('payment')}}" method="get">
            @csrf

            <input type="text" id="forename" name="forename" placeholder="Nom de famille" required><br><br>
            <input type="text" id="surname" name="surname" placeholder="Prénom" required><br><br>
            <input type="text" id="add1" name="add1" placeholder="Ligne d'adresse 1" required><br><br>
            <input type="text" id="add2" name="add2" placeholder="Ligne d'adresse 2" required><br><br>
            <input type="text" id="add3" name="add3" placeholder="Ligne d'adresse 3" required><br><br>
            <input type="text" id="postcode" name="postcode" placeholder="Code postal" required><br><br>
            <input type="text" id="email" name="email" placeholder="Email" required><br><br>
            <input type="hidden" id="registered" name="registered" value="1" required>

            <button type="submit">Créer une adresse</button>
        </form>
    @endguest

    @auth
        @if ()

        @endif
        <form action=" {{ route('addresse.store')}}" method="post">
            @csrf

            <input type="text" id="forename" name="forename" placeholder="Nom de famille" required><br><br>
            <input type="text" id="surname" name="surname" placeholder="Prénom" required><br><br>
            <input type="text" id="add1" name="add1" placeholder="Ligne d'adresse 1" required><br><br>
            <input type="text" id="add2" name="add2" placeholder="Ligne d'adresse 2" ><br><br>
            <input type="text" id="add3" name="add3" placeholder="Ligne d'adresse 3" ><br><br>
            <input type="text" id="postcode" name="postcode" placeholder="Code postal" required><br><br>
            <input type="text" id="email" name="email" placeholder="Email" required><br><br>

            <button type="submit">Créer une adresse</button>
        </form>
    @endauth

@endsection
