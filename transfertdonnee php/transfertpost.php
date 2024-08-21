<?php

// Vérifie si le formulaire a été soumis en utilisant le bouton "Envoyer"
if(isset($_POST['Envoyer'])){ // Assurez-vous que 'Envoyer' correspond exactement au name du bouton

    // Vérifie si le champ 'nom' est vide
    if(empty($_POST['nom'])){
        // Affiche un message d'erreur si le champ 'nom' n'a pas été rempli
        echo "Veuillez saisir votre nom !";
    
    // Vérifie si le champ 'email' est vide ou si l'email n'est pas valide
    } elseif(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        // Affiche un message d'erreur si l'email est vide ou non valide
        echo "Veuillez saisir une adresse mail valide!";
    
    // Vérifie si le champ 'profession' est vide
    } elseif(empty($_POST['profession'])){
        // Affiche un message d'erreur si aucune profession n'a été sélectionnée
        echo "Veuillez saisir votre profession!";
    
    // Si tous les champs sont remplis correctement
    } else {
        // Récupère la valeur du champ 'nom'
        $nom = $_POST['nom'];
        
        // Récupère la valeur du champ 'email'
        $email = $_POST['email'];
        
        // Récupère la valeur du champ 'profession'
        $profession = $_POST['profession'];

        // Affiche les données récupérées
        echo "Le nom saisi est : $nom <br>";
        echo "L'email saisi est : $email <br>";
        echo "La profession saisie est : $profession <br>";
    }

// Si le formulaire n'a pas été soumis
} else {
    // Affiche un message indiquant que le formulaire doit être validé
    echo "Il faut valider votre formulaire !";
}

?>
