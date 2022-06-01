<?php 

class Controller{

    private array $data = [];

    /**
     * permet d'envoyer des données dans la page html
     *
     * @param array $data
     * @return void
     */
    protected function send(array $data) :void{
        $this->data = $data ; 
    }

    /**
     * générer la page html 
     *
     * @param string $template
     * @return void
     */
    protected function render(string $template) :void{

        ob_start();
        extract($this->data); 
        require ROOT . DS . "Vue" . DS . $template . ".php";

        $contenu = ob_get_clean();

        require ROOT . DS . "Vue" . DS . "base.php"; 

    }

}