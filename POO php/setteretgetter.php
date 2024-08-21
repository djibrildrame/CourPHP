<?php


class Geo {

// Déclaration des propriétés privées
private $nom;
private $dept;
private $region;
private $nbrhabit;

// Constructeur de la classe Geo
public function __construct($nom, $dept, $region, $nbrhabit) {
    // Utilisation des méthodes setters pour initialiser les propriétés
    $this->setNom($nom);
    $this->setDept($dept);
    $this->setRegion($region);
    $this->setNbrhabit($nbrhabit);
}

// Méthode pour définir la propriété $nom
public function setNom($nom) {
    $this->nom = $nom;
}

// Méthode pour définir la propriété $dept
public function setDept($dept) {
    $this->dept = $dept;
}

// Méthode pour définir la propriété $region
public function setRegion($region) {
    $this->region = $region;
}

// Méthode pour définir la propriété $nbrhabit
public function setNbrhabit($nbrhabit) {
    $this->nbrhabit = $nbrhabit;
}

// Méthodes getter pour récupérer les valeurs des propriétés
public function getNom() {
    return $this->nom;
}

public function getDept() {
    return $this->dept;
}

public function getRegion() {
    return $this->region;
}

public function getNbrhabit() {
    return $this->nbrhabit;
}
}
?>