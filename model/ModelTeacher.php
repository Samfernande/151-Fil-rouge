<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du modèle d'appel de la table t_teacher
*/

include_once 'model/DataBase.php';

class ModelTeacher
{
    private $req; 
    private $dataBase;

    function __construct()
    {
        $this->dataBase = new DataBase();
    }

    // Récupère et retourne tous les enseignants de la table t_teacher
    function getTeachers()
    {
        $this->req = $this->dataBase->connector->query('SELECT * FROM t_teacher');

        return $this->req->fetchALL(PDO::FETCH_ASSOC);
    }

    function getTeacherByID($id)
    {
        $this->req = $this->dataBase->connector->query('SELECT * FROM t_teacher JOIN t_section ON fkSection = idSection WHERE idTeacher =' . $id);

        return $this->req->fetchALL(PDO::FETCH_ASSOC)[0];
    }

    function removeTeacher($id)
    {
        $this->req = $this->dataBase->connector->query("DELETE FROM t_teacher WHERE idTeacher = {$id}");
    }

}

?>