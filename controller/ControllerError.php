<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du contrôleur de la page d'erreur. La génère et appel les models correspondants.
*/

class ControllerError
{

    function __construct()
    {
        $this->callPage();
    }

// Méthode permettant d'afficher la page
    function callPage()
    {
        include 'view/header.php';
        include 'view/page/error.php';
        include 'view/footer.php';
    }

}

?>