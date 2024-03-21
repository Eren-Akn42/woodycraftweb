@extends('layouts.app')

@section('title')
   Créer une adresse - Woodycraftweb
@endsection

@section('content')

    <h1>Créer une Adresse</h1>

        <form action=" {{ route('addresse.store')}}" method="POST">
            @csrf

            <input type="text" id="forename" name="forename" placeholder="Nom de famille" required><br><br>
            <input type="text" id="surname" name="surname" placeholder="Prénom" required><br><br>
            <input type="text" id="add1" name="add1" placeholder="Ligne d'adresse 1" required><br><br>
            <input type="text" id="add2" name="add2" placeholder="Ligne d'adresse 2 (optionnel)"><br><br>
            <input type="text" id="add3" name="add3" placeholder="Ligne d'adresse 3 (optionnel)"><br><br>
            <input type="text" id="postcode" name="postcode" placeholder="Code postal" required><br><br>
            <input type="text" id="phone" name="phone" placeholder="Téléphone" required><br><br>
            <input type="text" id="email" name="email" placeholder="Email" required><br><br>

            <button type="submit">Créer une adresse</button>
        </form>

@endsection
