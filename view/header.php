<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="resources/css/container.css">
    <link rel="stylesheet" href="resources/css/specific.css">
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/positions.css">

	<title>Fil rouge - I151</title>
</head>

<header>
    <div class='containerSpaceBetween'>
	    <h1 class='marginSide1'>Surnoms des enseignants</h1>
        <div>

        
            <?php if(!isset($_SESSION['isConnected']) || $_SESSION['isConnected'] == 0) { ?>

            <form class= 'formLogin' method='post'>
                <div>
                    <label>Login</label>
                    <input type="text" id="login" name="login">
                </div>
                <div>
                    <label>Mot de passe</label>
                    <input type="password" id="password" name="password">
                </div>

                <button type="submit">Connexion</button>
            </form>

        <?php } else { ?>

            <form class= 'formLogin' method='post' action='?link=main&disconnect=yes'>
                
                <p class= 'paddingSide1'><?php echo $_SESSION['username'] ?></p>
                <p class= 'paddingSide1'><?php echo $_SESSION['admin'] == 1 ? '(admin)' : '(utilisateur)' ?></p>

                <button type="submit">Déconnexion</button>
            </form>

        <?php } ?>

        </div>
    </div>

    <div class='margin1'>

    <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == 1) {  ?>

        <a class='margin1' href="?link=main">Menu principal</a>

        <?php if(isset($_SESSION['admin']) && $_SESSION['admin'] == 1) {  ?>

            <a class='margin1' href="?link=addTeacher">Ajouter un enseignant</a>

        <?php } ?>
        
    <?php } ?>

    </div>

    <?php if(isset($_SESSION['isConnected']) && $_SESSION['isConnected'] == 1 && $_SESSION['animation'] == 1) {  ?>

    <p id = 'popup' class='loginPopup'>Vous êtes connecté.</p>

    <?php } else if (isset($_SESSION['animation']) && $_SESSION['animation'] == 1) { ?>

    <p id = 'popup' class='redLoginPopup'>Nom d'utilisateur ou mot de passe incorrect.</p>

    <?php }?>

    <?php
    if(isset($_SESSION['isConnected']))
    {
        echo $_SESSION['animation'] == 1 ? "<script src='resources/js/popUp.js'></script>" : ''; 
        $_SESSION['animation'] = 0;
    }
    ?>
  

</header>