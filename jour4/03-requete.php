<?php // http://localhost/projet-php/jour4/03-requete.php

$connexion = new PDO("mysql:host=localhost;dbname=blog;charset=utf8", "root" , "");

$sth = $connexion->prepare("SELECT contenu FROM articles");
$sth->execute();

$toutArticles = $sth->fetchAll(PDO::FETCH_ASSOC); 

// var_dump($toutArticles);

$premiersArticles = array_splice($toutArticles , 0 , 3 );

var_dump($premiersArticles);
var_dump($toutArticles);
?>