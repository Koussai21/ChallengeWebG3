<?php
require_once 'connexion.php';

class ArticleModel {
    private $myBDD;

    public function __construct(){
        $this->myBDD = myBDD::connexion();
    }
    
    public function getArticle(){
        return $this->myBDD->query("SELECT * FROM article")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUtilisateurbyName($name){
        return $this->myBDD->query("SELECT * FROM article WHERE name='$name'")->fetch(PDO::FETCH_ASSOC);
    }

    public function setArticle($nom, $description, $date, $image){
        $setArticle = $this->myBDD->prepare("INSERT INTO article(nom, description, date, image) VALUES (:nom, :description, :date, :image)");
        $parametres = [
            ':nom' => $nom,
            ':description' => $description,
            ':date' => $date,
            ':image' => $image
        ];

        $setArticle->execute($parametres);
    }
}
