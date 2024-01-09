<?php
require_once './model/ArticleModel.php';

class ArticleController {
    private $articleModel;

    public function __construct(){
        $this->articleModel = new ArticleModel();
    }

    public function afficherArticles(){
        $articles = $this->articleModel->getArticle();
        require_once './view/articles.php';
    }

    public function afficherArticleParCategorie($categorie){
        $article = $this->articleModel->getArticlebyCategorie($categorie);
        
    }

    public function ajouterArticle($nom, $categorie, $description, $date, $image){
        $this->articleModel->setArticle($nom, $categorie, $description, $date, $image);
        echo "L'article a été ajouté avec succès.";
    }
}


$articleController = new ArticleController();


$articleController->afficherArticles();


$articleController->afficherArticleParCategorie('Nom de l\'article');


$articleController->ajouterArticle('Nouvel article','Categorie', 'Description du nouvel article', '2024-01-06', 'chemin/vers/nouvelle_image.jpg');
