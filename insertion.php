<?php


// ATTR_ERRMODE :
// Option PDO pour définir le mode de gestion des erreurs.

// ERRMODE_EXCEPTION :
// PDO lance une exception en cas d'erreur, permettant de gérer les erreurs via try-catch.

// ERRMODE_WARNING :
// PDO émet un avertissement en cas d'erreur, mais n'interrompt pas le script.

// ERRMODE_SILENT :
// PDO reste silencieux sur les erreurs, renvoie simplement des codes d'erreur. Mode par défaut.


// ÉTAPE 1 : Connexion à la base de données
// Connexion à la base de données MySQL en utilisant PDO
$form = new PDO('mysql:host=localhost;dbname=webtoup', 'root', '');

// ÉTAPE 2 : Configuration du mode de gestion des erreurs de PDO
// ERRMODE_EXCEPTION permet de lancer une exception en cas d'erreur
$form->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// ÉTAPE 3 : Vérification que le formulaire a été soumis
// On vérifie si l'utilisateur a cliqué sur le bouton "enregistrer" et soumis le formulaire
if(isset($_POST['enregistrer'])) {

    // ÉTAPE 4 : Récupération des données du formulaire
    // Chaque variable reçoit les données soumises par l'utilisateur
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $mail = $_POST['mail'];

    // ÉTAPE 5 : Validation des champs du formulaire
    // On vérifie que tous les champs ont bien été remplis avant de procéder
    if(!empty($nom) && !empty($prenom) && !empty($age) && !empty($adresse) && !empty($ville) && !empty($mail)) {
        
        // ÉTAPE 6 : Préparation de la requête d'insertion
        // Insertion sécurisée des données dans la table clients en utilisant des paramètres nommés
        $requete = $form->prepare('INSERT INTO clients(nom,prenom,age,adresse,ville,mail) VALUES (:nom, :prenom, :age, :adresse, :ville, :mail)');

        // ÉTAPE 7 : Liaison des valeurs du formulaire aux paramètres SQL
        // Chaque champ du formulaire est lié aux paramètres SQL via bindValue pour protéger contre les injections SQL
        $requete->bindValue(':nom', $nom);
        $requete->bindValue(':prenom', $prenom);
        $requete->bindValue(':age', $age);
        $requete->bindValue(':adresse', $adresse);
        $requete->bindValue(':ville', $ville);
        $requete->bindValue(':mail', $mail);

        // ÉTAPE 8 : Exécution de la requête d'insertion
        // La requête préparée est exécutée et on vérifie si elle a réussi
        $result = $requete->execute();

        // ÉTAPE 9 : Récupération du dernier ID inséré
        // Si l'insertion a réussi, on récupère l'ID du dernier enregistrement inséré
        $lastId = $form->lastInsertId();

        // ÉTAPE 10 : Gestion du succès ou de l'échec de l'insertion
        // Si la requête a échoué, on affiche un message d'erreur
        if(!$result) {
            echo "Un problème est survenu, l'enregistrement n'a pas été effectué.";
        } else {
            // Si l'insertion a réussi, on affiche une boîte de dialogue avec l'ID de l'utilisateur
            echo "<script type=\"text/javascript\">
                    alert('Vous êtes bien enregistré. Votre identifiant est: " . $lastId . "');
                  </script>";
        }
    } else {
        // Si tous les champs ne sont pas remplis, on affiche un message d'erreur
        echo "Tous les champs doivent être remplis.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'inscription</title>
</head>
<body>

    <!-- ÉTAPE 11 : Formulaire HTML -->
    <!-- Formulaire d'inscription avec les différents champs requis pour les coordonnées de l'utilisateur -->
    <h1>Formulaire d'inscription</h1>

    <form method="post" action="post">
        <fieldset>
            <legend>Vos coordonnées</legend>

            <table>
                <tr>
                    <td><label for="nom">Nom :</label></td>
                    <td><input type="text" id="nom" name="nom" size="50" required></td>
                </tr>

                <tr>
                    <td><label for="prenom">Prénom :</label></td>
                    <td><input type="text" id="prenom" name="prenom" size="50" maxlength="50" required></td>
                </tr>

                <tr>
                    <td><label for="age">Âge :</label></td>
                    <td><input type="number" id="age" name="age" required></td>
                </tr>

                <tr>
                    <td><label for="adresse">Adresse :</label></td>
                    <td><input type="text" id="adresse" name="adresse" size="50" maxlength="100" required></td>
                </tr>

                <tr>
                    <td><label for="ville">Ville :</label></td>
                    <td><input type="text" id="ville" name="ville" size="50" maxlength="50" required></td>
                </tr>

                <tr>
                    <td><label for="mail">Email :</label></td>
                    <td><input type="email" id="mail" name="mail" size="50" maxlength="50" required></td>
                </tr>

                <tr>
                    <td colspan="2" align="center">
                        <!-- Boutons pour soumettre ou réinitialiser le formulaire -->
                        <input type="submit" name="enregistrer" value="Envoyer">
                        <input type="reset" value="Réinitialiser">
                    </td>
                </tr>
            </table>

        </fieldset>
    </form>

</body>
</html>
