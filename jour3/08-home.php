<?php 
    $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");
    $sth = $connexion->prepare("SELECT * FROM articles");
    $sth->execute();
    $articles = $sth->fetchAll();
?>
<main class="container">
    <h1>Bienvenu</h1>
    <section class="row">
        <!-- si j'ai du code qui se répète => emballer avec une boucle for -->
        <?php foreach($articles as $article) : ?>
        <article class="col-4 mb-3">
            <div class="card">
                <h2 class="card-header"><?= $article["titre"] ?></h2>
                <img src="https://via.placeholder.com/300x200" alt="">
                <div class="card-body">
                    <?= $article["contenu"] ?>
                </div>
                <footer class="card-footer">
                    <button class="btn btn-primary btn-sm">lire la suite</button>
                </footer>
            </div>
        </article>
        <?php endforeach ?>
    </section>  
</main>