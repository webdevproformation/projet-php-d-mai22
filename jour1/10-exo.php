<?php 
// créer une variable tableau de tableau (base de données)
$articles = [
    ["id" => 1 , "titre" => "bonjour toto" , "contenu" => "lorem ipsum"],
    ["id" => 2 , "titre" => "bonjour 2" , "contenu" => "lorem ipsum"],
    ["id" => 3 , "titre" => "bonjour 3" , "contenu" => "lorem ipsum"],
];

// 10-exo.php?article=0
// est ce que l'on appelle ce fichier avec ?article=0 en plus du nom du fichier

if(isset($_GET["article"]) && is_integer((int)$_GET["article"] )){
    $params = (int)$_GET["article"] ; // stocke la valeur après le = 
    // $params = 0 , 1 , 2
    if($params <= count($articles) - 1){ //est ce que le params existe dans la tableau
        echo json_encode($articles[$params]);
        return ;
    }
}
echo json_encode([]); // si une des deux if n'est pas respecté => []