<?php

// Définition d'une classe appelée 'User'
class User {

    // Propriétés privées et publiques
    private $nom; // Propriété privée pour stocker le nom de l'utilisateur
    private $prenom; // Propriété privée pour stocker le prénom de l'utilisateur
    private $age; // Propriété privée pour stocker l'âge de l'utilisateur
    private $mail; // Propriété privée pour stocker l'adresse mail de l'utilisateur

    public $note;

    // Déclaration des constantes pour référence
    const NREF_BASSE = 10;
    const NREF_HAUTE = 15;

    // Constructeur de la classe
    public function __construct($nom, $prenom, $mail) {
        // Initialisation des propriétés via les setters
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail); // Correction ici : appel de la méthode setMail() correctement
    }

    // Setter pour la propriété 'nom'
    public function setNom($nom) {
        $this->nom = $nom;
    }

    // Setter pour la propriété 'prenom'
    public function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    // Setter pour la propriété 'mail'
    public function setMail($mail) {
        // Validation de l'email avant de l'assigner
        if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $this->mail = $mail; // Si l'email est valide, on l'assigne à la propriété mail
        } else {
            throw new Exception("L'adresse mail n'est pas valide."); // Lance une exception si l'email est invalide
        }
    }

    // Méthode pour afficher les informations de l'utilisateur
    public function afficherInfos() {
        echo "Nom : " . $this->nom . "<br>";
        echo "Prénom : " . $this->prenom . "<br>";
        echo "Email : " . $this->mail . "<br>";
    }
}
