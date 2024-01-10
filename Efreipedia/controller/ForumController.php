<?php
require_once('model/ForumModel.php');

class ForumController
{
    private $model;
    public function __construct()
    {
        $this->model = new forumModel;
    }

    
    public function getForumInfo()
    {
        include_once('view/forum.php');
    }


    public function setThread()
    {
        if (isset($_POST['Sujet'])) {
            $Sujet = $_POST['Sujet'];
            $Message = $_POST['Message'];
            
            if ($this->model->setThread($Sujet, $Message)) {
                echo "Votre Message a été publié !";
            } else {
                echo "Echec de publication";
                $this->getForumInfo();
            }


        } else {
            $this->getForumInfo();
        }


    }

    public function getThread()
    {
       
        $threads = $this->model->getThread();
        include_once('view/forum.php');
    }
    
}