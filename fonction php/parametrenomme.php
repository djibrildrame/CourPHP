<?php

// Déclaration de la fonction afficher
function afficher($nom, $prenom, $age, $isactive) {
    // Retourne une chaîne formatée avec les informations fournies
    return "Le nom est $nom, le prénom est $prenom, l'âge est $age et l'activité est " . ($isactive ? 'active' : 'inactive') . ".";
}

// Appel de la fonction afficher avec des arguments nommés
$info = afficher(age: 40, nom: "Dupont", prenom: "Mike", isactive: true);

// Affiche le résultat retourné par la fonction afficher
echo $info; // Affiche "Le nom est Dupont, le prénom est Mike, l'âge est 40 et l'activité est active."

?>
