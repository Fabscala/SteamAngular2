<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SteamDatabase</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> 

</head>
<?php require ("db.php");
      require_once("function.php"); ?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-static-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">NightBlueSteam</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                        <li><a href="profil.php"> Profil </a></li>
                        <li><a href="achat.php"> Panier d'achat </a></li>
                        <li><a href="jeux_achetes.php"> Bibliothèque </a></li>
                        <li><a href="recherche.php"> Recherche </a></li>
                            <?php if(isLogged()) {
                                        ?><li><a href="logout.php">Déconnexion</a></li>
                                        <?php
                                    }
                                    
                                    else {
                                        ?>
                                           <li><a href="signin.php">Inscription</a></li>
                                           <li><a href="login.php">Connexion</a></li> 
                                      
                                        <?php
                                    }
                                    ?>
                </ul>
             </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
