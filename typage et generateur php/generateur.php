<?php

// Déclaration de la fonction suite
function suite($num) {
    $i = 1; // Initialise le compteur à 1
    while ($i < $num) {
        yield $i++; // Génère la valeur actuelle de $i, puis incrémente $i
    }
    yield $i; // Génère la valeur finale de $i (qui sera égale à $num)
}

echo "La suite: "; // Affiche le texte "La suite:"
$result = suite(20); // Appel de la fonction suite avec le paramètre 20

// Parcourt chaque valeur générée par la fonction suite
foreach ($result as $nb) {
    echo $nb . ","; // Affiche chaque nombre suivi d'une virgule
}

?>
