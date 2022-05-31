<?php // http://localhost/projet-php/jour2/04-exemple.php

$chiffre = 12 ;
$chiffre2 = 30 ;
var_dump($chiffre + $chiffre2); // 42

$chiffre3 = "12"; // 12
$chiffre4 = 20 ; 
var_dump($chiffre3 + $chiffre4); // 32

$chiffre5 = "5 éléphants";
$chiffre6 = "2 girafes"; // chiffre numéric string 
// https://www.php.net/manual/fr/language.types.numeric-strings.php

@var_dump($chiffre5 + $chiffre6); // warning 7 

// $_GET["id"] => is_integer("0") => oui 
// $_GET["id"] => is_integer("all") => oui 

//             => is_numeric("0") => oui
//             => is_numeric(0) => oui
//             => is_numeric("all") => non 
