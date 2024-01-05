<?php require_once './model/InscriptionModel.php';

class InscriptionController{
    protected $modele;

    public function __construct() {
        $this->modele = new utilisateur();
    }
    public function getInscriptionForm() {
        require_once './view/inscription.php';
    }
    public function setUtilisateur(){
        if(isset($_POST['pseudo'])) {
            $pseudo = $_POST['pseudo'];
            $tel = $_POST['telephone'];
            $email = $_POST['email'];
            $motdepasse = password_hash($_POST['motdepasse'], PASSWORD_DEFAULT);
            if($this->model->setUtilisateur($pseudo,$email,$tel,$motdepasse)){
                echo "<meta http-equiv='refresh' content='0;url=connexion'>";
            } else {
                $this->getInscriptionForm();
            }
        } else {
            $this->getInscriptionForm();
        }
    }
    }



