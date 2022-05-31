<?php 

class Controller{

    protected function render($template){

        ob_start();

        require ROOT . DS . "Vue" . DS . $template . ".php";

        $contenu = ob_get_clean();

        require ROOT . DS . "Vue" . DS . "base.php"; 

    }

}