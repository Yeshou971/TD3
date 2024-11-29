<?php
// Vérifier si le champ 'pays' a été envoyé via le formulaire
if (isset($_POST['pays']) && !empty($_POST['pays'])) {
    // Récupérer la valeur sélectionnée
    $pays = htmlspecialchars($_POST['pays']); // Protéger contre les attaques XSS

    // Afficher le pays sélectionné
    echo "Vous avez sélectionné : " . $pays;
} else {
    // Si aucun pays n'est sélectionné
    echo "Veuillez sélectionner un pays.";
}
?>
