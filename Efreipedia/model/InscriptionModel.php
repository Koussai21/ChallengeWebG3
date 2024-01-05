<?php require_once 'connexion.php';

class utilisateur {
    private $myBDD;

    public function __construct(){
        $this->myBDD=myBDD::connexion();
    }

    public function setUtilisateur($pseudo,$email,$tel,$motdepasse){
        $setUtilisateur=$this->myBDD->prepare("INSERT INTO utilisateur(pseudo, email, tel, motdepasse) VALUES (:pseudo, :email, :tel, :motdepasse)");
        $parametres = [
            ':pseudo' => $pseudo,
            ':email' => $email,
            ':tel' => $tel,
            ':motdepasse' => $motdepasse
        ];
        try {
            return $setUtilisateur->execute($parametres);
        } catch (PDOException $e) {
            die("Error executing query: " . $e->getMessage());
        }
        }
}