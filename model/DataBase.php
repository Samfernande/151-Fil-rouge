<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page de connexion à la base de données.
*/

class DataBase
{
    public $connector;

    function __construct()
    {
        try
        {
            $this->connector = new PDO('mysql:host=localhost:6044;dbname=db_school;charset=utf8' , 'root', 'root');
        }
        catch (PDOException $e)
        {
            die('Erreur : ' . $e->getMessage());
        }
    }
}