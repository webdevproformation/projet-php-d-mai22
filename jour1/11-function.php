<?php // http://localhost/projet-php/jour1/11-function.php


// déclarer une fonction
/**
 * addition
 *
 * @param integer $a
 * @param integer $b
 * @return integer
 */
function calcul(int $a , int $b)  : int{
    return $a + $b ; 
}
// exécuter ma fonction
var_dump(calcul(1,2)); // 3


// créer une chaine de caractère qui est le nom
// d'une fonction 
$nom = "calcul";

// exécuter la fonction  (via une variable qui s'exécute)
var_dump($nom(10,5)); // 15

// call_user_func_array() // fonction de php qui permet  d'executer une fonction

var_dump(call_user_func_array("calcul" , [2, 3] ));

class A{
    public function method( int $a) : string {
        $texte = "Lorem ipsum dolor sit amet. ";
        return substr($texte , 0 , $a); 
    }
}
// créer un objet et exécuter la méthode public
$a = new A();
var_dump($a->method(2));

var_dump(call_user_func_array([$a, "method"] , [5]));
