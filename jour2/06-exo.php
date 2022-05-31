<?php // http://localhost/projet-php/jour2/06-exo.php
    $message = "";

    if(!empty($_POST)){
        if(
            isset($_POST["nom"]) &&
            strlen(trim($_POST["nom"])) > 3 &&
            isset($_POST["email"]) &&
            filter_var($_POST["email"] , FILTER_VALIDATE_EMAIL) &&
            isset($_POST["age"]) &&
            is_numeric($_POST["age"])
        ){
            $message = "merci";
        }else {
            $message = "une erreur dans le formulaire est apparue";
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
            <label for="nom">votre nom</label>
            <input type="text" name="nom" id="nom">
        </div>
        <div>
            <label for="email">votre email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="age">votre age</label>
            <input type="number" name="age" id="age">
            <!-- chrome laisse pas saisir de lettre dans le champ -->
            <!-- firefox message pour te dire de ne saisir que des chiffres 
            en 2022 => chrome 
            5 à 6 % firefox => contrat 
            Edge (Chromium) => 
            un peu moins suivi (pub)
            firefox / chrome 
            opera / chrome 
            rdv 13h40
            session $_SESSION 
        -->
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
    <?php if(strlen($message) > 0) : ?>
        <p><?= $message ?></p>
    <?php endif ?>
</body>
</html>