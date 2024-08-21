<?php

// Définition d'une classe appelée 'Utilisateurs'
class Utilisateurs {

    // Propriétés privées et publiques
    public $nom; // Propriété privée pour stocker le nom de l'utilisateur, inaccessible directement en dehors de la classe
    public $prenom; // Propriété publique pour stocker le prénom de l'utilisateur
    public $age; // Propriété publique pour stocker l'âge de l'utilisateur
    public $mail; // Propriété publique pour stocker l'adresse mail de l'utilisateur

    // Méthode publique pour simuler la connexion d'un utilisateur
    public function seConnecter() {
        // Affiche un message lorsque l'utilisateur se connecte
        echo "Je suis inscrit sur votre site web, je peux donc me connecter"; 
    }

    // Méthode publique pour simuler la déconnexion d'un utilisateur
    public function seDeconnecter() {
        // Affiche un message lorsque l'utilisateur se déconnecte
        echo "J'ai le droit de me déconnecter à tout moment";
    }

    // Méthode publique pour initialiser la propriété privée 'nom'
    public function initialiseNom($nom) {
        // Utilise $this pour accéder à la propriété privée $nom et la définir
        $this->nom = $nom;    
    }

    // Méthode publique pour récupérer et afficher la propriété privée 'nom'
    public function recupererNom() {
        // Affiche la valeur de la propriété privée $nom
        echo "Nom : " . $this->nom; 
    }
}

/*
$utilisateur1 = new Utilisateurs(); // Création d'une nouvelle instance de la classe 'Utilisateurs'

// Erreur dans l'accès direct à une propriété privée
// $utilisateur1->nom = "Dupont"; // Ne fonctionnera pas car $nom est privé

// Utilisation de la méthode publique pour initialiser la propriété privée 'nom'
$utilisateur1->initialiseNom("Dupont");

// Affiche le prénom de l'utilisateur (accès direct car $prenom est public)
$utilisateur1->prenom = "Luc"; 

// Correction de l'erreur, ici on assigne l'âge correct (par exemple 35)
$utilisateur1->age = 35;

// Affichage du nom de l'utilisateur via la méthode publique
echo "Le nom de l'utilisateur1: ";
$utilisateur1->recupererNom(); // Affiche "Nom : Dupont"
echo "<br>";

// Affichage du prénom de l'utilisateur
echo "Le prénom de l'utilisateur1: " . $utilisateur1->prenom;
*/

?>
