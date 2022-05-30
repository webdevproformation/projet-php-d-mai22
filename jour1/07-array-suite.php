<?php // http://localhost/projet-php/jour1/07-array-suite.php


/**
array_splice ($array, $offset, $length) ;
extract() / compact()
end()
 */

// unset() => supprimer un élément dans un tableau

$jours = ["lundi" , "mardi" , "mercredi"];

unset($jours[1]);
// ["lundi" , null , "mercredi"]

var_dump($jours);

$mois = ["janvier" , "février" , "mars" , "avril"];
array_splice($mois, 1, 1) ; // supprime dans le tableau mois l'élément qui a l'index 1
// ["janvier"  , "mars" , "avril"];
array_splice($mois, 1, 2) ; // supprimer mars et avril
var_dump($mois); 

$fleurs = ["tulipe", "rose", "violette" , "jasmin"];

// remplacer violette par camélia
array_splice($fleurs , 2 , 1, "camélia" );

var_dump($fleurs); 
// array_splice() supprimer un ou plusieurs éléments d'un tableau
// array_splice() remplacer ou insérer de nouveaux éléments dans un tableau


$livre = [
    "sommaire" => "ensembre des liens",
    "chapitre1" => "lorem ipsum",
    "conclusion" => "fin du document"
]; 

extract($livre); 
// créer 3 variables 
var_dump($sommaire, $chapitre1 , $conclusion) ; 

// http://localhost/projet-php/jour1/07-array-suite.php?page=accueil&filtre=desc

extract($_GET);
var_dump($page , $filtre);

// récupérer le 1er et le dernier élément d'un tableau

$sujets = ["PHP" , "JS" , "HTML" , "CSS" , "Cobol"];
var_dump(current($sujets)); // 1er
var_dump(end($sujets)); // last

// $_SERVER ??? 
var_dump($_SERVER); // gros tableau associatif // comme $_GET et $_POST , $_SERVER est une variable super globale de PHP => donne des infos sur l'environnement d'exécution de votre script php


// cas pratique un nouveau fichier 08-exo.php 

// utiliser la variable super globale $_SERVER 

// 1 est ce que ce tableau associatif dispose de la key => HTTP_HOST ?
// 2 à partir de cette variable reconstituer l''url du fichier en cours d'exécution 
// http://localhost/projet-php/jour1/07-array-suite.php
// 3 combien d'élément contient cette super globale
// 4 pouvez vous me récupérer la version de PHP qui est actuellement utilisé dans votre système ??
// récupérer le contenu de l'item PATH et transformer en tableau indexé via le symbole ; 

// router en PHP 
