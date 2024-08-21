<?php 

$a = 5;
$b = 10;

// Incrémentation et décrémentation des valeurs

// Décrémenter $a avant de l'afficher
echo --$a; 
// Résultat : 4 parce que $a (5) est décrémenté de 1 avant l'affichage

echo "<br>";

// Incrémenter $b avant de l'afficher
echo ++$b; 
// Résultat : 11 parce que $b (10) est incrémenté de 1 avant l'affichage

echo "<br>";

// Combiner décrémentation et incrémentation dans une expression
echo --$a * ++$b; 
// Résultat : 4 * 12 = 48
// Explication : 
// - $a est décrémenté de 1 (passant de 4 à 3) avant la multiplication
// - $b est incrémenté de 1 (passant de 11 à 12) avant la multiplication
// - Donc, 3 * 12 = 36

echo "<br>";

// Deuxième exemple : incrémenter plusieurs fois une variable

$d = 4;

// Incrémenter $d de 1 (total 5)
$d++;

// Incrémenter $d de 1 (total 6)
$d++;

// Incrémenter $d de 1 (total 7)
$d++;

// Incrémenter $d de 1 (total 8)
$d++;

// Afficher la valeur finale de $d
echo $d; 
// Résultat : 8 parce que $d a été incrémenté 4 fois depuis 4, donc 4 + 4 = 8

?>
