<?php

if(isset($_POST['Envoyer'])){ // Assurez-vous que 'Envoyer' correspond exactement au name du bouton

    if(empty($_POST['nom'])){
        echo "Veuillez saisir votre nom !";
    } elseif(empty($_POST['email'])){
        echo "Veuillez saisir votre adresse mail!";
    } elseif(empty($_POST['profession'])){
        echo "Veuillez saisir votre profession!";
    } else {
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $profession = $_POST['profession'];

        echo "Le nom saisi est : $nom <br>";
        echo "L'email saisi est : $email <br>";
        echo "La profession saisie est : $profession <br>";
    }

} else {
    echo "Il faut valider votre formulaire !";
}

?>
