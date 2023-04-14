<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio.freu</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>


<?php
    
    try{
        $db = new PDO ('mysql:host=localhost;dbname=portfolio','root','');
    }

    catch (Exception $e){
        die('erreur : '. $e->getMessage());
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