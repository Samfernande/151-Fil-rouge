<?php
/*
TITRE : Fil Rouge
AUTEUR : Fernandez Samuel
LIEU : Lausanne
DATE : 24.02.2023
DESCRIPTION : Page du contrôleur de la page d'ajout d'enseignants. La génère et appel les models correspondants.
*/

include_once 'model/ModelTeacher.php';
include_once 'model/ModelSection.php';


class ControllerAddTeacher
{
    // VOIR SI DATA FONCTIONNE
    private $data;
    private $model;
    private $idTeacher; 

    function __construct()
    {
        $this->idTeacher = $_GET['idTeacher'] ?? '';
        $this->model['modelTeacher'] = new ModelTeacher();
        $this->model['modelSection'] = new ModelSection();
        $this->data['dataSection'] = $this->model['modelSection']->getSections();
        $this->addInfo();
        $this->callPage($this->data);
    }


    // Méthode permettant d'afficher la page avec les données en question
    function callPage($data)
    {
        include 'view/header.php';
        include 'view/page/addTeacher.php';
        include 'view/footer.php';
    }

    // Méthode qui s'effectue lorsque l'utilisateur modifie un enseignant.
    function addInfo()
    {
        if(isset($_POST['firstname']) && isset($_POST['name']) && isset($_POST['nickname']) && isset($_POST['gender']) && isset($_POST['origin']) && isset($_POST['section']))
        {
            $teaFirstname = htmlspecialchars($_POST['firstname']) ?? '';
            $teaName = htmlspecialchars($_POST['name']) ?? '';
            $teaNickname = htmlspecialchars($_POST['nickname']) ?? '';
            $teaGender = $_POST['gender'] ?? '';
            $teaOrigine = htmlspecialchars($_POST['origin']) ?? '';
            $teaSection = $_POST['section'] ?? '';

            // Traitement de la variable du genre.
            $teaGender = $teaGender == 'male' ? 'H' : 'F';

            // Si tous les paramètres sont bons, envoi des données au modèle qui va les ajouter dans la base de données
            if(!empty($teaFirstname) && !empty($teaName) && !empty($teaNickname) && !empty($teaGender) && !empty($teaOrigine) && !empty($teaSection))
            {
                $this->model['modelTeacher']->addTeacher($teaFirstname, $teaName, $teaGender, $teaNickname, $teaOrigine, $this->getRightSection($teaSection));
                $this->data['animation'] = true;
            }

        }


    }

    // Méthde qui permet de récupérer l'ID de la section choisie par l'utilisateur
    function getRightSection($choosenSection)
    {
        foreach($this->data['dataSection'] as $section)
        {
            if ($section['secName'] == $choosenSection)
            {
                   return $section['idSection'];
                   break;
            }
        }

        return 2;
    }

}

?>