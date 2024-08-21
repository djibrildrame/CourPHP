<?php

// Déclaration de la fonction calculer_prix
function calculer_prix($prixht, $tax = 20) {
    // Calcule le prix TTC en ajoutant la taxe au prix HT
    $prixttc = $prixht * (1 + $tax / 100);

    // Retourne le prix TTC
    return $prixttc;
}

// Appel de la fonction calculer_prix avec un prix HT de 100
$prix_produit1 = calculer_prix(100);

// Affiche le prix TTC du produit
echo $prix_produit1; // Affiche 120

echo "<br>";

// Déclaration de la fonction display_names
function display_names($prenom, $nom = "Mercier") {
    // Vérifie si le nom n'est pas "Mercier"
    if ($nom != "Mercier") {
        // Affiche le prénom et le nom si le nom est différent de "Mercier"
        echo "Votre nom est $nom et votre prénom est $prenom";
        echo "<br>";
    } else {
        // Affiche seulement le prénom si le nom est "Mercier"
        echo "Votre prénom est $prenom";
    }
}

// Appel de la fonction display_names avec les arguments "Martine" et "Dupont"
display_names("Martine", "Dupont"); // Affiche "Votre nom est Dupont et votre prénom est Martine"

// Appel de la fonction display_names avec seulement l'argument "Martine"
display_names("Martine"); // Affiche "Votre prénom est Martine" car le nom par défaut est "Mercier"

?>
