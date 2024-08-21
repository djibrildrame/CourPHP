<?php 

$dep = 75;

// Utilisation de switch pour vérifier la valeur de $dep
switch ($dep) {
    case 34:
        echo "Herault";
        break;
    case 84:
        echo "Vaucluse";
        break;
    case 75:
        echo "Paris";
        break;
    case 78:
        echo "Yveline";
        break;
    case 59:
        echo "Nord";
        break;
    default:
        echo "Le département est différent du 34,84,75,78,59";
        break;
    // Si par exemple j'avais mis 13 en $dep, cela aurait affiché "Le département est différent du 34,84,75,78,59", 
    // car 13 ne correspond à aucun des cas spécifiés.
}

// Switch partie 2 

echo "<br>";
$var = "Pomme";

// Utilisation de switch pour vérifier la valeur de $var
switch ($var) {
    case 20:
        echo "La variable var est égale à 20"; 
        // Si j'avais mis var = 20, c'est cette condition qui serait appliquée.
        break;
    case "Pomme":
    case "Orange":
    case "Banane":
        echo "La variable var est un fruit";
        break;
    default:
        echo "La variable var n'est ni fruit ni égale à 20."; 
        // Si j'avais mis 100 par exemple, cette condition serait appliquée.
        break;
}

// Match

?>
