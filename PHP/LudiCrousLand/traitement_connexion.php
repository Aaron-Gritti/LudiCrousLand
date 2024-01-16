<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $file = 'utilisateurs.txt';
    $file_content = file($file, FILE_IGNORE_NEW_LINES);

    $user_found = false;

    foreach ($file_content as $line) {
        list($stored_username, $stored_password) = explode(',', $line);
        if ($username === $stored_username && $password === $stored_password) {
            $user_found = true;
            break;
        }
    }

    if ($user_found) {
        // Redirection vers une autre page après la connexion réussie
        header("Location: LudiCrousLand.html");
        exit();
    } else {
        // Affichage du message d'erreur sur la page actuelle
        echo '<script>alert("Nom d\'utilisateur ou mot de passe incorrect");</script>';
        // Redirection à la même page de connexion
        echo '<script>window.history.back();</script>';
        exit();
    }
}
?>
