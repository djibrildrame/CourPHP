<?php 

// Définition de la classe Produit
class Produit {

    // Propriétés privées (elles sont spécifiques à chaque instance de Produit)
    private $reference;
    private $name;
    private $price;

    // Propriété statique (commune à toutes les instances de Produit)
    public static $remise = 20; // Remise appliquée à tous les produits

    // Le constructeur initialise les propriétés de l'objet lors de la création de l'instance
    public function __construct($reference, $name, $price) {
        // On utilise les setters pour attribuer les valeurs des propriétés
        $this->setReference($reference);
        $this->setName($name);
        $this->setPrice($price);
    }

    // Setter pour la propriété 'reference'
    public function setReference($reference) {
        // On affecte la valeur passée en paramètre à la propriété privée $reference
        $this->reference = $reference;
    }

    // Setter pour la propriété 'name'
    public function setName($name) {
        // On affecte la valeur passée en paramètre à la propriété privée $name
        $this->name = $name;
    }

    // Setter pour la propriété 'price'
    public function setPrice($price) {
        // On affecte la valeur passée en paramètre à la propriété privée $price
        $this->price = $price;
    }

    // Getter pour la propriété 'reference'
    public function getReference() {
        // On retourne la valeur de la propriété $reference
        return $this->reference;
    }

    // Getter pour la propriété 'name'
    public function getName() {
        // On retourne la valeur de la propriété $name
        return $this->name;
    }

    // Getter pour la propriété 'price'
    public function getPrice() {
        // On retourne la valeur de la propriété $price
        return $this->price;
    }

    // Méthode pour calculer le prix après application de la remise
    public function getPrixAvecRemise() {
        // On applique la remise (propriété statique) au prix du produit
        $prixRemise = $this->price - ($this->price * self::$remise / 100);
        return $prixRemise; // On retourne le prix après application de la remise
    }

    // Méthode statique pour modifier la remise (s'applique à tous les produits)
    public static function setRemise($nouvelleRemise) {
        // On modifie la valeur de la propriété statique $remise
        self::$remise = $nouvelleRemise;
    }
}

?>