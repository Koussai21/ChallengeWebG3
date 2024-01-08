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
    
    public function getArticlebyCategorie($categorie){
        return $this->myBDD->query("SELECT * FROM article WHERE categorie ='$categorie'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setArticle($nom, $categorie, $description, $date, $image){
        $setArticle = $this->myBDD->prepare("INSERT INTO article VALUES (?,?,?,?,?)");
        $parametres = [
            $nom,
            $categorie,
            $description,
            $date,
            $image
        ];

        $setArticle->execute($parametres);
    }
}
