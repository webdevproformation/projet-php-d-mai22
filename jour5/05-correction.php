<!-- http://localhost/projet-php/jour5/05-correction.php

CREATE TABLE users(
    id INTEGER NOT NULL AUTO_INCREMENT ,
    login VARCHAR(255) NOT NULL ,
    password VARCHAR(255) NOT NULL ,
    CONSTRAINT PRIMARY KEY (id)
);

INSERT INTO users (login , password ) VALUES ( "Alain" , md5("azerty1234") )

// 1697918c7f9551712f531143df2f8a37
// MD5() fonction de hashage "aaaaa" => 1697918c7f9551712f531143df2f8a37
// UN_MD5() n'existe pas 1697918c7f9551712f531143df2f8a37 => "aaaaa"

// fonction plus d'une 10 ans 
// via un dictionnaire => gros tableau => à partir de 1697918c7f9551712f531143df2f8a37 =>  "aaaaa"
// https://www.php.net/manual/fr/function.md5.php

// contre proposition => 
// password_hash() // $2y$10$p4RRfV56mpA2q0DJzhKt7uoq1IBHStGejuzscvxBG8gp7ye5VnbS6
// https://www.php.net/manual/fr/function.password-hash.php

-->
<?php
// INSERT INTO users (login , password ) VALUES ("Bob" , "$2y$10$p4RRfV56mpA2q0DJzhKt7uoq1IBHStGejuzscvxBG8gp7ye5VnbS6");
//var_dump(password_hash("azerty1234", PASSWORD_DEFAULT));

$message = "";
$class = "";
if(
        isset($_POST["login"]) && 
        isset($_POST["password"]) && 
        strlen($_POST["login"]) > 0 && 
        strlen($_POST["password"]) > 0 
    ){

        $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "") ;
        $sth = $connexion->prepare("SELECT id, password FROM users WHERE login = :login");
        $sth->execute(["login" => $_POST["login"]] );
        $user = current($sth->fetchAll(PDO::FETCH_ASSOC));

        if(is_array($user)){
            // comparer  
            // $2y$10$p4RRfV56mpA2q0DJzhKt7uoq1IBHStGejuzscvxBG8gp7ye5VnbS6
            // azerty1234
            $verif =  password_verify($_POST["password"]  , $user["password"]  ) ;
            //var_dump($verif); 
            if($verif){
                $message = "vous êtes bien connecté !" ;
                $class= "success";
            }else { 
                $message = "erreur dans vos identifiants " ;
                $class="danger"; 
            }
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
                    <input type="text" id="password" name="password" class="form-control">
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