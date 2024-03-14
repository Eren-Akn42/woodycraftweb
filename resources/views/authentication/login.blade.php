@extends('layouts.app')

@section('title')
    Connexion - Woodycraftweb
@endsection

@section('content')

    <h1>Pour se connecter, c'est par ici</h1>

    <form action="{{ route('login') }}" method="POST">

        @csrf

        @if(session('login_error'))
            <div>
                {{ session('login_error') }}
            </div>
        @endif

        <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Nom d'utilisateur">

        <input type="password" name="password" id="password" placeholder="Mot de passe">

        <button type="submit">Se connecter</button>

    </form>

@endsection
