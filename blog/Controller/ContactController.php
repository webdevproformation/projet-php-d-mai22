<?php 

class ContactController extends Controller{

    public function index (){
        $form = new Formulaire($_POST); // 
        $data = [
            "titre" => "vous avez une question ????",
            "description" => "remplir le formulaire ci dessous et nous revenons vers vous au plus vite !!!" ,
            "form" => $form
        ];
        $this->send($data);

        $this->render("contact/formulaire");
    }

}