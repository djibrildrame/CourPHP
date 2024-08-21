<?php

// Déclaration de la fonction calculer5 avec un paramètre passé par référence
function calculer5(&$x) {
    // Calcule le produit de $x par 5
    $x = $x * 5;

    // Affiche le produit obtenu
    echo "Le produit obtenu est $x";
}

$x = 100;

// Appel de la fonction calculer5 avec la variable $x
calculer5($x);

echo "<br>";

// Affiche la valeur de $x après l'appel de la fonction
echo $x; // Affiche 500
// Le fait que j'ai mis & en haut permet de modifier $x directement dans la fonction
// Sinon, cela aurait affiché 100, car sans & le changement de $x dans la fonction ne serait pas reflété en dehors de la fonction

?>
