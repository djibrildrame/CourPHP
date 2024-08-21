<?php

class Auteur extends Utilisateurs { // La classe Auteur hérite de la classe User
    private $avis; // Propriété spécifique à la classe Auteur
    private $note;

    // Le constructeur de la classe Auteur prend des arguments pour initialiser les propriétés héritées et celles spécifiques à Auteur
    public function __construct($nom, $prenom, $mail, $age = null, $note, $avis) {
        // Appel du constructeur de la classe parente (User) pour initialiser les propriétés héritées
        // Utilisation de parent::__construct() pour passer les paramètres au constructeur de la classe User
        parent::__construct($nom, $prenom, $mail, $age);

        // Après avoir appelé le constructeur de la classe parente, nous utilisons les setters pour les propriétés spécifiques à Auteur
        $this->setNote($note); // Méthode héritée de la classe User
        $this->setAvis($avis); // Méthode définie dans la classe Auteur
    }

    // Méthode spécifique à la classe Auteur pour se connecter
    public function seConnecter(){
       // Accès aux propriétés héritées en utilisant les getters de la classe parente
       echo "Je suis " . $this->getNom() . ' auteur de votre application, je peux donc me connecter';
    }

    // Setter pour la propriété avis
    public function setAvis($avis) {
        $this->avis = $avis;
    }

    // Getter pour la propriété avis
    public function getAvis() {
        return $this->avis;
    }
}

?>
