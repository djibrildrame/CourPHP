<?php

// Déclaration de la fonction suite1
function suite1($min, $max, $pas) {
    // Boucle for pour générer une suite de nombres avec un pas spécifié
    for ($i = $min; $i <= $max; $i += $pas) {
        yield $i; // Génère la valeur actuelle de $i
    }
}

// Appel de la fonction suite1 avec les paramètres 10, 100, et 5
$result = suite1(10, 100, 5);

// Parcourt chaque valeur générée par la fonction suite1
foreach ($result as $nb) {
    echo $nb . ","; // Affiche chaque nombre suivi d'une virgule
}

?>
