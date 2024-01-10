<?php 

function route_request($addresse){ 
    if($addresse === '/inscription'){
        require_once './view/inscription.php';
        require_once 'InscriptionController.php';
        $utilisateur=new InscriptionController();
        $utilisateur->setUtilisateur();
    }
    elseif ($addresse === '/connexion') {
        require_once 'ConnexionController.php';
        require_once './view/authentification.php';
    }
    elseif ($addresse === '/article') {
        require_once 'view/articles.php';
    }
    elseif ($addresse === '/accueil') {
        require_once('view/accueil.php');
    }
    elseif ($addresse === '/forum') {
        require_once 'ForumController.php';
        require_once('view/forum.php');
    }
else {

    echo '<h1>Erreur</h1>';
}
}