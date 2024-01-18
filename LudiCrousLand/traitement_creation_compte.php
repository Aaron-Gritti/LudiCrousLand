<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = 'utilisateurs.txt';
    // Vérifie si le fichier existe, sinon le crée
    if (!file_exists($file)) {
        $fp = fopen($file, 'w');
        fclose($fp);
    }

    // Écriture des données de l'utilisateur dans le fichier
    $user_data = $username . ',' . $password . "\n";
    file_put_contents($file, $user_data, FILE_APPEND);

    // Redirection vers une autre page après la création du compte
    header("Location: Connexion.html");
    exit();
}
?>
