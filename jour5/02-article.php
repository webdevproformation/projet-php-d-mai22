<!-- http://localhost/projet-php/jour5/02-article.php?page=3
$_GET["page"] => 3
requête SQL SELECT * FROM articles WHERE id = 3
-->
<?php 
if(isset($_GET["page"]) && is_numeric($_GET["page"])){
    $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "") ;
    $sth = $connexion->prepare("SELECT * FROM articles WHERE id = :id");
    $sth->execute(["id" => $_GET["page"]]);
    $article = current($sth->fetchAll(PDO::FETCH_ASSOC));
    // $article peut avoir 2 valeurs 
    // ["", "", ""] /// false 
}else {
    echo  "erreur dans la requête";
    die();
}


?>

<!DOCTYPE html>
<html lang="en">
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
    <main class="container">
        <?php if($article == true) : ?>
            <h1><?= $article["titre"] ?> </h1>
            <img src="https://via.placeholder.com/1400x300" alt="" class="img-fluid rounded my-3">
            <p><?= $article["contenu"] ?></p>
            <div class="d-flex justify-content-end">
                <a href="02-accueil.php" class="btn btn-outline-danger">retour à l'accueil</a>
            </div>
        <?php  else : ?>
            <h1 class="bg-danger text-center mt-5 display-4 p-4">
                la page demandée n'existe pas
            </h1>
            <div class="d-flex justify-content-center">
                <a href="02-accueil.php" class="btn btn-outline-danger">retour à l'accueil</a>
            </div>
        <?php endif ?>
    </main>
</body>
</html>