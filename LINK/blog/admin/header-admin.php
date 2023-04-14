<?php
session_start();

if(!isset($_SESSION['id-user'])){
    header('Location: ../front/connect.php');
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style-admin.css">
    
</head>
<body>
    <header>
        <div id="logo">CMS Blog</div>
        <div id="menu-admin">
            <nav>
                <ul>
                    <li><a href="#">Articles</a>
                        <ul>
                            <li><a href="#">Nouvel aticle</a></li>
                            <li><a href="./list-post.php">Liste de des articles</a></li>
                        </ul> 
                    </li>
                    <li><a href="#">Catégories</a></li>
                    <li><a href="#">Mots-clés</a></li>
                    <li><a href="#">Users</a></li>
                </ul>
            </nav>
        </div>
    
    </header>

    <main>