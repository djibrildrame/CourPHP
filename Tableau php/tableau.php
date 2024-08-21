<?php 

$prenoms = array('Emma', 'Alice', 'Lina', 'Mouhammed', 'Thomas');

// Affiche le type de la variable $prenoms (array)
echo gettype($prenoms); // Affiche "array"
echo "<br>";

// Affiche l'élément à l'index 0 du tableau $prenoms
echo $prenoms[0]; // Affiche "Emma"
echo "<br>";

// Affiche tout le tableau $prenoms
print_r($prenoms); // Affiche Array ( [0] => Emma [1] => Alice [2] => Lina [3] => Mouhammed [4] => Thomas )
echo "<br>";

// Ajoute des éléments "Clara", "Amine", "Jean-Marcel" au tableau $prenoms
array_push($prenoms, "Clara", "Amine", "Jean-Marcel");

// Affiche le tableau $prenoms après ajout de nouveaux éléments
print_r($prenoms); // Affiche Array ( [0] => Emma [1] => Alice [2] => Lina [3] => Mouhammed [4] => Thomas [5] => Clara [6] => Amine [7] => Jean-Marcel )
echo "<br>";

// Deuxième exemple avec des clés négatives

// Assigne des valeurs avec des clés négatives au tableau $liste_achat
$liste_achat[-3] = "Poisson";
$liste_achat[-15] = "Viande";
$liste_achat[-10] = "Poisson";
$liste_achat[-9] = "Poisson";

// Affiche le tableau $liste_achat avec des clés négatives
print_r($liste_achat); // Affiche Array ( [-3] => Poisson [-15] => Viande [-10] => Poisson [-9] => Poisson )
echo "<br>";

// Ajoute des éléments "Frites", "Eau", "Fleurs" au tableau $liste_achat
array_push($liste_achat, "Frites", "Eau", "Fleurs");

// Affiche le tableau $liste_achat après ajout de nouveaux éléments
print_r($liste_achat);
/*
Affiche Array ( [-3] => Poisson [-15] => Viande [-10] => Poisson [-9] => Poisson [-2] => Frites [-1] => Eau [0] => Fleurs )
*/

echo "<br>";

// Exemple avec tableau associatif

// Crée un tableau associatif $info_users
$info_users = array(
    "Nom" => "Strock",
    "Prenom" => "Alice",
    "Profession" => "Enseignant",
    "Ville" => "Paris",
    "CP" => 75000,
    "Diplome" => "Doctorat",
    "Experience" => 30
);

// Affiche tout le tableau associatif $info_users
print_r($info_users); // Affiche Array ( [Nom] => Strock [Prenom] => Alice [Profession] => Enseignant [Ville] => Paris [CP] => 75000 [Diplome] => Doctorat [Experience] => 30 )
echo "<br>";

// Affiche la valeur de la clé "Prenom" du tableau associatif $info_users
echo $info_users['Prenom']; // Affiche "Alice"

?>
