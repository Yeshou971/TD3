<?php
// Vérifier si le champ 'nom' existe dans $_POST et qu'il n'est pas vide
if (isset($_POST['nom']) && !empty($_POST['nom'])) {
    // Récupérer le nom soumis via le formulaire
    $nom = htmlspecialchars($_POST['nom']); // Éviter les injections XSS

    // Afficher le message de bienvenue
    echo "Bonjour " . $nom . " !";
} else {
    // Si le champ est vide ou absent, afficher un message d'erreur
    echo "Veuillez entrer un nom valide.";
}
?>