<?php
// Vérifier si les champs 'password' et 'confirm_password' ont été soumis
if (isset($_POST['password'], $_POST['confirm_password'])) {
    // Récupérer les valeurs des champs
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Vérifier que les mots de passe sont identiques
    if ($password === $confirmPassword) {
        // Vérifier que le mot de passe a plus de 6 caractères
        if (strlen($password) > 6) {
            echo "Mot de passe valide !";
        } else {
            echo "Le mot de passe doit contenir plus de 6 caractères.";
        }
    } else {
        // Si il n'y a pas le même nombre de caractère
        echo "Les mots de passe ne correspondent pas.";
    }
} else {
    // Si les champs ne sont pas remplis correctement
    echo "Veuillez remplir tous les champs.";
}
?>
