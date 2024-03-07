<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Accueil - Woodycraftweb</title>
        <link rel="stylesheet" href="{{ asset('styles.css') }}">
    </head>
    
    <body>
        @if (Auth::guest())
            <a href="{{ route('register') }}">Créer un compte</a>
            <a href="{{ route('login') }}">Se connecter</a>
        @endif
        @if (isset($account))
            <a href="#">Mon compte</a>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit">Déconnexion</button>
            </form>
        @endif
    </body>
</html>