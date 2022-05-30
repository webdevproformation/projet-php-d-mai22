<?php // http://localhost/projet-php/jour1/09-json.php

$articles = [
    ["id" => 1 , "titre" => "bonjour toto" , "contenu" => "lorem ipsum"],
    ["id" => 2 , "titre" => "bonjour 2" , "contenu" => "lorem ipsum"],
    ["id" => 3 , "titre" => "bonjour 3" , "contenu" => "lorem ipsum"],
];


// envoyer ce tableau sur internet (ajax)
// 09-json.php => 
// transformer array => chaine de caractère 
// dans un format json => JavaScript Object Notation
// tableau en string MAIS 
// faire en sorte que l'on puisse distinguer chaque élément tableau dans la string

echo json_encode($articles)   ; 

// [{"id":1,"titre":"bonjour","contenu":"lorem ipsum"},{"id":2,"titre":"bonjour 2","contenu":"lorem ipsum"},{"id":3,"titre":"bonjour 3","contenu":"lorem ipsum"}]

// tableau PHP => tableau javascript  