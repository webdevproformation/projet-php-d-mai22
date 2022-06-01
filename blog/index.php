<?php 

define("ROOT" , __DIR__);
define("WWW" , "http://". $_SERVER["SERVER_NAME"] . str_replace("index.php" , "" , $_SERVER["SCRIPT_NAME"]) ) ;
define("DS", DIRECTORY_SEPARATOR);

if(isset($_GET["page"])){

    // http://localhost/projet-php/blog/
    // http://localhost/projet-php/blog/article/1
    // http://localhost/projet-php/blog/contact
    // http://localhost/projet-php/blog/connexion 

    $params = explode("/", trim($_GET["page"] , "/"));

    $controller = (!empty($params[0] ) ) ? $params[0] : "Accueil" ;
    /* if(!empty($params[0] )){
        $controller = $params[0] ;
    }else {
        $controller = "Accueil" ;
    } */

    $method = (isset($params[1])) ? $params[1] : "index" ;
    
    $controllerName = ROOT . DS . "Controller". DS . ucfirst($controller) . "Controller.php";

    if(!file_exists($controllerName)){
        echo "veuillez créer le fichier $controllerName";
        die();
    }

    /**
     * fonction qui va permettre de charger l'ensemble des class présentes dans le dossier Lib à la demande 
     */
    spl_autoload_register(function($nomClass){
        require ROOT . DS . "Lib" . DS . $nomClass .".php"; 
    });

    require $controllerName ; 
    
    $controllerN =  $controller . "Controller";

    $c = new $controllerN();

    if(!method_exists($c, $method)){
        echo "veuillez créer la méthode $method";
        die();
    }

    call_user_func_array([$c , $method] , [] ); // exécuter 


    // var_dump($controllerName); 
}

 