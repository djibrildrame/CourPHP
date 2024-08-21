<?php
session_start(); // Démarrage de la session, doit être appelé avant tout code HTML pour éviter les erreurs liées aux en-têtes.

$identifiant_valide = "Aminet"; // Identifiant valide attendu pour la connexion
$motpasse_valide = "motpasse123"; // Mot de passe valide attendu pour la connexion

// Vérification des identifiants saisis par l'utilisateur
if ($_POST['identifiant'] == $identifiant_valide && $_POST['motpasse'] == $motpasse_valide) {
    // Si les identifiants sont corrects, les enregistrer dans la session
    $_SESSION['identifiant'] = $_POST['identifiant'];
    $_SESSION['motpasse'] = $_POST['motpasse'];

    // Affichage d'un message de bienvenue avec l'identifiant de l'utilisateur
    echo "<br>";
    echo "Bonjour, vous êtes connecté avec l'identifiant " . $_SESSION['identifiant'];
    echo "<br>";

    // Lien vers l'espace membre, accessible uniquement aux utilisateurs connectés
    echo "<a href='page_espace_membres.php'>Espace membres</a> <br> ";

} else {
    // Si les identifiants sont incorrects, afficher un message d'erreur
    echo "Désolé, l'identifiant ou le mot de passe ne sont pas valides !";
}
?>
