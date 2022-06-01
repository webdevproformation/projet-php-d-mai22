<?php 
/**
 * class utilitaire permettant de générer des champs de formulaire dans les pages html
 */
class Formulaire{

    private array $data = [] ;

    /**
     * initialiser les valeurs dans les différents champs du formulaire 
     *
     * @param array $data
     */
    public function __construct(array $data){
        $this->data = $data; 
    }

    /**
     * méthode privée permettant de créer n'importe quelle input 
     *
     * @param string $nom
     * @param string $label
     * @param string $type
     * @return string
     */
    private function input(string $nom , string $label , string $type ) : string {
        $value = (isset($this->data[$nom])) ? $this->data[$nom] : "";
        return "<div class=\"mb-3\">
            <label for=\"$nom\">$label</label>
            <input type=\"$type\" id=\"$nom\" class=\"form-control\" name=\"$nom\" value=\"$value\">
        </div>";
    }

    /**
     * générer un champ de formulaire input type text
     *
     * @param string $nom
     * @param string $label
     * @return string
     */
    public function inputText(string $nom , string $label) :string{
        return $this->input($nom , $label , "text");
    }
    
    /**
     * générer un champ de formulaire input type email
     *
     * @param string $nom
     * @param string $label
     * @return string
     */
    public function inputEmail(string $nom , string $label) :string{
        return $this->input($nom , $label , "email");
    }

    /**
     * générer un champ de formulaire textarea
     *
     * @param string $nom
     * @param string $label
     * @return string
     */
    public function textarea(string $nom , string $label) :string{
        $value = (isset($this->data[$nom])) ? $this->data[$nom] : "";
        return "<div class=\"mb-3\">
            <label for=\"$nom\">$label</label>
            <textarea name=\"$nom\" id=\"$nom\" cols=\"30\" rows=\"10\" class=\"form-control\">$value</textarea>
        </div>";
    }

    /**
     * générer une bouton de soumission de formulaire 
     *
     * @param string $style
     * @return string
     */
    public function submit(string $style = "btn-primary") :string{
        return "<div class=\"mb-3\">
            <input type=\"submit\" class=\"btn $style\">
        </div>";
    }

}