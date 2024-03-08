@extends('layouts.app')

@section('title')
    Inscription - Woodycraftweb
@endsection

@section('content')

    <form action="{{ route('register') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p style="color: red;">{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <div>
            <label for="username">Nom d'utilisateur :</label>
            <input type="text" id="username" name="username" required>
        </div>

        <br>

        <div>
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password" required>
        </div>

        <br>

        <div>
            <label for="password_confirmation">Confirmer le mot de passe :</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <br>

        <div>
            <button type="submit">S'inscrire</button>
        </div>
    </form>

@endsection
