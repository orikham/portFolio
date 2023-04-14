<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>manarticle</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>
<body>
    <?php require_once '../connexion.php'; 
    $sql = "SELECT `id`,`name` FROM `category`";
    $req = $db->query($sql);
    $sql1 = "SELECT ROUND(`id`) FROM `post`";
    $reqRandom = $db->query($sql1);

    ?>

    <header id="main-header">
        <div class="row-limit-size">
            <div id="logo"><a href="../index.php">blog</a></div>
            <nav>
                <ul>
                
                    <li><a href="../index.php">Accueil</a></li>
                    <li><a href="../category.php">Catégories</a>
                   
                        <div class="subcategory">
                            <ul>
                            <?php while ($selection = $req->fetch(PDO::FETCH_ASSOC)){;?>
                                <li><a href="../front/category.php?id=<?= $selection['id'] ?>"><?= $selection['name']?></a></li>
                                <?php }?> 
                            </ul>
                        </div>
                    </li>
                    <li><a href="./connect.php">se connecter</a></li>
                    <li><a href="../front/random.php">Top posts</a>
                    <div class="subcategory">
                            <ul>
                            <?php while($selection = $reqRandom->fetch(PDO::FETCH_ASSOC)){;?>
                                <li><a href="../front/random.php?id=<?= $selection[('id')] ?>">Top posts</a></li>
                                <?php }?> 
                            </ul>
                        </div>
                    </li>
                    
                </ul>
            </nav>
        </div>    
    </header>

    