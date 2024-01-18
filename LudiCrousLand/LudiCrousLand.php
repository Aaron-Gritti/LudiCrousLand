<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles.css">
    <title>LudiCrousLand</title>
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
    <div class="Corps">
        <div class="BarRech">
            <div class="search-container">
                <input type="text" placeholder="Recherchez un produit...">
                <button type="submit"></button>
            </div>
        </div>
        
        <div class="info">
            <h1>La classification des jeux</h1>
            <div class="TInfo">            
            <p id="expl">
                La classification ESAR permet de mieux organiser la diversité des jeux et de faciliter 
                la recherche en offrant une structure compréhensible basée sur les expériences 
                émotionnelles, symboliques, d'assemblage et de règles qu'ils procurent aux joueurs. 
                <br> 
                <br>
                Pour plus d'informations cliquez :  
                <a href="https://www.creation-ludotheque.fr/blog/classifier-et-ranger-les-jeux-et-jouets-en-ludotheque-avec-le-systeme-e-s-a-r/" target="_blank">ici</a>
            </p>
            <div>
                <br>
                <select id="choix">
                <option>Catégories</option>
                <option value="Em">A100 JEU D’EXERCICE</option>
                <option value="Sy">A200 JEU SYMBOLIQUE</option>
                <option value="As">A300 JEU D’ASSEMBLAGE</option>
                <option value="Re">A400 JEU DE REGLES</option>
                </select>

                <div id="E" class="contenu">
            <table>
                <tr>
                    <td>
                        <h2>A100 JEU D’EXERCICE</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>A101 : Jeu sensoriel sonore</li>
                            <li>A102 : Jeu sensoriel visuel</li>
                            <li>A103 : Jeu sensoriel tactile </li>
                            <li>A104 : Jeu sensoriel olfactif</li>
                            <li>A105 : Jeu sensoriel gustatif</li>
                            <li>A106 : Jeu moteur</li>
                            <li>A107 : Jeu de manipulation</li>
                            <li>A108 : Jeu d’action-réaction virtuel</li>
                        </ul>
                    </td>
                </tr>
            </table>
                </div>

                <div id="S" class="contenu">
            <table>
                <tr>
                    <td>
                        <h2>A200 JEU SYMBOLIQUE</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>A201 : Jeu à rôle</li>
                            <li>A202 : Jeu de mise en scène</li>
                            <li>A203 : Jeu de production graphique à deux dimensions</li>
                            <li>A204 : Jeu de production à trois dimensions</li>
                            <li>A205 : Jeu de simulation virtuel</li>
                        </ul>
                    </td>
                </tr>
            </table>
                </div>

                <div id="A" class="contenu">
            <table>
                <tr>
                    <td>
                        <h2>A300 JEU D’ASSEMBLAGE</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>A301 : Jeu de construction à 3 dimensions</li>
                            <li>A302 : Jeu d’agencement à 2 dimensions</li>
                            <li>A303 : Jeu de montage scientifique</li>
                            <li>A304 : Jeu de montage virtuel</li>
                        </ul>
                    </td>
                </tr>
            </table>
                </div>

                <div id="R" class="contenu">
            <table>
                <tr>
                    <td>
                        <h2>A400 JEU DE REGLES</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul>
                            <li>A401 : Jeu d’association</li>
                            <li>A402 : Jeu de séquence</li>
                            <li>A403 : Jeu de circuit et de parcours</li>
                            <li>A404 : Jeu d’adresse</li>
                            <li>A405 : Jeu sportif et moteur</li>
                            <li>A406 : Jeu de stratégie</li>
                            <li>A407 : Jeu de hasard</li>
                            <li>A408 : Jeu questionnaire</li>
                            <li>A409 : Jeu mathématique</li>
                            <li>A410 : Jeu de langage et d’expression</li>
                            <li>A411 : Jeu d’énigme</li>
                            <li>A412 : Jeu de règles virtuel</li>
                        </ul>
                    </td>
                </tr>
            </table>
                </div>

                <script>
            document.getElementById('choix').addEventListener('change', function() {
                var choix = this.value;
                var tousContenus = document.getElementsByClassName('contenu');
                for (var i = 0; i < tousContenus.length; i++) {
                tousContenus[i].style.display = 'none';
            }
            // Afficher le contenu lié à l'option sélectionnée
            if (choix === 'Em') {
                document.getElementById('E').style.display = 'block';
            }
            if (choix === 'Sy') {
                document.getElementById('S').style.display = 'block';
            }
            if (choix === 'As'){
                document.getElementById('A').style.display = 'block';
            }
            if (choix === 'Re'){
                document.getElementById('R').style.display = 'block';
            }
            });
                </script>
                </div>   
            </div>      
        </div>
        
        <?php
            // Read the content of the "jeux.txt" file
            $jeuxData = file("jeux.txt");
            ?>

            <?php
            // Check if the file is not empty and contains games
            if (!empty($jeuxData) && count($jeuxData) > 0) {
                // Display the "PJeux" section only if there are games
                echo '<div class="PJeux">';   
                echo '<h1>Jeux du moment</h1>';     

                // Loop through each game entry
                foreach ($jeuxData as $gameEntry) {
                    // Extract game information
                    $gameInfo = explode('|', $gameEntry);
                    
                    // Check if array keys exist before accessing them
                    $nomJeu = isset($gameInfo[0]) ? $gameInfo[0] : '';
                    $paruJeu = isset($gameInfo[1]) ? $gameInfo[1] : '';
                    $nbJoueurs = isset($gameInfo[2]) ? $gameInfo[2] : '';
                    $classificationESRB = isset($gameInfo[3]) ? $gameInfo[3] : '';
                    $descriptionJeu = isset($gameInfo[4]) ? $gameInfo[4] : '';
                    $lienImage = isset($gameInfo[5]) ? $gameInfo[5] : '';
                    $lienYoutube = isset($gameInfo[6]) ? $gameInfo[6] : '';
                    $dureePartie = isset($gameInfo[7]) ? $gameInfo[7] : '';
                    $specificiteJeu = isset($gameInfo[8]) ? $gameInfo[8] : '';

                    // Display the game information in a card
                    echo '<div class="Jeu">';
                    echo '<h2><a href="VisionJeux.php">' . $nomJeu . '</a></h2>';
                    // Add logic to display image, description, and other game info here
                    echo '<p class="Desc">' . $descriptionJeu . '</p>';
                    echo '<p class="Jinfo">Nombre de joueur : ' . $nbJoueurs . '<br>Temps de jeu : ' . $dureePartie . ' minutes';
                    echo '<a href="VisionJeux.php"><button type="button">Voir la page</button></a>';
                    echo '</div>';
                    echo '<br>';
                }

                echo '</div>';
            } else {
                // If there are no games, you can choose to display a message or take other actions
                echo '<p>Aucun jeu trouvé pour le moment. <a href="CreationPage.html">Ajoutez un jeu maintenant</a>.</p>';
            }
        ?>
    </div>
    <br>
    <footer> 
        <nav>
            <table>
                <tr>
                    <td> <a href="">Préc</a>&ensp;</td>
                    <td> <a href="">1</a> - </td>
                    <td> <a href="">2</a> - </td>
                    <td> <a href="">3</a> - </td>
                    <td> <a href="">4</a> - </td>
                    <td> <a href="">5</a> - </td>
                    <td> <a href="">6</a> - </td> 
                    <td> <a href="">7</a> - </td> 
                    <td> <a href="">8</a> - </td> 
                    <td> <a href="">9</a> - </td> 
                    <td> <a href="">10</a>&ensp;</td> 
                    <td> <a href="">Suiv</a></td>
                </tr>
            </table>
        </nav>
    </footer>

</body>
</html>