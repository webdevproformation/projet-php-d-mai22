<?php
/* CREATE TABLE produits(
    id INTEGER NOT NULL AUTO_INCREMENT ,
    titre VARCHAR(255) NOT NULL,
    description TEXT ,
    prix DOUBLE ,
    review INT ,
    star SMALLINT ,
    CONSTRAINT PRIMARY KEY (id)
   );
   INSERT INTO produits 
   (titre , description , prix , review , star)
   VALUES
   ("article 1" , "lorem ipsum 1", 12.2 , 7 , 3),
   ("article 2" , "lorem ipsum 2", 12.2 , 7 , 3),
   ("article 3" , "lorem ipsum 3", 12.2 , 7 , 3),
   ("article 4" , "lorem ipsum 4", 12.2 , 7 , 3),
   ("article 5" , "lorem ipsum 5", 12.2 , 7 , 3); */

/* $produits = [
    ["id" => 1 , "titre" => "titre 1" , "description" => "lorem ipsum" , "prix" => 12.2 , "review" => 7 , "star" => 2],
    ["id" => 2 , "titre" => "titre 2" , "description" => "lorem ipsum" , "prix" => 12.2 , "review" => 30 , "star" => 5],
    ["id" => 3 , "titre" => "titre 3" , "description" => "lorem ipsum" , "prix" => 12.2 , "review" => 12 , "star" => 0],
    ["id" => 4 , "titre" => "titre 4" , "description" => "lorem ipsum" , "prix" => 12.2 , "review" => 4 , "star" => 3],
    ["id" => 5 , "titre" => "titre 5" , "description" => "lorem ipsum" , "prix" => 12.2 , "review" => 5 , "star" => 1]
]; */

$connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8" , "root" , "");
$sth = $connexion->prepare("SELECT * FROM produits");
$sth->execute();
$produits = $sth->fetchAll();

// http://localhost/projet-php/jour4/00-correction.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <style>
        .carousel-indicators [data-bs-target]{
            width: 10px;
            height: 10px;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <header class="bg-dark">
        <nav class="container navbar navbar-expand navbar-dark px-3 mb-4">
            <a href="" class="navbar-brand">Start Bootstrap</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Service</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <div class="row">
            <aside class="col-3">
                <h1 class="fs-3">Shop Name</h1>
                <ul class="list-group">
                    <li class="list-group-item">Catégorie 1</li>
                    <li class="list-group-item">Catégorie 2</li>
                    <li class="list-group-item">Catégorie 3</li>
                </ul>
            </aside>
            <div  class="col">
                <figure class="carousel slide mb-3" data-bs-ride="carousel" id="diaporama">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#diaporama" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#diaporama" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#diaporama" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="http://via.placeholder.com/1200x400?text=1" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="http://via.placeholder.com/1200x400?text=2" alt="" class="img-fluid">
                        </div>
                        <div class="carousel-item">
                            <img src="http://via.placeholder.com/1200x400?text=3" alt="" class="img-fluid">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#diaporama" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#diaporama" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </figure>
                <section class="row">
                    <?php foreach($produits  as $produit) : ?>
                    <article class="col-4 mb-3">
                        <div class="card">
                            <img src="http://via.placeholder.com/320x150" alt="">
                            <div class="card-body">
                                <header class="d-flex justify-content-between align-items-baseline">
                                    <h2 class="fs-5 text-primary"><?= $produit["titre"] ?></h2>
                                    <p><?= $produit["prix"] ?> €</p>
                                </header>
                                <p>  <?= $produit["description"] ?> </p>
                                <footer class="text-danger d-flex justify-content-between align-items-baseline">
                                    <div class="rating ">
                                        <?php for($i = 0 ; $i < $produit["star"]; $i++) : ?>
                                            <i class="bi bi-star-fill"></i>
                                        <?php endfor ?>
                                        <?php for($i = 0 ; $i < 5 - $produit["star"] ; $i++) : ?>
                                            <i class="bi bi-star"></i>
                                        <?php endfor ?>
                                    </div>
                                    <p class="mb-0"><?= $produit["review"] ?> reviews</p>
                                </footer>
                            </div>
                        </div>
                    </article>
                    <?php endforeach ?>
                    <article class="col-4 mb-3">
                    <h2 class="fs-4 text-primary">Lorem, ipsum.</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere perspiciatis, autem provident, quas odio quaerat officiis nulla consequuntur quisquam quae dicta. Voluptates sequi expedita est eligendi consectetur illum, eveniet magni.</p>
                    <button class="btn btn-primary">read more</button>
                    </article>
                </section>
            </div>
        </div>
    </main>
    <footer class="container py-5 mt-3" style="border-top:1px solid #bbb">
        Copyright &copy; Website
    </footer>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>
</html>