<?php 

class AccueilController extends Controller {
    public function index(){
        echo "je suis la page d'accueil"; 
        $this->render( "accueil/index" );
    }
}