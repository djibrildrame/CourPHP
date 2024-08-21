<?php

// Calcul de la valeur absolue
echo abs(-45323); // abs() renvoie la valeur absolue d'un nombre, ici 45323
echo "<br>";

// Calcul du cosinus
echo cos(2 * M_PI); // cos() renvoie le cosinus de l'angle en radians, ici cos(2π) = 1
echo "<br>";

// Calcul du sinus
echo sin(M_PI/2); // sin() renvoie le sinus de l'angle en radians, ici sin(π/2) = 1
echo "<br>";

// Calcul de la tangente
echo tan(5 * M_PI / 3); // tan() renvoie la tangente de l'angle en radians
echo "<br>";

// Arrondissement au nombre entier supérieur
echo ceil(12.7); // ceil() arrondit un nombre à l'entier supérieur le plus proche, ici 12.7 devient 13
echo "<br>";

echo ceil(111.3); // Ici, 111.3 devient 112
echo "<br>";

// Arrondissement à l'entier inférieur
echo floor(15.8); // floor() arrondit un nombre à l'entier inférieur le plus proche, ici 15.8 devient 15
echo "<br>";

// Calcul de la racine carrée
echo sqrt(100); // sqrt() renvoie la racine carrée d'un nombre, ici sqrt(100) = 10
echo "<br>";

// Calcul de l'hypoténuse
echo hypot(5, 12); // hypot() calcule l'hypoténuse d'un triangle rectangle avec les longueurs des deux autres côtés, ici hypot(5, 12) = 13
echo "<br>";

// Arrondissement à un nombre de décimales spécifié
echo round(12.877665, 2); // round() arrondit un nombre à un certain nombre de décimales, ici 12.877665 devient 12.88 avec 2 décimales
echo "<br>";

// Génération d'un nombre aléatoire
echo rand(); // rand() génère un nombre aléatoire chaque fois que la page est actualisée
echo "<br>";

?>
