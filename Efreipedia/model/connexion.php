<?php

class myBDD {
    public static function connexion(){
        try{
            $dsn = 'mysql:host=127.0.0.1;dbname=efreipedia;charset=utf8mb4;port=3306';
            $username = 'root';
            $password = '1234';
            $pdo = new PDO($dsn, $username, $password);
            return $pdo;
            echo "Connected successfully";
            } catch (PDOException $e) {
                die("Connection failed: " . $e->getMessage());
            }
    }        
}