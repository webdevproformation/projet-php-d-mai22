<?php // http://localhost/projet-php/jour1/04-exo.php

$texte = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu felis euismod, tempus justo et, lacinia lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Pellentesque et libero vel libero hendrerit porttitor. Donec vestibulum turpis sed imperdiet porta. Quisque ac nulla blandit, ornare libero in, vulputate ante. Donec mauris urna, vestibulum ut nisi sed, aliquam pharetra leo. Etiam vel faucibus neque. Suspendisse sodales erat risus. Aenean dignissim finibus sem, elementum porttitor diam convallis sit amet. Cras egestas mi ipsum, sed tempor orci mollis in. Vestibulum eu velit vel diam venenatis rhoncus non et eros. Duis vitae nulla quis urna cursus porta. Vivamus pretium porta mauris. Suspendisse a bibendum velit. ";

/**
 * fonction retourne le 12 premiers mots de $text (par défaut)
 *
 * @param string $text
 * @param integer|null $max
 * @return string
 */
function more( string $text , ?int $max = 12 ) :string {
    $motTab = explode(" " , $text);
    $resultat = "";
    for($i = 0 ; $i < $max ; $i++){
        $resultat .= $motTab[$i] . " ";
    }
    $resultat .= "...";
    return $resultat ;  
}

var_dump(more($texte)); 
var_dump(more($texte , 5)); 