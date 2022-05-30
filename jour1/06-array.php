<?php // http://localhost/projet-php/jour1/06-array.php

/** 
array_keys ( $array );
array_sum( ) ;
array_merge( $tab1, $tab2 );
count() ;
array_splice ($array, $offset, $length) ;
extract() / compact()
end()
 */

// array_keys (prendre les clés d'un tableau associatif et de les stocker dans un tableau indexé)

$serveur = [
    "ip" => "123.123.123.123",
    "port" => 80 ,
    "domaine" => "exemple.com",
    "service" => "apache"
];

// est ce que dans la variable serveur contient la clé service ???

$cleServer = array_keys($serveur);
var_dump($cleServer); // ["ip" , "port" , "domaine" , "service"]

$verif = in_array( strtolower( "sErvice" ), $cleServer);
var_dump($verif); 

//
$verif2 = array_key_exists("ip" , $serveur);
var_dump($verif2); 


// ecommerce
// panier 
$panier = [
    "1" => 80,
    "4" => 100,
    "25" => 50
];

// somme des montants dépensés 
// total du bon de commande

$total = 0;
foreach($panier as $idProduit => $montantDepense){
    $total += $montantDepense ;
}
var_dump($total);

$total2 = array_sum($panier); 
var_dump($total2); 

// array_merge( $tab1, $tab2 );

$etudiant = [
    "nom" => "Alain",
    "age" => 12
];
$notes = [
    "PHP" => 12 ,
    "Js" => 15
];
$etudiantComplet = array_merge($etudiant , $notes);
var_dump($etudiantComplet);

$etudiant2 = [
    "nom" => "Béatrice",
    "age" => 10 
];
$suite = [
    "age" => 14, // cet index est celui qui reste 
    "adresse" => "rue de Paris"
];

var_dump(array_merge($etudiant2 , $suite));

function genererPage( ?array $options = [] ){
    $default = [
        "titre" => "titre 1",
        "contenu" => "lorem ipsum",
        "date_creation" => new DateTime()
    ];
    $options = array_merge($default , $options ); 
    var_dump($options); 
}

genererPage(); 
genererPage(["titre" => "nouvel article" , "auteur" => "moi"]); 
genererPage(["date_creation" => (new DateTime())->setDate(2023,5,30)]); 

/*
array_splice ($array, $offset, $length) ;
extract() / compact()
end()
*/

var_dump($etudiantComplet);

// rdv 13h30 bon appétit !!

// https://github.com/webdevproformation/projet-php-d-mai22
// répétition / utilisation 
// CPW => Excel / powerpoint / planning 
// rapport rapidement 
// rapidement projet => outil informatique 
// informatique soit utile au quotidien