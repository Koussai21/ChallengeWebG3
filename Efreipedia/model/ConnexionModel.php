<?php require_once 'connexion.php';

class utilisateurConnexion {
    private $myBDD;

    public function __construct(){
        $this->myBDD=myBDD::connexion();
    }
    
    public function getUtilsateur(){
        return $this->myBDD->query("SELECT * FROM utilisateur")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUtilisateurbyEmail($email){
        return $this->myBDD->query("SELECT * FROM utilisateur WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }
}