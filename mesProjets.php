

<?php require_once './squelette/header.php';?>
    




   

    
        <section id="mesProjets">
        <?php 
                    $sql = ("SELECT `id_projet`, `title`,`thumbnail`, `resume`, `frontEnd`, `created_at`, `link` FROM `projet` ORDER BY `id_projet` ");
                    $req = $db->query($sql);
                    
                    
                   
                ?>
            <article>
               
                <div class="containerCards">
                <?php while($article = $req->fetch(PDO::FETCH_ASSOC)){?>
                    <div class="card">
                        
                            <h1><?= $article['title']?></h1>
                            <img src="<?= $article['thumbnail']?>" alt="">
                            <h2>Langages utilisé : <img src="<?= $article['frontEnd']?>" alt=""></h2>                       
                            <p><?= $article['resume']?></p>
                            <a href="<?= $article['link']?>" target="_blank">Voir le site</a>
                    </div>
                    <?php } ?>
                    
                </div>
                
            </article>

            
        </section>
    </main>
    <?php require_once './squelette/footer.php';?>