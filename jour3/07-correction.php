<!-- http://localhost/projet-php/jour3/07-correction.php -->
<?php 
    /**
      CREATE DATABASE blog;
      USE blog;
      CREATE TABLE articles(
       id INTEGER NOT NULL AUTO_INCREMENT ,
       titre VARCHAR(255) NOT NULL,
       contenu TEXT ,
       CONSTRAINT PRIMARY KEY (id)
      );
      INSERT INTO articles 
      (titre , contenu)
      VALUES
      ("article 1" , "lorem ipsum 1"),
      ("article 2" , "lorem ipsum 2"),
      ("article 3" , "lorem ipsum 3"),
      ("article 4" , "lorem ipsum 4"),
      ("article 5" , "lorem ipsum 5");
     */

    $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root", "");
    $sth = $connexion->prepare("SELECT * FROM articles");
    $sth->execute();
    $articles = $sth->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>correction</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
</head>
<body>
    <header class="bg-warning">
        <nav class="container navbar navbar-expand navbar-light px-3">
            <a href="" class="navbar-brand">TP PHP</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">Accueil</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link">Connexion</a></li>
            </ul>
        </nav>
    </header>
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
</body>
</html>

<!--
    d'abord => html / css (bootstrap)
    deux zones entête / corps de page 
             <header>    <main>
    entête fond orange => bg-warning => background attention 
    https://getbootstrap.com/docs/5.2/components/card/
-->