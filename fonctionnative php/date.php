<?php

// Obtient la date actuelle au format "jour/mois/année"
$date = date("d/m/Y"); // "d" pour le jour, "m" pour le mois, "Y" pour l'année en quatre chiffres

// Obtient l'heure actuelle au format "heures:minutes:secondes"
$heure = date("H:i:s"); // "H" pour les heures (24h), "i" pour les minutes, "s" pour les secondes

// Affiche la date actuelle
echo $date;
echo "<br>"; // Saut de ligne HTML

// Affiche l'heure actuelle
echo $heure;

echo "<br>"; // Saut de ligne HTML

// Obtient toutes les informations de date et d'heure actuelles
$aujourdhui = getdate(); 

// Formatage pour une sortie lisible du tableau $aujourdhui
echo "<pre>"; 

// Affiche toutes les informations de date et d'heure sous forme de tableau
print_r($aujourdhui);

?>
