<!-- http://localhost/projet-php/jour5/07-exo.php -->
<?php 
$message = "";
$class = "";
if(
    isset($_POST["login"]) &&
    isset($_POST["password"]) &&
    isset($_POST["password_confirm"]) &&
    strlen($_POST["login"])> 0 &&
    strlen($_POST["password"])> 0 &&
    strlen($_POST["password_confirm"])> 0 
){

    if($_POST["password_confirm"] != $_POST["password"]){
        $message = "password et confirmation ne sont pas identiques";
        $class = "danger";
    }else {
        $connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "") ;
        $sth = $connexion->prepare("SELECT id, password FROM users WHERE login = :login");
        $sth->execute(["login" => $_POST["login"]] );
        $user = current($sth->fetchAll(PDO::FETCH_ASSOC));
        if(is_array($user) && password_verify($_POST["password"] ,$user["password"])){
            $message = "bien connecté";
            $class = "success";
        }else {
            $message = "erreur lors de l'authentification";
            $class = "danger";
        }
    }   
}?>
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
            <a href="" class="navbar-brand">Login 2</a>
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
                <div class="mb-3 col-4 offset-4">
                    <label for="password_confirm">password confirmation</label>
                    <input type="text" id="password_confirm" name="password_confirm" class="form-control">
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