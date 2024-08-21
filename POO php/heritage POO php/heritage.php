<?php

// Définition d'une classe appelée 'Heritage'
class Heritage {

    // Propriétés privées
    private $nom; // Propriété privée pour stocker le nom de l'utilisateur
    private $prenom; // Propriété privée pour stocker le prénom de l'utilisateur
    private $age; // Propriété privée pour stocker l'âge de l'utilisateur
    private $mail; // Propriété privée pour stocker l'adresse mail de l'utilisateur

    public $note;

    // Déclaration des constantes pour référence
    const NREF_BASSE = 10;
    const NREF_HAUTE = 15;

    // Constructeur de la classe avec des valeurs par défaut pour éviter les erreurs
    public function __construct($nom = "", $prenom = "", $mail = "") {
        // Initialisation des propriétés via les setters
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMail($mail);
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
            $this->mail = $mail;
        } else {
            throw new Exception("L'adresse mail n'est pas valide.");
        }
    }

    // Getter pour le nom
    public function getNom() {
        return $this->nom;
    }

    // Getter pour le prénom
    public function getPrenom() {
        return $this->prenom;
    }

    // Getter pour l'email
    public function getMail() {
        return $this->mail;
    }

    // Getter et Setter pour l'âge
    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    // Getter et Setter pour la note
    public function setNote($note) {
        $this->note = $note;
    }

    public function getNote() {
        return $this->note;
    }

    // Méthode pour afficher les informations de l'utilisateur
    public function recupererInfosUsers() {
        return "Nom: " . $this->nom . "<br>" .
               "Prénom: " . $this->prenom . "<br>" .
               "Âge: " . $this->age . " ans<br>" .
               "Email: " . $this->mail . "<br>";
    }
}
