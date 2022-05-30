<?php // http://localhost/projet-php/jour1/05-chiffre.php

$prix = 1234.56789 ;

var_dump(number_format($prix , 2 , "," , " ")); 


$grandChiffre = 19864598164539 ;
var_dump(number_format($grandChiffre , 2 , "," , " ")); 

$grandChiffre2 = 19_864_598_164_539 ; // _ permet de rendre le chiffre plus lisible => caractère fantôme
var_dump(number_format($grandChiffre2 , 2 , "," , " ")); 