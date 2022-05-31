<?php // http://localhost/projet-php/jour2/07-session.php
session_start([
    'cookie_lifetime' => 3600, // 60 * 60
    // défaut => le 
]); 
// 1 créer la variable super globale 
// 2 le serveur va émettre un cookie de session 
// petit fichier envoyé au navigateur + html 
// numéro générer par le serveur 
// onglet reseau => Entête => 
// Set-Cookie PHPSESSID=2jjb7g8sinbfid2cbk7ng07184; path=/

// 3 fichier qui est créé dans le dossier tmp qui a le nom
// 2jjb7g8sinbfid2cbk7ng07184

// $_SESSION 

var_dump($_SESSION) ; // garder des informations
// ajouter une valeur à la super globale $_SESSION
$_SESSION["user"] = ["nom" => "Alain" , "age" => 22]; 

// dans le fichier // 2jjb7g8sinbfid2cbk7ng07184
// user|a:2:{s:3:"nom";s:5:"Alain";s:3:"age";i:22;}
// serializer un tableau 
// autre norme pour stocker des tableaux dans des fichiers
// texte 

// si j'appelle ce fichier dans une page php 
// je vais pouvoir réutiliser les informations stockées
// dans ce fichier 
// le fichier durée de vie => 
// en fonction de certains critères ce fichier est supprimé
// automatiquement par le serveur 

// session_destroy(); 


// []
// n'est pas créée par défaut
// il faut au préalable session_start(); dans votre code


// $_GET
// $_POST
// sont créées à chaque requête => utiliser directement