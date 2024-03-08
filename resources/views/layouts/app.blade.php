<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('styles.css') }}">
    </head>

    <body>

        {{-- Éléments en commun --}}
        <a href="{{ route('home') }}">Accueil</a>
        <a href="{{ route('categories') }}">Catégories</a>

        {{-- Si l'utilisateur est un visiteur --}}
        @guest
            <a href="{{ route('register') }}">Créer un compte</a>
            <a href="{{ route('login') }}">Se connecter</a>
        @endguest

        {{-- Si l'utilisateur est un client --}}
        @auth
            <p>Compte : {{ Auth::user()->username }}</p>
            <form action="{{ route('logout') }}" method="POST">@csrf<button class="button-as-link" type="submit">Déconnexion</button></form>
        @endauth

        <br><br>

        @yield('content')
    </body>
</html>
