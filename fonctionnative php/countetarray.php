<?php

// Déclaration du tableau $info avec différentes valeurs
$info = ["Paris", 20, 5, "Lyon"];

// Utilisation de la fonction count() pour compter le nombre d'éléments dans le tableau $info
// echo count($info); // count() retourne le nombre d'éléments dans $info, ici 4

// Recherche de la valeur 20 dans le tableau $info
$cle = array_search(20, $info); // array_search() cherche la valeur 20 dans $info et retourne la clé associée, ici 1

// Vérification si la clé a été trouvée
if($cle) {
    echo $cle; // Affiche la clé si la valeur 20 est trouvée, ici 1
} else {
    echo "La valeur n'existe pas"; // Message affiché si la valeur 20 n'est pas trouvée
}

?>
