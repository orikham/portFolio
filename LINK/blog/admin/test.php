<?php

require_once '../connexion.php';

$sql = 'SELECT `id`, `title`, `extract` FROM post ORDER BY id DESC';
$req = $db->query($sql);
$req->execute();
while($article = $req->fetch(PDO::FETCH_ASSOC)){

?>

<div id="list-posts">
    <article>
        <!--<div id="contenuArticle">-->
            <h2 data-intituler="<?= $article['title']?>"></h2>
        <!--</div> -->
        <div id="bouton">
            <p>
                <a href="" style="color:green">modifier</a> / 
                <a class="btnRed" href="" style="color:red">supprimer</a>
            </p>
        </div>
     
                    
    </article>

</div><?php } ?>


<script src="./vadim.js"></script>