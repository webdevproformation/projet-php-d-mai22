<?php  // http://localhost/projet-php/jour1/02-exo.php 

define("PRENOM" , "Victor") ;
$nom = "Hugo" ;
define("LIVRES" , ["Notre Dame" , "les Misérables" , "Hernani"]);

// Victor Hugo a écrit au moins 3 livres

$phrase1 = PRENOM . " $nom a écrit au moins " . count(LIVRES) . " livres"; 

// Victor Hugo a écrit Notre Dame de Paris avant les Misérables
$phrase2 = PRENOM . " $nom a écrit " . LIVRES[0] . " de Paris avant " . LIVRES[1] ;

// Hernani est une pièce de théâtre sur la condition humaine
$phrase3 = LIVRES[2] . " est une pièce de théâtre sur la condition humaine";
var_dump($phrase1 , $phrase2 , $phrase3);


// 10h35 bon café @ toute suite !!! 