@extends('layouts.app')

@section('title')
    Inscription - Woodycraftweb
@endsection

@section('content')

    <h1>Pour créer un compte, c'est par ici</h1>

    <form id="login-form" action="{{ route('register') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <x-error-message :message="$error" /><br>
                @endforeach
            </div>
        @endif

        <x-input-field type="text" name="username" :value="old('username')" placeholder="Nom d'utilisateur"/><br>

        <x-input-field type="password" name="password" value="" placeholder="Mot de passe"/><br>

        <x-input-field type="password" name="password_confirmation" value="" placeholder="Confirmation du mot de passe"/><br>

        <x-button type="submit" label="S'inscrire"/>
    </form>

@endsection
