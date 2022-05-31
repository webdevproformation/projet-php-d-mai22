<?php // http://localhost/projet-php/jour2/05-post.php
    $message = "";
    if(!empty($_POST)){
        if(
            isset($_POST["nom"]) && 
            strlen(trim($_POST["nom"])) >= 5 &&
            isset($_POST["commentaire"]) &&
            strlen(trim($_POST["commentaire"])) >= 5 
        ){
            $message = "merci pour votre message nous revenons vers vous au plus vite";
        }else {
            $message = "veuillez remplir tous les champs avant de soumettre le formulaire";
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
</head>
<body>
    <form method="POST">
        <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom">
        </div>
        <div>
            <label for="commentaire">Saisir votre commentaire </label> <br>
            <textarea name="commentaire" id="commentaire" cols="30" rows="10"></textarea>
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
    <?php if(strlen($message) > 0) : ?>
        <p><?= $message ?></p>
    <?php endif ?>

    <?php if(strlen($message) > 0) { ?>
        <p><?= $message ?></p>
    <?php } ?>

    <?php if(strlen($message) > 0) { 
      echo "<p>$message</p>";  
    } ?>
</body>
</html>

<!-- créer le fichier 06-exo.php
contient un formulaire avec 3 champs
nom
email
age

une fois que le formulaire est soumis => transmis au serveur via la méthode POST

vérifier que le nom contient au moins 3 lettres (sans les espaces avant et après)
vérifier que le email est valide
vérifier que le age est un chiffre valide

si ces trois conditions sont confirmées => afficher en dessous du formulaire le message "merci"
sinon afficher le message => une erreur dans le formulaire est apparue
-->
