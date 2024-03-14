@extends('layouts.app')

@section('title')
    Inscription - Woodycraftweb
@endsection

@section('content')

    <h1>Pour créer un compte, c'est par ici</h1>

    <form action="{{ route('register') }}" method="POST">

        @csrf

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div>
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif

        <input type="text" name="username" id="username" value="{{ old('username') }}" placeholder="Nom d'utilisateur">

        <input type="password" name="password" id="password" placeholder="Mot de passe">

        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmer le mot de passe">

        <button type="submit">S'inscrire</button>

    </form>

@endsection
