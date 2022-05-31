<?php 

// json 
// JavaScript Object Notation

// format de données 


$user = [
    "nom" => "Alain",
    "age" => 12,
    "isAdmin" => true ,
    "competences" => ["js", "php"]
]; 

echo json_encode($user);

// envoyer ce tableau vers une autre machine


// 00-autre.html => 1 demande requete AJAX => fetch("00-reprise.php ") 
// 2 dans le fichier 00-reprise.php $user qui contient un tableau php 
// 3 dans le fichier 00-reprise.php echo json_encode($user);
// transforme le tableau d'origine en json {"nom":"Alain" , "age":12 , "isAdmin" : true , "competences" :["js","php"]}
// objet js de base 
// 4 transmis dans une format idéal sur le réseau 
// 5 dans le fichier 00-autre.html  fin de la requête ajax
/**
 .then(reponse => reponse.json()) // est ce que j'ai bien une réponse si oui
.then(data => console.log(data))  // afficher dans la console du navigateur 
 */

 // deux fichiers indépendants : .php et un fichier .html (qui contient du js )
