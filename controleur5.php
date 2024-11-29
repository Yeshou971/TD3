<?php
// Vérifier si tous les champs de noms sont remplis
if (isset($_POST['nom1'], $_POST['nom2'], $_POST['nom3'], $_POST['nom4'])) {
    // Récupérer les noms saisis
    $noms = [
        htmlspecialchars($_POST['nom1']), // Nom 1
        htmlspecialchars($_POST['nom2']), // Nom 2
        htmlspecialchars($_POST['nom3']), // Nom 3
        htmlspecialchars($_POST['nom4'])  // Nom 4
    ];

    // Trier les noms par ordre croissant de leur longueur
    usort($noms, function($a, $b) {
        return strlen($a) - strlen($b);
    });

    // Afficher les noms triés
    echo "Noms triés par ordre croissant de longueur :<br>";
    foreach ($noms as $nom) {
        echo $nom . "<br>";
    }
} else {
    // Si un ou plusieurs champs ne sont pas remplis
    echo "Veuillez remplir tous les champs.";
}
?>
