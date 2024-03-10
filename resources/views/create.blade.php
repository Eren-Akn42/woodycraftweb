@extends('layouts.app')

@section('title')
   Adresses - Woodycraftweb
@endsection

@section('content')
    <h1>Créer une adresse</h1>

    <form method="POST" action="{{ route('address.store') }}">
        @csrf
        {{-- Ici, ajoute les champs du formulaire pour les données de l'adresse --}}
        <div>
            <label for="forename">Prénom</label>
            <input type="text" name="forename" id="forename" required>
        </div>
        <div>
            <label for="surname">Nom</label>
            <input type="text" name="surname" id="surname" required>
        </div>
        {{-- Répète pour les autres champs --}}
        <button type="submit" class="btn btn-primary">Enregistrer l'Adresse</button>
    </form>
@endsection
