<!-- http://localhost/projet-php/jour5/05-correction.php

CREATE TABLE users(
    id INTEGER NOT NULL AUTO_INCREMENT ,
    login VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL ,
    CONSTRAINT PRIMARY KEY (id)
);

INSERT INTO users (login , password ) VALUES ( "Alain" , md5("azerty1234") )

// 1697918c7f9551712f531143df2f8a37

-->
<?php
$message = "";
$class = "";
if(
        isset($_POST["login"]) && 
        isset($_POST["password"]) && 
        strlen($_POST["login"]) > 0 && 
        strlen($_POST["password"]) > 0 
    ){

        $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "") ;
        $sth = $connexion->prepare("SELECT id FROM users WHERE login = :login AND password = MD5(:password)");
        $sth->execute(["login" => $_POST["login"] , "password" => $_POST["password"]]);
        $user = current($sth->fetchAll(PDO::FETCH_ASSOC));

        if(is_array($user)){
            $message = "vous êtes bien connecté !" ;
            $class= "success";
        } else {
            $message = "erreur dans vos identifiants " ;
            $class="danger"; 
        }
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
    <header class="bg-warning">
        <nav class="navbar navbar-expand navbar-dark container">
            <a href="" class="navbar-brand">Login</a>
        </nav>
    </header>
    <main class="container mt-3">
        <div class="row">
            <h1 class="text-center">Accéder au back office</h1>
            <form method="POST" class="row">
                <div class="mb-3 col-4 offset-4">
                    <label for="login">login</label>
                    <input type="text" id="login" name="login" class="form-control">
                </div>
                <div class="mb-3 col-4 offset-4">
                    <label for="password">password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="mb-3 col-4 offset-4 d-flex justify-content-center">
                    <input type="submit" class="btn btn-info">
                </div>
            </form>
            <?php if(strlen($message) > 0) : ?>
                    <div class="alert alert-<?= $class ?>">
                    <?= $message ?>
                    </div>
            <?php endif ?>
        </div>
    </main>
</body>
</html>