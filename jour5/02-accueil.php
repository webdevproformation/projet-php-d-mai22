<!-- http://localhost/projet-php/jour5/02-accueil.php -->
<?php
$connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "") ;
$sth = $connexion->prepare("SELECT * FROM articles");
$sth->execute();
$articles = $sth->fetchAll(PDO::FETCH_ASSOC); // permet d'enlever les parties tableau indexé dans la résultat (garder uniquement la partie tableau associatif)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-warning">
        <nav class="navbar navbar-expand navbar-dark container">
            <a href="" class="navbar-brand">Exo2</a>
        </nav>
    </header>
    <main class="container mt-3">
        <div class="row">
            <?php foreach($articles as $article) : ?>
                <article class="col-4 mb-3">
                    <div class="card">
                        <h2 class="card-header"><?= $article["titre"]  ?></h2>
                        <img src="https://via.placeholder.com/300x200" alt="">
                        <div class="card-body">
                            <?= substr($article["contenu"], 0 , 200) ?>
                        </div>
                        <footer class="card-footer">
                            <!-- -->
                            <a href="02-article.php?page=<?= $article["id"] ?>" class="btn btn-primary">lire la suite</a>
                            <!-- affiche moi l'article qui a l'id = 1 dans la base de données -->
                        </footer>
                    </div>
                </article>
            <?php endforeach ?>
        </div>
    </main>
</body>
</html>