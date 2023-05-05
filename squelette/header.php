<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <title>portfolio.freu</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>

<body>


    <?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
    } catch (Exception $e) {
        die('erreur : ' . $e->getMessage());
    }


    ?>




    <header class=" mainHeader mainHeaderRes1 mainHeaderRes2 mainHeaderRes3">

        <div id="logo"><a href="./index.php"> <img src="./img/logoDef.png" title="retour a l'accueil"> </a></div>
        <nav>
            <ul>
                <li><a href="./formation.php">Formation</a></li>
                <li><a href="./mesProjets.php">Projets</a></li>
                <li><a href="./contact.php">Contact</a></li>
            </ul>
        </nav>


    </header>
    <main>