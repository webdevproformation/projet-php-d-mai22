<?php 

class AccueilController extends Controller {
    public function index(){
        $data = [
            "titre" => "bienvenu sur mon site",
            "presentation" => "voici le projet de la semaine !"
        ];
        $this->send($data); 
        $this->render( "accueil/index" );
    }
}