<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Index</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur Akaunting</h1>
        <p>Ceci est la page d'accueil personnalisée.</p>
        <a href="{{ route('register') }}" class="btn btn-primary">Créer un compte</a>
        <a href="{{ route('login') }}" class="btn btn-secondary">Se connecter</a>
    </div>
</body>
</html>