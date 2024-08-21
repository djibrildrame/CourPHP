<?php 

// Inclusion du fichier contenant la définition de la classe Utilisateurs
require "Utilisateurs.php"; 

// Création d'une nouvelle instance de la classe Utilisateurs
$membre1 = new Utilisateurs;

// Initialisation des propriétés publiques de l'objet $membre1
$membre1->nom = "Lemercier"; // Définition du nom de l'utilisateur
$membre1->prenom = "Paul"; // Définition du prénom de l'utilisateur

// Affichage des propriétés de l'utilisateur
echo "Le nom de l'utilisateur1: " . $membre1->nom; // Affiche le nom de l'utilisateur
echo "<br>";
echo "Le prénom de l'utilisateur1: " . $membre1->prenom; // Affiche le prénom de l'utilisateur
echo "<br>";

// Appel des méthodes de l'objet $membre1 pour simuler la connexion et la déconnexion
$membre1->seConnecter(); // Appelle la méthode seConnecter() pour afficher un message de connexion
echo "<br>";
$membre1->seDeconnecter(); // Appelle la méthode seDeconnecter() pour afficher un message de déconnexion

?>
