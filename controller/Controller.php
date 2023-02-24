<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du controleur parent qui va instancier tous les autres controleurs
*/

include_once 'controller/ControllerMain.php';
include_once 'controller/ControllerDetails.php';

class Controller
{
    private $link;
    private $actualController;


    function __construct()
    {
        $this->changePage();
    }

    function changePage()
    {
        $this->link = $_GET['link'] ?? '';

        switch ($this->link) {
            case 'main':
                $this->actualController = new ControllerMain();
                break;
            case 'addTeacher':
                $this->actualController = new ControllerMain();
                break;
            case 'detail':
                $this->actualController = new ControllerDetails();
                break;
            case 'updateTeacher':
                $this->actualController = new ControllerMain();
                break;
            default:
                $this->actualController = new ControllerMain();
                break;
                
            
        }
    }

}