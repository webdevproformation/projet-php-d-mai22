<?php  // http://localhost/projet-php/jour3/00-test.php
declare(strict_types=1);

class Article{
    private int $id;
    private string $titre ;
    private string $contenu ;

    public function getId() :int{
        return $this->id;
    }
    public function getTitre() : string{
        return $this->titre ;
    }
    public function getContenu() : string{
        return $this->contenu ;
    }

    public function setId(int $id_p) : self{
        $this->id = $id_p;
        return $this ;
    }

    public function setTitre(string $titre_p) : self{
        $this->titre = $titre_p;
        return $this ;
    }

    public function setContenu(string $contenu_p) : self{
        $this->contenu = $contenu_p;
        return $this ;
    }
}


$firstArticle = new Article();
$firstArticle->setId(1)
             ->setTitre("premier article")
             ->setContenu("lorem ipsum");

var_dump($firstArticle);

/**
object(Article)[1]
  private int 'id' => int 1
  private string 'titre' => string 'premier article' (length=15)
  private string 'contenu' => string 'lorem ipsum' (length=11)
*/