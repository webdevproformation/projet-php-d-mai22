<?php // http://localhost/projet-php/jour1/12-ob.php
// https://www.php.net/manual/fr/ref.outcontrol.php

// ob_start()
// ob_get_clean()

// output buffering 
ob_start(); 
?> 

<h1>bonjour</h1>
<p>hello</p>
<p>toto</p>

<?php
// au lieu que html soit affiché dans la page web ( output classique )
// tout le html qui est écrit va être stockée dans la variable $contenu
$contenu = ob_get_clean(); 
$contenu = str_replace("bonjour" , "utilisation output buffering" , $contenu);

echo $contenu; 

?>

