<?php

$dep = 75;

// Utilisation de l'expression `match` pour vérifier la valeur de $dep
$result = match ($dep) {
    34 => "Herault",
    84 => "Vaucluse",
    75 => "Paris",
    78 => "Yveline",
    59 => "Nord",
    default => throw new Exception("Le département est différent du 34,84,75,78,59"),
};

echo $result;

?>
