<?php

include_once './header-admin.php';
//include_once './verif.php';


try{
    $db = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
} catch(PDOException $e){
    echo 'Erreur : ' . $e->getMessage();
}
?>

<h1>Listes des articles</h1>

<?php
$sql = 'SELECT `id`, `title`, `extract` FROM post ORDER BY id DESC';
$req = $db->query($sql);
$req->execute();
while($article = $req->fetch(PDO::FETCH_ASSOC)){


?>
<div id="list-posts">
    <article>
        <!--<div id="contenuArticle">-->
            <h2><?= $article['title']?></h2>
        <!--</div> -->
        <div id="bouton">
            <p>
                <a href="./modifier.php?id=<?= $article['id'] ?>" style="color:green">modifier</a> / 
                <a class="btnRed" href="#" style="color:red">supprimer</a>
            </p>
        </div>
     
                    
    </article>


    <label for="title"></label>
            <input type="text" name="title" id="title" placeholder="<?= $article['title']?>">

</div><?php } ?>
<script src="./admin.js"></script>