<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du contrôleur de la page principale. La génère et appel les models correspondants.
*/

include_once 'model/ModelTeacher.php';

class ControllerMain
{
    // VOIR SI DATA FONCTIONNE
    private $data;
    private $modelTeacher;

    function __construct()
    {
        $this->modelTeacher = new ModelTeacher();
        $this->deleteTeacher();
        $this->data = $this->modelTeacher->getTeachers();
        $this->callPage($this->data);
    }


    function callPage($data)
    {
        include 'view/header.php';
        include 'view/page/main.php';
        include 'view/footer.php';
    }

    function deleteTeacher()
    {
        if(isset($_GET['delete']) && $_GET['delete'] == 'yes')
        {
            $id = $_GET['idTeacher'] ?? '';
            $this->modelTeacher->removeTeacher($id);
            header('Location: ?link=main');

        }
    }

}

?>