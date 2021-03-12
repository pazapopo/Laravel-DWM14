<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/layout.css">
    @yield('css')
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <li><a href="/">Accueil</a></li>
        <li><a href="/list">Liste des Personnages</a></li>
        <li><a href="/listAuteur">Liste des Auteurs</a></li>
        <li><a href="/ajouterPersonnage">Ajouter un Personnage</a></li>
        <li><a href="/ajouterDessinateur">Ajouter un Dessinateur</a></li>
    </header>
    
    <main>
        @yield('content')
    </main>
    <footer> 
        <div>COPYRIGHT 2021 , Kaïs Marsali</div>
    </footer>
</body>
</html>