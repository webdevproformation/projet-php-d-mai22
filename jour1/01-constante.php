<?php // http://localhost/projet-php/jour1/01-constante.php 

// les variables 
$bonjour = "du texte";
$hello = 1;
$hello2 = 1.2;
$test = false ;
$tab = ["toto" , "tata"];
class A { }
$a = new A() ;

// utilisable dans le même scope de leur création 
var_dump($bonjour); // OK 

function direBonjour(){ 
    global $bonjour ; // demander explicitement d'accéder à une variable qui n'a pas le même espace de nom (scope)
    // la variable $bonjour est créée dans l'espace globale
    // mais on veut l'utiliser dans l'espace local de la fonction 
    var_dump($bonjour) ;  // Warning: Undefined variable $bonjour in 
}
direBonjour();  

// const => variable dont la valeur ne peut pas être modifiée 
// toutes les constantes sont verrouillées tout au long du code 
// nom de constante en majuscule  à 100%

// créer des constantes
define("ADRESSE" , "75 rue de Paris");
define("CP" , 75000);
define("IN_PARIS" , true);
define("DIMENSIONS" , [21, 29.7]);
define("CALCUL" , 10 + 2); 

// utiliser une constante
// j'habite au 75 rue de Paris
var_dump("j'habite au " . ADRESSE) ; // pas de $ devant les constantes

// pas possible de modifier sa valeur
//define("ADRESSE" , "75 rue de Marseille"); // Warning: Constant ADRESSE already defined in 

// les constantes sont globales => utilisable n'importe où
function dimensionFeuilleA4(){
    var_dump(DIMENSIONS); // pas besoin de mettre global => constante sont disponibles partout 
}
dimensionFeuilleA4(); 

// constantes qui sont créés par PHP 
// automatiquement par le langage
var_dump( __FILE__ )  ; // 'C:\xampp\htdocs\projet-php\jour1\01-constante.php' chemin complet du fichier exécuté maintenant 
var_dump( __DIR__ )  ; // 'C:\xampp\htdocs\projet-php\jour1' chemin complet du dossier en cours

var_dump( DIRECTORY_SEPARATOR )  ; // Windows '\' mais MacOS Linux '/'
// si j'exécute mon code sur du windows => '\'
// si j'exécute mon code sur du Linux ou Mac => '/'

// https://www.php.net/manual/fr/language.constants.magic.php
// https://www.php.net/manual/en/dir.constants.php

$distance = 12 ;
unset($distance); // permet detruire une variable 

// var_dump($distance);

$formation = [
    "duree" => 15,
    "sujet" => "php",
    "unite" => "jours"
];

unset($formation["sujet"]); // supprimer une valeur dans le tableau
var_dump($formation); 


/**
// créer un nouveau fichier 02-exo.php 

// créer trois variables / constante
// constante  PRENOM = "Victor"
// $nom = "Hugo"
// constante LIVRES = tableau qui contient 3 valeurs 
//    Notre Dame , les Misérables , Hernani

// écrire dans la page web les 3 phrases suivantes :

// Victor Hugo a écrit au moins 3 livres
// Victor Hugo a écrit Notre Dame de Paris avant les Misérables
// Hernani est une pièce de théâtre sur la condition humaine
 */
