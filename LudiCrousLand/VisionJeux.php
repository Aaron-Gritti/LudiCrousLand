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
                            <a href="LudiCrousLand.html">Accueil</a>
                        </li>
                    </ul>
                </li>
            </ul> 
            <div class="logo-container">
                <a href="LudiCrousLand.html">
                    <img class="logo" src="image/logo.png" alt="Logo LudiCrousLand">
                </a>
            </div>  
        </div>
    </header>
    
    <?php
    
        $jeuxData = file("jeux.txt");

        // Assuming you want to display the latest game's data
        $latestGame = end($jeuxData);
        $gameInfo = explode('|', $latestGame);

        // Assigning values to variables for easier use in HTML
        list($nomJeu, $nbJoueurs, $classificationESRB, $descriptionJeu, $lienYouTube, $dureePartie, $specificiteJeu) = $gameInfo;
    ?>

    <div class="container zone ">
        <div id="milieu" class="nomJeu">
            <h1><?php echo $nomJeu; ?></h1>
        </div>
    </div>

    <div class="flexJeu annonceJeu">
        <div class="anneeParution">
            <p>Date de parution du jeu : 2000</p>
        </div>
        <div class="nbJoueur">
            <p>Nombre de joueur : <?php echo $nbJoueurs; ?> joueur</p>
        </div>
        <div class="classification">
            <p>Classification ESRB <?php echo $classificationESRB; ?></p>
        </div>
        <div class="description">
            <p>Description du jeu<br><?php echo $descriptionJeu; ?></p>
        </div>
    </div>
</body>
</html>