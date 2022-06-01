<!-- http://localhost/projet-php/jour3/10-correction.php -->
<?php 

$connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8" , "root" , "");
$sth = $connexion->prepare("SELECT id , titre FROM articles");
$sth->execute();
$articles = $sth->fetchAll(); 

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
        <nav class="container navbar navbar-expand navbar-light px-3">
            <a href="" class="navbar-brand">TP PHP</a>
            <ul class="navbar-nav">
                <li class="nav-item"><a href="" class="nav-link">Accueil</a></li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="" class="nav-link">Gestion du site</a></li>
                <li class="nav-item"><a href="" class="nav-link">Déconnexion</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h1>Accueil du back office</h1>
        <button class="btn btn-success">créer un nouvel article</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nom article</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($articles as $article) : ?>
                <tr>
                    <td><?= $article["id"]  ?></td>
                    <td><?= $article["titre"]  ?></td>
                    <td>
                        <button class="btn btn-primary">voir</button>
                        <button class="btn btn-warning mx-2">modifier</button>
                        <button class="btn btn-danger">supprimer</button>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </main>
</body>
</html>