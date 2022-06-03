<!-- http://localhost/projet-php/jour5/03-accueil.php -->
<?php
$connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "") ;
$sth = $connexion->prepare("SELECT id , contenu FROM articles LIMIT 0,3");
$sth->execute();
$articles = $sth->fetchAll(PDO::FETCH_ASSOC); 
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
    <header class="container">
        <h1>Lorem ipsum dolor sit.</h1>
        <ul class="list-unstyled row bg-danger mb-0 text-center m-0">
            <li class="col-6 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">Lorem.</a></li>
            <li class="col-6 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">Aspernatur?</a></li>
            <li class="col-6 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">Consectetur.</a></li>
            <li class="col-6 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">Esse?</a></li>
            <li class="col-6 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">Numquam.</a></li>
            <li class="col-6 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">Quaerat?</a></li>
        </ul>
        <ul class="list-unstyled row bg-danger text-center  mx-0 ">
            <li class="col-3 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">🍉</a></li>
            <li class="col-3 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">🍋</a></li>
            <li class="col-3 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">🍒</a></li>
            <li class="col-3 p-2 border border-dark"><a href=""class=" text-white fs-4 text-decoration-none">🫐</a></li>
        </ul>
    </header>
    <main class="container">
        <figure>
            <img src="https://via.placeholder.com/1700x500" alt="" class="img-fluid img-thumbnail bg-secondary p-3">
        </figure>
        <section class="row">
            <?php foreach($articles as $article) : ?>
            <article class="col-4">
            <a href="03-article.php?page=<?= $article["id"] ?>">
                <img src="https://via.placeholder.com/450x200" alt="" class="img-fluid">
            </a>
            <p><?= substr($article["contenu"], 0 , 200) ?></p>
            </article>
            <?php endforeach ?>
        </section>
    </main>
</body>
</html>