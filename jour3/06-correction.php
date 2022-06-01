<!-- http://localhost/projet-php/jour3/06-correction.php -->
<?php 
    $articles = [
        [ "titre" => "article 1" , "contenu" => "lorem ipsum 1" ],
        [ "titre" => "article 2" , "contenu" => "lorem ipsum 2" ],
        [ "titre" => "article 3" , "contenu" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam est soluta suscipit tempora, minus qui cumque. Aliquid facere accusamus nesciunt, unde ipsum necessitatibus veritatis ea eum tenetur illo optio cum." ],
        [ "titre" => "article 4" , "contenu" => "lorem ipsum 4" ],
        [ "titre" => "article 5" , "contenu" => "lorem ipsum 5" ],
        [ "titre" => "article 5" , "contenu" => "lorem ipsum 5" ],
        [ "titre" => "article 5" , "contenu" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam est soluta suscipit tempora, minus qui cumque. Aliquid facere accusamus nesciunt, unde ipsum necessitatibus veritatis ea eum tenetur illo optio cum." ],
        [ "titre" => "article 5" , "contenu" => "lorem ipsum 5" ],
        [ "titre" => "article 5" , "contenu" => "lorem ipsum 5" ],
    ]; // sortir les données de mon fichier .php => stocker ces données dans une logiciel Base de données ??? 
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