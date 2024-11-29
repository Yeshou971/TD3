<?php
// Données d'identification stockées en dur
$loginCorrect = "admin";
$passwordCorrect = "12345";

// Vérifier si les données ont été envoyées via le formulaire
if (isset($_POST['login']) && isset($_POST['password'])) {
    // Récupérer les informations du formulaire
    $login = htmlspecialchars($_POST['login']); // Protéger contre les attaques XSS
    $password = htmlspecialchars($_POST['password']); // Idem pour le mot de passe

    // Comparer les informations saisies avec les données stockées
    if ($login === $loginCorrect && $password === $passwordCorrect) {
        // Connexion réussie
        echo "Connexion OK";
    } else {
        // Connexion échouée
        echo "Connexion impossible";
    }
} else {
    // Si les champs ne sont pas correctement remplis
    echo "Veuillez remplir tous les champs.";
}
?>
