<?php

// Déclaration de la fonction afficher_nombres
function afficher_nombres(...$nombres) {
    // Parcourt chaque nombre passé en argument
    foreach ($nombres as $nombre) {
        // Affiche le nombre suivi d'un saut de ligne
        echo $nombre;
        echo "<br>";
    }
}

// Appel de la fonction afficher_nombres avec une série de nombres
afficher_nombres(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

echo "<br>";

// Déclaration de la fonction somme_nombres
function somme_nombres(...$valeurs) {
    // Calcule la somme des valeurs passées en argument et retourne le résultat
    return array_sum($valeurs);
}

// Appel de la fonction somme_nombres avec une série de nombres et stockage du résultat dans $total
$total = somme_nombres(10, 20, 30, 40, 50);

// Affiche le résultat de la somme des nombres
echo $total; // Affiche 150

?>
