<?php

$pays = array();

/* Pour les tableaux qui comportent plusieurs lignes pour une clé, on va faire en sorte comme ci-dessous */

// Ajouter des données dans le tableau multidimensionnel
$pays[0][0] = "France";
$pays[0][1] = "Paris";
$pays[0][2] = 80;

$pays[1][0] = "Canada";
$pays[1][1] = "Ottawa";
$pays[1][2] = 38;

$pays[2][0] = "Maroc";
$pays[2][1] = "Rabat";
$pays[2][2] = 40;

$pays[3][0] = "Espagne";
$pays[3][1] = "Madrid";
$pays[3][2] = 47;

// Utilisation de <pre> pour formater le tableau de manière lisible
echo "<pre>";
print_r($pays); // Affiche tout le tableau de manière lisible pour l'utilisateur

/* Affichage :
Array
(
    [0] => Array
        (
            [0] => France
            [1] => Paris
            [2] => 80
        )

    [1] => Array
        (
            [0] => Canada
            [1] => Ottawa
            [2] => 38
        )

    [2] => Array
        (
            [0] => Maroc
            [1] => Rabat
            [2] => 40
        )

    [3] => Array
        (
            [0] => Espagne
            [1] => Madrid
            [2] => 47
        )

)
*/

// Récupérer un élément spécifique du tableau
echo "<br>";
echo $pays[0][0]; // Affiche "France"

// Deuxième exemple : une manière plus simple de créer un tableau

$pays = array(
    array("France", "Paris", 80),
    array("Canada", "Ottawa", 38),
    array("Maroc", "Rabat", 40),
    array("Espagne", "Madrid", 47)
);

echo "<pre>";
print_r($pays); // Affiche tout le tableau

/* Affichage :
Array
(
    [0] => Array
        (
            [0] => France
            [1] => Paris
            [2] => 80
        )

    [1] => Array
        (
            [0] => Canada
            [1] => Ottawa
            [2] => 38
        )

    [2] => Array
        (
            [0] => Maroc
            [1] => Rabat
            [2] => 40
        )

    [3] => Array
        (
            [0] => Espagne
            [1] => Madrid
            [2] => 47
        )

)
*/

echo "<br>";
echo $pays[1][1]; // Affiche "Ottawa"

// Troisième exemple : tableau associatif multidimensionnel

$pays = array(
    array("Pays" => "France", "Capitale" => "Paris", "Population" => 80),
    array("Pays" => "Canada", "Capitale" => "Ottawa", "Population" => 38),
    array("Pays" => "Maroc", "Capitale" => "Rabat", "Population" => 40),
    array("Pays" => "Espagne", "Capitale" => "Madrid", "Population" => 47),
);

echo "<pre>";
print_r($pays); // Affiche tout le tableau associatif

/* Affichage :
Array
(
    [0] => Array
        (
            [Pays] => France
            [Capitale] => Paris
            [Population] => 80
        )

    [1] => Array
        (
            [Pays] => Canada
            [Capitale] => Ottawa
            [Population] => 38
        )

    [2] => Array
        (
            [Pays] => Maroc
            [Capitale] => Rabat
            [Population] => 40
        )

    [3] => Array
        (
            [Pays] => Espagne
            [Capitale] => Madrid
            [Population] => 47
        )

)
*/

// Récupérer un élément spécifique du tableau associatif
echo "<br>";
echo $pays[1]['Capitale']; // Affiche "Ottawa"

?>
