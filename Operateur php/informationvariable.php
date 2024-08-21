<?php 

$q = 200;
$x = 200;
$y = 100;
$w = 200.0;
$z = "200";

// Utilisation de var_dump pour afficher les informations sur les variables et les résultats des opérations de comparaison

// Vérifie si $x est supérieur à 10
var_dump($x > 10); 
// Résultat : bool(true) parce que $x (200) est effectivement supérieur à 10

echo "<br>";

// Vérifie si $x est inférieur à 10
var_dump($x < 10); 
// Résultat : bool(false) parce que $x (200) n'est pas inférieur à 10

// Vérifie si $x est égal à $z (comparaison de valeur seulement)
var_dump($x == $z); 
// Résultat : bool(true) parce que $x (200) a la même valeur que $z ("200"), même si $z est une chaîne de caractères

echo "<br>";

// Vérifie si $x est identique à $z (comparaison de valeur et de type)
var_dump($x === $z); 
// Résultat : bool(false) parce que $x (200) est un entier et $z ("200") est une chaîne de caractères

echo "<br>";

// Utilisation de "!" pour vérifier si les valeurs sont différentes

// Vérifie si $x n'est pas égal à $z (comparaison de valeur seulement)
var_dump($x != $z); 
// Résultat : bool(false) parce que $x (200) et $z ("200") ont la même valeur

echo "<br>";

// Vérifie si $x n'est pas identique à $w (comparaison de valeur et de type)
var_dump($x !== $w); 
// Résultat : bool(true) parce que $x (200) est un entier et $w (200.0) est un flottant

echo "<br>";

// Utilisation de l'opérateur de comparaison "spaceship" (<=>) pour comparer les valeurs

// Compare $x et $y
echo $x <=> $y; 
// Résultat : 1 parce que $x (200) est supérieur à $y (100)

echo "<br>";

// Compare $y et $x
echo $y <=> $x; 
// Résultat : -1 parce que $y (100) est inférieur à $x (200)

echo "<br>";
echo "<br>";

// Compare $x et $q
echo $x <=> $q; 
// Résultat : 0 parce que $x (200) est égal à $q (200)

?>
