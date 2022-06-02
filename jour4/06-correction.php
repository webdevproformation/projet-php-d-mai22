<?php 

$connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "");

$sth = $connexion->prepare("SELECT titre , contenu FROM articles");
$sth->execute();

$toutArticles = $sth->fetchAll(PDO::FETCH_ASSOC); 

$troisPremiers = array_splice($toutArticles , 0 , 3);
?>

<?php // http://localhost/projet-php/jour4/06-correction.php ?>
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
    <header class="container d-flex align-items-center justify-content-between my-3">
        <img src="https://via.placeholder.com/100x50" alt="">
        <ul class="d-flex list-unstyled align-items-center">
            <li class="ms-3"><a href="" class="text-decoration-none">Lorem.</a></li>
            <li class="ms-3"><a href="" class="text-decoration-none">Eligendi!</a></li>
            <li class="ms-3"><a href="" class="text-decoration-none">Nostrum.</a></li>
            <li class="ms-3"><a href="" class="text-decoration-none">Veniam.</a></li>
            <li class="ms-3"><a href="" class="text-decoration-none btn btn-outline-primary">Dicta.</a></li>
        </ul>
    </header>
    <main class="container text-center ">
        <div class="row">
            <h1 class="col-8 offset-2">Lorem ipsum dolor sit amet.</h1>
            <p class="col-8 offset-2 my-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque corporis quia, tempore consequatur rem exercitationem et tempora non ut adipisci repudiandae qui accusantium iure assumenda temporibus sit! Dolorum, deserunt mollitia exercitationem quas debitis corporis obcaecati libero. Vitae dolorum architecto, alias nobis in quibusdam nesciunt mollitia iure? Corporis porro maiores corrupti!</p>
        </div>
        <section class="col-10 offset-1 row">
            <?php foreach ($troisPremiers as $article) : ?>
            <article class="col-4">
                <div class="card">
                    <h2 class="card-header">
                        <?= $article["titre"]  ?>
                    </h2>
                    <div class="card-body">
                        <h3 class="fs-4">sous titre</h3>
                        <p><?= $article["contenu"]  ?></p>
                        <button class="btn btn-outline-primary">more info</button>
                    </div>
                </div>
            </article>
            <?php endforeach ?>
        </section>
    </main>
</body>
</html>