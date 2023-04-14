<?php

require_once '../connexion.php';
require_once '../front/header-front.php';

$id = $_GET['id'];
$req = $db->prepare("SELECT `post`.`id`, `post`.`title`, `post`.`thumbnail`, `post`.`extract`,`post`.`content` FROM `post` INNER JOIN `post_category` ON `post`.`id` = `post_category`.`id_post` WHERE `post_category`.`id_category` = :id");
$req->bindParam('id', $id, PDO::PARAM_INT);
$req->execute();


    




while ($bali = $req->fetch(PDO::FETCH_ASSOC)){;
?>
<main>

    <section>
        <div class="articles row-limit-size">
            <article>
                <figure>
                    <img src="../img/<?= $bali['thumbnail']?>" alt="<?= $bali['title']?>">
                </figure>
                <div class="article-content">
                    <h2 class="article-title"><?= $bali['title']?></h2>
                    <p class="article-extract"><?= $bali['extract']?></p>
                <div>
            </article>

            
            <?php }?>
        </div>
    </section>
</main>











