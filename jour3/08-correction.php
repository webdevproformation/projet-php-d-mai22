<!-- http://localhost/projet-php/jour3/08-correction.php -->
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
    <?php require __DIR__ . DIRECTORY_SEPARATOR . "08-home.php" ?>
    <!-- 
        windows C:\xampp\htdocs\projet-php\jour3 __DIR__
        windows `\` DIRECTORY_SEPARATOR
        __DIR__ . DIRECTORY_SEPARATOR . "08-home.php" => C:\xampp\htdocs\projet-php\jour3\08-home.php

        MacOS /Applications/MAMP/htdocs/jour3/08-home.php
    -->
</body>
</html>