
    <main>
    <?php include './front/header.php';?>
    
        <section>
            <h1>Les derniers articles</h1>
            <div class="articles row-limit-size">

            <?php
                require_once './connexion.php';
                                                                        
            $sql = 'SELECT `id`, `title`, `extract`, `thumbnail` FROM post ORDER BY id ASC LIMIT 6';
            
            $req = $db->query($sql);
            while($article = $req->fetch(PDO::FETCH_ASSOC)){
            
            ?>
            
                <article>
                    <figure>
                      <img src="./img/<?= $article['thumbnail']?>" alt="<?= $article['title']?>">
                    </figure>
                    <div class="article-content">
                        <h2 class="article-title"><?= $article['title']?></h2>
                        <p class="article-extract">
                            <?= $article['extract']?>
                        </p>
                        <p><a href="./front/post.php?id=<?= $article['id'] ?>">lire l'article</a></p>
                    </div>
                </article>
                

                
                
                
                
                
                
                
                
                
                
                
                <?php } ?>
                

                

                

                

                

                

                
            </div>
        </section>
    </main>
</body>
</html>