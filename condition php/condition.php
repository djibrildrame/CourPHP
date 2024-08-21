<?php 

// Condition 1

$a = 100;
$b = 200;
$c = 300;

// if ($a < $b) {
//     echo "La variable a est inférieure à la variable b";
// }
// Si $a était 300, $a serait supérieur à $b, donc l'instruction ne s'applique pas.

// Condition 2

// Ajout de else qui signifie "sinon"

if ($c < $b) {
    echo "La variable c est inférieure à la variable b";
} else {
    echo "La variable c n'est pas inférieure à b";
}

echo "<br>";

$note = 12;

if ($note > 10) {
    echo "Admis";
} else {
    echo "Non admis";
}
// Si $note était 9, l'instruction else "Non admis" s'appliquerait.

// Condition 3

$d = 12; 
$e = 20;

echo "<br>";
echo "<br>";

if ($d < $e) {
    echo "e est supérieur à d";
} elseif ($d > $e) {
    echo "d est supérieur à e";
    // Si $d était 40, cette condition s'appliquerait car $d(40) serait supérieur à $e(20).
} else {
    echo "d est égal à e";
    // Pour cette condition, il faut que $d soit égal à $e, donc $d doit être 20.
}

// Condition avec variable booléenne

$dossier_complet = true;

echo "<br>";

if ($dossier_complet) {
    echo "Inscription retenue";
} else {
    echo "Inscription non retenue";
    // Si $dossier_complet était false, else s'appliquerait.
}

// Condition multiple

echo "<br>";
$f = 100;
$g = 34;

if ($f < $g && $f % 2 == 0) {
    echo "La condition de if est vraie";
} else {
    echo "La condition de if n'est pas vraie";
}
// Pour que la première condition soit vraie, les deux calculs doivent être conformes. Avec ||, si une des conditions est vraie, l'instruction if s'appliquerait.

$nationalite = "France";
$age = 20;
$carteelection = true;

echo "<br>";

if ($nationalite == "France" && $age >= 18 && $carteelection) {
    echo "Vous pouvez voter";
} else {
    echo "Vous ne pouvez pas voter";
}
// Si $age était 17, la deuxième condition s'appliquerait car il faut être égal ou supérieur à 18.

$h = 10;
$i = 25;

echo "<br>";

if (($h > 5 && $h < 8) || ($i > 20 && $i < 50)) {
    echo "Condition globale est vraie";
} else {
    echo "Condition globale est fausse";
}

?>
