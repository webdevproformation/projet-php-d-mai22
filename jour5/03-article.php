<!--
http://localhost/projet-php/jour5/03-article.php?page=1
http://localhost/projet-php/jour5/03-article.php?page=2
http://localhost/projet-php/jour5/03-article.php?page=3
// 
http://localhost/projet-php/jour5/03-article.php?page=90
http://localhost/projet-php/jour5/03-article.php?page=toto 
http://localhost/projet-php/jour5/03-article.php
-->
<?php 

if(isset($_GET["page"]) && is_numeric($_GET["page"])){
    $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "") ;
    $sth = $connexion->prepare("SELECT contenu FROM articles WHERE id = :id");
    $sth->execute(["id" => $_GET["page"]]);
    $article = current($sth->fetchAll(PDO::FETCH_ASSOC));
} else {
    echo "erreur dans la requete";
    die(); 
}
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
        <?php if(is_array($article)) : ?>
            <img src="https://via.placeholder.com/1700x300" alt="" class="img-fluid mb-3">
            <p><?= $article["contenu"] ?></p>
        <?php else : ?>
            <h1 class="bg-warning text-center display-3 py-3">erreur 404 page introuvable</h1>
        <?php endif ?>
            <div class="d-flex justify-content-end">
                <a href="03-accueil.php" class="btn btn-outline-success">retour à l'accueil</a>
            </div>
    </main>
</body>
</html>
