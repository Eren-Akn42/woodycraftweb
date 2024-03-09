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
        <header>
            <nav>
                {{-- Éléments en commun --}}
                <a href="{{ route('home') }}">Accueil</a>
                <a href="{{ route('categories') }}">Catégories</a>
                <a href="{{ route('cart') }}">Mon panier</a>

                {{-- Si l'utilisateur est un visiteur --}}
                @guest
                    <a href="{{ route('register') }}">Créer un compte</a>
                    <a href="{{ route('login') }}">Se connecter</a>
                @endguest

                {{-- Si l'utilisateur est un client --}}
                @auth
                    <a href="#">Compte : {{ Auth::user()->username }}</a>
                    <form action="{{ route('logout') }}" method="POST">@csrf<button id="logout-button" type="submit">Déconnexion</button></form>
                @endauth
            </nav>
        </header>
        @yield('content')
    </body>
</html>
