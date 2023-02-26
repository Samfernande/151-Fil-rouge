<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du contrôleur de la page de détails. La génère et appel les models correspondants.
*/

include_once 'model/ModelTeacher.php';

class ControllerDetails
{
    private $data;
    private $modelTeacher;
    private $idTeacher;

    function __construct()
    {
        if(isset($_GET['idTeacher']))
            $this->idTeacher = $_GET['idTeacher'];
        $this->modelTeacher = new ModelTeacher();
        $this->data = $this->modelTeacher->getTeacherByID($this->idTeacher);
        $this->deleteTeacher();
        $this->callPage($this->data);
    }

// Méthode permettant d'afficher la page avec les données en question
    function callPage($data)
    {
        include 'view/header.php';
        include 'view/page/detail.php';
        include 'view/footer.php';
    }

    // Méthode permettant de supprimer un enseignant
    function deleteTeacher()
    {
        if(isset($_GET['delete']) && $_GET['delete'] == 'yes' && isset($_SESSION['admin']) && $_SESSION['admin'] == 1)
        {
            $this->modelTeacher->removeTeacher($this->idTeacher);
            header('Location: ?link=main');
            exit();

        }
    }

}

?>