<?php 

$pay_med = ["France", "Espagne", "Maroc", "Algérie", "Tunisie", "Italie"];

// Affiche un saut de ligne HTML pour la lisibilité
echo "<br>";

// Affiche le premier élément du tableau $pay_med
echo $pay_med[0]; // Affiche "France"

echo "<br>";

// Utilisation de la boucle foreach pour parcourir le tableau $pay_med
foreach ($pay_med as $pays) {
    echo $pays . "<br>";
}

// Résultat attendu avec foreach :
/*
France
Espagne
Maroc
Algérie
Tunisie
Italie
*/

echo "<br>";

// Détermine la taille du tableau $pay_med
$taille_tableau = count($pay_med);

// Utilisation de la boucle for pour parcourir le tableau $pay_med
for ($i = 0; $i < $taille_tableau; $i++) {
    echo $pay_med[$i] . "<br>";
}

// Résultat attendu avec for :
/*
France
Espagne
Maroc
Algérie
Tunisie
Italie
*/
?>
