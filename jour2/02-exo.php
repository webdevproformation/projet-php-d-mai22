<?php 

if(isset($_GET["id"]) && is_int((int)$_GET["id"])){
    $formation = [
        ["matiere" => "PHP" , "duree" => 20 , "unite" => "jours"] ,
        ["matiere" => "Javascript" , "duree" => 15 , "unite" => "semaine"]
    ];
    $id = (int)$_GET["id"];
    echo json_encode($formation[$id]);  // conversion du tableau php en tableau json
    return ;
}

echo json_encode([]); 
