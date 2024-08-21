<?php

// Déclaration d'un tableau associatif $user avec des informations sur un utilisateur
$user = array(
    "nom" => "Drame",
    "prenom" => "Djibril",
    "ville" => "Paris",
    "diplome" => "Bts"
);

echo "<pre>"; // Utilisation de la balise <pre> pour un affichage lisible des données

// Utilisation de var_dump() pour afficher la structure et le contenu du tableau $user
var_dump($user);

// Vérification de l'existence de la clé "nom" dans le tableau $user
if(array_key_exists("nom", $user)) {
    echo "La clé existe"; // Message affiché si la clé "nom" est présente dans le tableau
} else {
    echo "La clé n'existe pas"; // Message affiché si la clé "nom" n'est pas présente dans le tableau
}

echo "<br>"; // Ajout d'un saut de ligne HTML

// Vérification de l'existence de la valeur "Drame" dans le tableau $user
if (in_array("Drame", $user)) {
    echo "La valeur existe"; // Message affiché si la valeur "Drame" est présente dans le tableau
} else {
    echo "La valeur n'existe pas"; // Message affiché si la valeur "Drame" n'est pas présente dans le tableau
}

?>
