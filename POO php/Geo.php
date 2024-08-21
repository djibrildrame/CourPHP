<?php

require "setteretgetter.php";

// Création d'une nouvelle instance de la classe Geo
$utilisateur1 = new Geo("Paris","Seine Saint Denis","Île de France","12 millions"); 

// Initialisation des propriétés en utilisant les setters
$utilisateur1->setNom("Paris");
$utilisateur1->setDept("Seine Saint Denis");
$utilisateur1->setRegion("Île de France");
$utilisateur1->setNbrhabit("12 millions");

// Utilisation des getters pour afficher les informations
echo "Ma ville est " . $utilisateur1->getNom() . ", et je suis du département de " . $utilisateur1->getDept() . ", de la région " . $utilisateur1->getRegion() . ", où il y a " . $utilisateur1->getNbrhabit() . " habitants.";

?>
