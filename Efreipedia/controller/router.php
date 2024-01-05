<?php 

function route_request($addresse){ 
    if($addresse === '/inscription'){
        require_once './view/inscription.php';
        require_once 'InscriptionController.php';
        $customer=new InscriptionController();
        $customer->setUtilisateur();
    }
    if($addresse === '/index'){
        require_once './index.php';
    }
}
