<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérez les données du formulaire
    $nomJeu = $_POST["nom-jeu"];
    $nbJoueurs = $_POST["nb-joueurs"];
    $classificationESRB = $_POST["classification-esrb"];
    $descriptionJeu = $_POST["description-jeu"];
    $lienYouTube = $_POST["lien-youtube"];
    $dureePartie = $_POST["duree-partie"];
    $specificiteJeu = $_POST["specificite-jeu"];

    // Créez une chaîne de données du jeu
    $nouveauJeu = "$nomJeu|$nbJoueurs|$classificationESRB|$descriptionJeu|$lienYouTube|$dureePartie|$specificiteJeu";

    // Ouvrez le fichier de stockage des jeux en mode écriture
    $fichier = fopen("jeux.txt", "a");

    if ($fichier) {
        // Écrivez les données du nouveau jeu dans le fichier
        fwrite($fichier, $nouveauJeu . PHP_EOL);

        // Fermez le fichier
        fclose($fichier);

        // Redirigez l'utilisateur vers la page de liste des jeux
        header("Location: VisionJeux.html");
        exit(); // Assurez-vous de terminer le script après la redirection
    } else {
        // Gestion d'erreur si l'ouverture du fichier échoue
        echo "Erreur d'écriture dans le fichier jeux.txt";
    }
}
?>

