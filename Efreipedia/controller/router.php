<?php 

function route_request($addresse){ 
    if($addresse === '/inscription'){
        require_once './view/inscription.php';
        require_once 'InscriptionController.php';
        $customer=new InscriptionController();
        $customer->setUtilisateur();
    }
    elseif ($addresse === 'article') {
        require_once('view/articles.php');
    }
    elseif ($addresse === 'accueil') {
        require_once('view/accueil.php');
    }
else {

    echo '<h1>Erreur</h1>';
}
}