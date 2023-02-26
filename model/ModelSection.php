<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du modèle d'appel de la table t_teacher
*/

include_once 'model/DataBase.php';

class ModelSection
{
    private $req; 
    private $dataBase;

    function __construct()
    {
        $this->dataBase = new DataBase();
    }

    // Récupère et retourne tous les enseignants de la table t_teacher
    function getSections()
    {
        $this->req = $this->dataBase->connector->query('SELECT * FROM t_section');

        return $this->req->fetchALL(PDO::FETCH_ASSOC);
    }

}

?>