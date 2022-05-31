<?php 
if(isset($_GET["id"])){
    $formation = [
        ["matiere" => "PHP" , "duree" => 20 , "unite" => "jours"] ,
        ["matiere" => "Javascript" , "duree" => 15 , "unite" => "semaine"]
    ];

    if(is_numeric($_GET["id"]) ){ // bravo Arnold !! 
        $id = (int)$_GET["id"];
        echo json_encode($formation[$id]);
        return ;
    }
    else if($_GET["id"] == "all"){
        echo json_encode($formation);
        return ;
    }
    else {
        echo json_encode([]);
        return ; 
    }
}