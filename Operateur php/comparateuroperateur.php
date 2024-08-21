<?php 

$var = null; 

// Utilisation de var_dump pour afficher les informations sur la variable $var

var_dump($var); 
// Résultat : NULL parce que $var est défini comme null

echo "<br>";

$s = 1000;
$p = "prenom";

// Utilisation de l'opérateur de coalescence nulle (??)

// L'opérateur ?? retourne la première valeur qui n'est pas null

echo $s ?? $var; 
// Résultat : 1000 parce que $s est défini et n'est pas null
echo "<br>";

echo $s ?? $p; 
// Résultat : 1000 parce que $s est défini et n'est pas null
echo "<br>";

echo $var ?? $p; 
// Résultat : "prenom" parce que $var est null, donc il retourne $p qui est "prenom"

?>
