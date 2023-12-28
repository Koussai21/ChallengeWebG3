<?php

class myBDD {
    public static function connexion(){
        try{
            $dsn = 'mysql:host=51.158.59.186;dbname=H.L;charset=utf8mb4;port=14301';
            $username = 'phppex';
            $password = 'Supermotdepasse!42';
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
            echo "Connected successfully";
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
    }        
}