<?php // http://localhost/projet-php/jour1/08-exo.php

// var_dump($_SERVER);

// 1 est ce que ce tableau associatif dispose de la key => HTTP_HOST ?
$verif = array_key_exists("HTTP_HOST" , $_SERVER);
var_dump($verif);

// http://localhost/projet-php/jour1/08-exo.php
$urlPageEncours = $_SERVER["REQUEST_SCHEME"] . "://" . $_SERVER["SERVER_NAME"] .$_SERVER["REQUEST_URI"] ; 
var_dump($urlPageEncours); 

//  3 combien d'élément contient cette super globale
var_dump(count($_SERVER)); // 45

// 4 version de PHP 
$params = explode("/", $_SERVER["SERVER_SOFTWARE"] ); 
$versionPhp = end($params);
var_dump($versionPhp);

// 5 PATH
$paths = explode(";" , $_SERVER["PATH"] );
var_dump($paths);

