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
    <div class="container">
        <header class="row">
            <nav class="navbar navbar-expand navbar-light bg-warning px-3">
                <a href="<?= WWW ?>" class="navbar-brand" >Mon blog</a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= WWW ?>" class="nav-link">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= WWW ?>contact" class="nav-link">Contact</a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="<?= WWW ?>connexion" class="nav-link">Connexion</a>
                    </li>
                </ul>
            </nav>
        </header>
        <?= $contenu ?>
    </div>
</body>
</html>