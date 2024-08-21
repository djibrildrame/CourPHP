<?php
// On inclut le fichier contenant la définition de la classe Produit
require('produit.php');

// Création d'une instance de la classe Produit avec référence, nom et prix
$produit1 = new Produit('P1', 'Produit 1', 100);
$produit2 = new Produit('P2', 'Produit 2', 200);

// Affichage des informations du produit 1
echo "Produit 1 : Référence : " . $produit1->getReference() . ", Nom : " . $produit1->getName() . ", Prix avant remise : " . $produit1->getPrice() . "€, Prix après remise : " . $produit1->getPrixAvecRemise() . "€<br>";

// Affichage des informations du produit 2
echo "Produit 2 : Référence : " . $produit2->getReference() . ", Nom : " . $produit2->getName() . ", Prix avant remise : " . $produit2->getPrice() . "€, Prix après remise : " . $produit2->getPrixAvecRemise() . "€<br>";

// Modification de la remise pour tous les produits (car c'est une propriété statique)
Produit::setRemise(30); // La remise passe de 20% à 30%

// Affichage des informations après modification de la remise
echo "<br>Après modification de la remise :<br>";
echo "Produit 1, Prix après nouvelle remise : " . $produit1->getPrixAvecRemise() . "€<br>";
echo "Produit 2, Prix après nouvelle remise : " . $produit2->getPrixAvecRemise() . "€<br>";

?>
