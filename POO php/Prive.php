<?php 

// Inclusion du fichier contenant la définition de la classe Heritage
require "heritage.php"; 

// Partie 1: Création d'une instance avec initialisation manuelle
$utilisateur1 = new Heritage(); 

// Initialisation des propriétés via la méthode publique initialiser()
$utilisateur1->setNom("Dupont");
$utilisateur1->setPrenom("Clara");
$utilisateur1->setAge(20);
$utilisateur1->setMail("Clara@gmail.com");

// Affichage des informations de l'utilisateur
echo $utilisateur1->recupererInfosUsers(); 

// Partie 2: Utilisation des Setter et Getters
$utilisateur1->setNom('Dubois');
$utilisateur1->setPrenom('Laurent');
$utilisateur1->setAge(10);
$utilisateur1->setMail('Laurentdubois@gmail.com');
$utilisateur1->setNote(17);

echo '<br>';
echo "Mon nom est : " . $utilisateur1->getNom() . '<br>'; 
echo "Mon prénom est : " . $utilisateur1->getPrenom() . '<br>'; 
echo "Mon âge est : " . $utilisateur1->getAge() . " ans<br>"; 
echo "Mon email est : " . $utilisateur1->getMail() . '<br>';

// Partie 3: Utilisation d'un constructeur pour initialiser les propriétés
$utilisateur2 = new Heritage("Drame", "Djibril", "djibril.drame96@gmail.com");

// Affichage des informations initialisées par le constructeur
echo '<br>';
echo $utilisateur2->getNom() . '<br>'; 
echo $utilisateur2->getPrenom() . '<br>'; 
echo $utilisateur2->getMail() . '<br>'; 

// Définir la note pour l'utilisateur via le setter
$utilisateur2->setNote(17);

// Affichage de la note via le getter
echo "Note de l'utilisateur : " . $utilisateur2->getNote() . '<br>'; 
