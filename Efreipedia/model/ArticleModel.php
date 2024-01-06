<?php
require_once 'connexion.php';

class ArticleModel {
    private $myBDD;

    public function __construct(){
        $this->myBDD = myBDD::connexion();
    }
    
    public function getArticlebyCategorie($categorie){
        return $this->myBDD->query("SELECT * FROM article WHERE categorie ='$categorie'")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function setArticle($nom, $categorie, $description, $date, $image){
        $setArticle = $this->myBDD->prepare("INSERT INTO article(nom, categorie, description, date, image) VALUES (:nom, :categorie, :description, :date, :image)");
        $parametres = [
            ':nom' => $nom,
            ':categorie' => $categorie,
            ':description' => $description,
            ':date' => $date,
            ':image' => $image
        ];

        $setArticle->execute($parametres);
    }
}
