<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Alpine.js CDN -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@2.x.x/dist/alpine.min.js"></script>
    <!-- TailwindCSS CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.x.x/dist/tailwind.min.css">
    <title>Formation alpine.js | Use API</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        header {
            background-color: #007FFF;
            color: white;
            padding: 1rem;
            text-align: center;
        }

        header h1 {
            margin: 0;
            font-size:32px; 
            font-weight: bold;
        }

        header a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
        }

        header a:hover {
            text-decoration: underline;
        }
    </style>
</head>


    <header>
        <h1>EFREIPEDIA</h1>
        <nav>
            <a href="/inscription">S'inscrire</a>
            <a href="/connexion">Se connecter</a>
        </nav>
        <a href="/accueil">Accueil</a>
        <a href="/article">Nos articles</a>
        <a href="/forum">Forum</a>
        <p>Bonjour <?=@$_SESSION['nom']?></p>
    </header>


