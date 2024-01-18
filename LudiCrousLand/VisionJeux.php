<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="StylesPageJeu.css">
    <title>Page d'un Jeu</title>
</head>

<body>
    <header>        
        <div class="container">                  
            <ul class="menu">
                <li class="dropdown dropdown-1">Menu
                    <ul class="dropdown_menu dropdown_menu-1">
                        <li class="dropdown_item-1">
                            <a href="CreationPage.html">Ajouter un jeu</a>
                        </li>
                        <li class="dropdown_item-2">
                            <a href="Connexion.html">Déconnexion</a>
                        </li>
                        <li class="dropdown_item-3">
                            <a href="LudiCrousLand.php">Accueil</a>
                        </li>
                    </ul>
                </li>
            </ul> 
            <div class="logo-container">
                <a href="LudiCrousLand.php">
                    <img class="logo" src="image/logo.png" alt="Logo LudiCrousLand">
                </a>
            </div>  
        </div>
    </header>
    
    <?php
    
        $jeuxData = file("jeux.txt");

        $latestGame = end($jeuxData);
        $gameInfo = explode('|', $latestGame);

        list($nomJeu, $paruJeu, $nbJoueurs, $classificationESRB, $descriptionJeu, $lienImage, $lienYouTube, $dureePartie, $specificiteJeu) = $gameInfo;
    ?>

    <div class="container zone ">
        <div id="milieu" class="nomJeu">
            <h1><?php echo $nomJeu; ?></h1>
        </div>
    </div>

   <?php 
    // Check if the image link is not null
    if ($lienYouTube !== null) {
        echo '<div class="imageDiv">';
        echo '<img src="' . $lienImage . '" alt="Image du Jeu">';
        echo '</div>';
    }
    ?>

    <div class="flexJeu annonceJeu">
        <div class="anneeParution">
            <p>Date de parution du jeu : <?php echo $paruJeu; ?></p>
        </div>
        <div class="nbJoueur">
            <p>Nombre de joueur : <?php echo $nbJoueurs; ?> joueur(s)</p>
        </div>
        <div class="classification">
            <p>Classification ESRB <?php echo $classificationESRB; ?></p>
        </div>
        <div class="description">
            <p>Description du jeu<br><?php echo $descriptionJeu; ?></p>
        </div>
    </div>

    <?php

    // Check if the YouTube link is not null
    if ($lienYouTube !== null) {
        echo '<div class="youtubeDiv">';
        echo '<p>Lien YouTube : <a href="' . $lienYouTube . '">Regarder la vidéo</a></p>';
        echo '</div>';
    }

    // Check if the game duration is not null
    if ($dureePartie !== null) {
        echo '<div class="dureeDiv">';
        echo '<p>Durée de la Partie : ' . $dureePartie . ' minutes</p>';
        echo '</div>';
    }
    ?>
</body>
</html>