<?php

class MYSQLConnector
{
    public static function make()
    {
        try {
            $pdo = new PDO("mysql:host=localhost;dbname=vintrash;port=3306", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

            return $pdo;

        } catch (PDOException $e){
            die('No pude conectarme: ' . $e->getMessage());
            //die('No pude conectarme');
        }
    }

}

