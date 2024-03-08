@extends('layouts.app')

@section('title')
    Connexion - Woodycraftweb
@endsection

@section('content')

    <h1>Pour se connecter, c'est par ici</h1>

    <form id="login-form" action="{{ route('login') }}" method="POST">
        @csrf

        <x-error-message :message="session('login_error')"/><br>

        <x-input-field type="text" name="username" :value="old('username')" placeholder="Nom d'utilisateur"/><br>

        <x-input-field type="password" name="password" value="" placeholder="Mot de passe" /><br>

        <x-button type="submit" label="Connexion"/>
    </form>

@endsection
