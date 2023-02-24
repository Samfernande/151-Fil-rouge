<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du contrôleur de la page principale. La génère et appel les models correspondants.
*/

include_once 'model/ModelTeacher.php';

class ControllerDetails
{
    // VOIR SI DATA FONCTIONNE
    private $data;
    private $modelTeacher;
    private $idTeacher;

    function __construct()
    {
        if(isset($_GET['idTeacher']))
            $this->idTeacher = $_GET['idTeacher'];
        $this->modelTeacher = new ModelTeacher();
        $this->data = $this->modelTeacher->getTeacherByID($this->idTeacher);
        $this->callPage($this->data);
    }


    function callPage($data)
    {
        include 'view/header.php';
        include 'view/page/detail.php';
        include 'view/footer.php';
    }

}

?>