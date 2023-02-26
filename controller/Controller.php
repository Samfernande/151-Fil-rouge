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
include_once 'controller/ControllerUpdateTeacher.php';
include_once 'controller/ControllerAddTeacher.php';
include_once 'controller/ControllerError.php';
include_once 'model/ModelUser.php';

class Controller
{
    private $link;
    private $actualController;
    private $model;


    function __construct()
    {
        $this->model = new ModelUser();
        $this->disconnect();
        $this->login();
        $this->changePage();
    }

    // Méthode permettant de changer de page en fonction du link récupéré du header.
    function changePage()
    {
        $this->link = $_GET['link'] ?? '';

        switch ($this->link) {
            case 'main':
                $this->actualController = new ControllerMain();
                break;
            case 'addTeacher':
                $_SESSION['admin'] == 1 ? $this->actualController = new ControllerAddTeacher() : $this->actualController = new ControllerError();
                break;
            case 'detail':
                $_SESSION['isConnected'] == 1 ? $this->actualController = new ControllerDetails() : $this->actualController = new ControllerError();
                break;
            case 'updateTeacher':
                $_SESSION['admin'] == 1 ? $this->actualController = new ControllerUpdateTeacher() : $this->actualController = new ControllerError();
                break;
            default:
                $this->actualController = new ControllerMain();
                break;
                
            
        }
    }

    // Méthode permettant à l'utilisateur de se login.
    function login()
    {
        $login = htmlspecialchars($_POST['login']) ?? '';
        $password = htmlspecialchars($_POST['password']) ?? '';

        if(!empty($login) || !empty($password))
        {
            foreach ($this->model->getUsers() as $user)
            {
                if($user['useLogin'] == $login && password_verify($password, $user['usePassword']))
                {
                    $_SESSION['isConnected'] = 1;
                    $_SESSION['admin'] = $user['useAdministrator'] == 1 ? 1 : 0;
                    $_SESSION['username'] = $user['useLogin'];
                }

            }

            $_SESSION['animation'] = 1;

        }
    }

    // Méthode permettant à l'utilisateur de se déconnecter.
    function disconnect()
    {
        if($_GET['disconnect'] == 'yes')
        {
            $_SESSION = [];
            header('Location: ?link=main');
        }
    }

}