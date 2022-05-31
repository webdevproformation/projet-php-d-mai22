<?php 

$formation = [
    ["matiere" => "PHP" , "duree" => 20 , "unite" => "jours"] ,
    ["matiere" => "Javascript" , "duree" => 15 , "unite" => "semaine"]
];

echo json_encode($formation); // conversion du tableau php en tableau json
