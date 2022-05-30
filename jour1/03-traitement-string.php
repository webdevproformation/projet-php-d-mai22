<?php // http://localhost/projet-php/jour1/03-traitement-string.php

/**
<?= =>
str_replace($search , $replace , $subject);
ucfirst ( $string );
strtolower( $string ) ;
explode ( $separator , $string) ;
trim( $string , $characters ) ;
substr_replace($string ,"", -1); // remplacer le dernier caractère d'une chaine
substr($big, 0, 100);
htmlspecialchars() / htmlentities()

html et php en même temps
 */
?> 
 
<?php $titre = "le titre principal" ?>
<h1><?php echo $titre ?></h1>
<!-- équivalent -->
<h1><?= $titre ?></h1>

<!-- str_replace($search , $replace , $subject); -->

<?php 
$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu felis euismod, tempus justo et, lacinia lectus. Lorem Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Lorem Pellentesque et libero vel libero hendrerit porttitor. Donec vestibulum turpis sed imperdiet porta." ; 

$textTransforme = str_replace("Lorem" , "<mark>Bonjour</mark>" , $text);
echo ($textTransforme);

$root = str_replace("03-traitement-string.php" , "" , __FILE__ );
var_dump(__FILE__);  // C:\xampp\htdocs\projet-php\jour1\03-traitement-string.php
var_dump($root); //     C:\xampp\htdocs\projet-php\jour1\
?>
<!-- 
ucfirst ( $string );
strtolower( $string ) ;
-->

<?php  $nomClass = "bonjour" ; // Mettre une majuscule sur la 1ère lettre

var_dump(ucfirst($nomClass)); // 'Bonjour'

$phrase = "du Text MajusculE n'ImPORTE Ou";

var_dump(strtolower($phrase)); // 'du text majuscule n'importe ou'


// explode() => string => le transformer en tableau

var_dump(__FILE__); 
$path = explode(DIRECTORY_SEPARATOR , __FILE__);
var_dump($path); 

// trim()
// supprimer des caractères au début et la fin du chaines

$motDePasse = "       azerty        ";

var_dump($motDePasse); 
var_dump(trim($motDePasse)); // les espaces debug + fin

// 
$rootPur = str_replace("03-traitement-string.php" , "" , __FILE__);
$rootPur = trim($rootPur , DIRECTORY_SEPARATOR); // \ ou /
var_dump($rootPur); // C:\xampp\htdocs\projet-php\jour1

// htmlspecialchars() / htmlentities()
// fonction d'encodage  
// prendre les caractères spéciaux de html
// < > " " & => transformer en équivalent html
// &lt; &gt; => fonction qui permet d'éviter les injections
// XSS mettre du js dans votre code PHP 

$virus = "<script>alert('virus é à &')</script>";

// '&lt;script&gt;alert(&#039;virus&#039;)&lt;/script&gt;' 
var_dump( htmlspecialchars($virus) );
var_dump( htmlentities($virus) ); // é à è => &eacute;
echo htmlspecialchars($virus) ; 

// cas pratique créer le fichier 04-exo.php 

$texte = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu felis euismod, tempus justo et, lacinia lectus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse potenti. Pellentesque et libero vel libero hendrerit porttitor. Donec vestibulum turpis sed imperdiet porta. Quisque ac nulla blandit, ornare libero in, vulputate ante. Donec mauris urna, vestibulum ut nisi sed, aliquam pharetra leo. Etiam vel faucibus neque. Suspendisse sodales erat risus. Aenean dignissim finibus sem, elementum porttitor diam convallis sit amet. Cras egestas mi ipsum, sed tempor orci mollis in. Vestibulum eu velit vel diam venenatis rhoncus non et eros. Duis vitae nulla quis urna cursus porta. Vivamus pretium porta mauris. Suspendisse a bibendum velit. ";

// créer une fonction qui permet traitement pour récupérer les 12 mots de la chaine de caractères et ajouter à la fin ...

// Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu felis euismod, ...