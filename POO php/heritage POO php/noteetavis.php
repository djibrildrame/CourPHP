<?php

require 'Auteur.php';

// Création d'un objet Auteur
$auteur = new Auteur("Dupont", "Clara", "clara@example.com", 25, 18, "Très bon livre !");

// Connexion de l'auteur
$auteur->seConnecter();

echo "<br>";

// Affichage des informations
echo "Nom : " . $auteur->getNom() . "<br>";
echo "Prénom : " . $auteur->getPrenom() . "<br>";
echo "Email : " . $auteur->getMail() . "<br>";
echo "Âge : " . $auteur->getAge() . "<br>";
echo "Note : " . $auteur->getNote() . "<br>";
echo "Avis : " . $auteur->getAvis() . "<br>";

?>
