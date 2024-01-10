<?php
include_once('connexion.php');

Class forumModel{
    private $myBDD;
    public function __construct()
    {
        $this->myBDD = myBDD::connexion();
    }
    public function setThread($Sujet, $Message)
{
    try {
        $setThread = $this->myBDD->prepare("INSERT INTO threads(Sujet, Message) VALUES(?, ?)");
        return $setThread->execute([$Sujet, $Message]);
    } catch (PDOException $e) {
        echo "Erreur d'insertion dans la base de données : " . $e->getMessage();
        return null;
    }
}


    public function getThread()
    {
        return $this->myBDD->query("SELECT * FROM threads")->fetchAll(PDO::FETCH_ASSOC);
    }

}