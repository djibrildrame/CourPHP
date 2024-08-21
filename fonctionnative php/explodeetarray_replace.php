<?php

// Déclaration de deux tableaux associatifs
$tab1 = array("a" => "Paris", "b" => "Lyon");
$tab2 = array("a" => "Toulouse", "c" => "Strasbourg", "d" => "Colmar");

echo "Tableau de départ tab1 <br>";
// Affiche les éléments du tableau $tab1
foreach ($tab1 as $cle => $value) {
    echo "$cle => $value <br>"; // Affiche la clé et la valeur pour chaque élément du tableau $tab1
}

echo "Tableau de départ tab2 <br>";
// Affiche les éléments du tableau $tab2
foreach ($tab2 as $cle => $value) {
    echo "$cle => $value <br>"; // Affiche la clé et la valeur pour chaque élément du tableau $tab2
}

// Fusion des tableaux $tab1 et $tab2 avec la fonction array_replace()
$tab_result = array_replace($tab1, $tab2);

// Affiche le résultat de la fusion des tableaux
echo "Tableau fusionné <br>";
foreach ($tab_result as $cle => $value) {
    echo "$cle => $value <br>"; // Affiche la clé et la valeur pour chaque élément du tableau fusionné $tab_result
}

?>
