<?php
require_once 'articleModel.php';

class ArticleController {
    private $articleModel;

    public function __construct(){
        $this->articleModel = new ArticleModel();
    }

    public function afficherArticles(){
        $articles = $this->articleModel->getArticle();
        print_r($articles);
    }

    public function afficherArticleParNom($nom){
        $article = $this->articleModel->getUtilisateurbyName($nom);
        print_r($article);
    }

    public function ajouterArticle($nom, $description, $date, $image){
        $this->articleModel->setArticle($nom, $description, $date, $image);
        echo "L'article a été ajouté avec succès.";
    }
}


$articleController = new ArticleController();


$articleController->afficherArticles();


$articleController->afficherArticleParNom('Nom de l\'article');


$articleController->ajouterArticle('Nouvel article', 'Description du nouvel article', '2024-01-06', 'chemin/vers/nouvelle_image.jpg');
