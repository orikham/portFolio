<?php
require_once '../connexion.php';
require_once './header-front.php';

$id = $_GET[`post`.'id'];
$req = $db->prepare ("SELECT `post`.`id`, `post`.`title`, `post`.`thumbnail`, `post`.`extract`,`post`.`content` FROM `post` WHERE `id` = :id");
$req->bindParam('id', $id, PDO::PARAM_INT);
$req->execute();


while ($selection = $req->fetch(PDO::FETCH_ASSOC)){;
    ?>
    <main>
    
        <section>
            <div class="articles row-limit-size">
                <article>
                    <figure>
                        <img src="../img/<?= $selection['thumbnail']?>" alt="<?= $selection['title']?>">
                    </figure>
                    <div class="article-content">
                        <h2 class="article-title"><?= $selection['title']?></h2>
                        <p class="article-extract"><?= $selection['extract']?></p>
                    <div>
                </article>
    
                
                <?php }?>
            </div>
        </section>
    </main>