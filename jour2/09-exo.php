<?php // http://localhost/projet-php/jour2/09-exo.php
session_start();

$liste_langues = ["fr" , "en"];
$texte= ""; 

if(
    isset($_GET["lang"]) && 
    in_array($_GET["lang"] , $liste_langues) // sécurité
   ){
    $_SESSION["lang"] = $_GET["lang"] ; 
}

if(!isset($_SESSION["lang"]) || $_SESSION["lang"] == "fr" ){
    $texte = "bonjour"; 
}
elseif($_SESSION["lang"] == "en"){
    $texte = "hello"; 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li> <a href="09-exo.php?lang=fr">fr</a> </li>
        <li> <a href="09-exo.php?lang=en">en</a> </li>
    </ul>
    <p><?= $texte ?></p>
</body>
</html>
<!-- 15h00 -->
