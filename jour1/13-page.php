<?php // http://localhost/projet-php/jour1/13-page.php
$titre = "page d'accueil";
$description = "je suis la page d'accueil d'exemple" ;

ob_start();

require_once "13-body.php";

$contenu = ob_get_clean();

require_once "13-layout.php"; 
