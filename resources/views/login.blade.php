<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Se connecter - Woodycraftweb</title>
    </head>
    
    <body>
        <form action="{{ route('login') }}" method="POST">
            @csrf

            @if(session('success'))
                <div style="color: green;">
                    {{ session('success') }}
                </div>
                <br>
            @endif

            @if ($errors->any())
                <div style="color: red;">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
                <br>
            @endif
    
            <div>
                <label for="username">Nom d'utilisateur :</label>
                <input type="text" id="username" name="username" required value="{{ old('username') }}">
            </div>

            <br>
    
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>

            <br>
    
            <div>
                <button type="submit">Connexion</button>
            </div>
        </form>
    </body>
</html>