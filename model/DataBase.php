<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page de connexion à la base de données.
*/

require __DIR__ . "\..\config.php";

class DataBase
{
    public $connector;

    function __construct()
    {
        try
        {
            // Trouver une solution pour le p***** de fichier config
            $this->connector = new PDO("mysql:host=$host:$port;dbname=$dbname;charset=$charset" , $user, $password);
        }
        catch (PDOException $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}