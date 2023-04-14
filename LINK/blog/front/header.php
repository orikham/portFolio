<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manarticle</title>
    <link rel="stylesheet" href="./CSS/style.css">
</head>
<body>
    <?php 
     require_once './connexion.php'; 
     
    $sql = "SELECT `id`,`name` FROM `category`";
    $req = $db->query($sql);
    
    ?>

    <header id="main-header">
        <div class="row-limit-size">
            <div id="logo"><a href="./index.php">blog</a></div>
            <nav>
                <ul>
                    <li><a href="./index.php">Accueil</a></li>
                    <li><a href="./category.php">Catégories</a>
                   
                        <div class="subcategory">
                            <ul>
                            <?php while ($article = $req->fetch(PDO::FETCH_ASSOC)){;?>
                                <li><a href="./front/category.php?id=<?= $article['id'] ?>"><?= $article['name']?></a></li>
                                <?php }?> 
                            </ul>
                        </div>
                    </li>
                    <li><a href="./front/connect.php">se connecter</a></li>
                    <li><a href="./front/random.php?id=">Top posts</a>
                    <div class="subcategory">
                            <ul>
                            <?php while ($selection = $req->fetch(PDO::FETCH_ASSOC)){;?>
                                <li><a href="../front/random.php?id=<?= $selection[ROUND('id')] ?>"></a></li>
                                <?php }?> 
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>    
    </header>

    