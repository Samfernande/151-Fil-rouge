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

    function __construct()
    {
        $this->modelTeacher = new ModelTeacher();
        $this->data = $this->modelTeacher->getTeachers();
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