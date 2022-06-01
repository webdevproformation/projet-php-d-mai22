<?php 

class ContactController extends Controller{

    public function index (){
        $data = [
            "titre" => "vous avez une question ????",
            "description" => "remplir le formulaire ci dessous et nous revenons vers vous au plus vite !!!"
        ];
        $this->send($data);

        $this->render("contact/formulaire");
    }

}