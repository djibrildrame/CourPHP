<?php

// 1. Connexion à la base de données via PDO
$form = new PDO('mysql:host=127.0.0.1;dbname=webtoup', 'root', '');
// 2. Configuration de l'attribut PDO pour afficher les exceptions en cas d'erreur
$form->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// 3. Vérification si l'ID du client est fourni via le formulaire POST
if (isset($_POST['id_client']) && !empty($_POST['id_client'])) {

    // 4. Récupération de l'ID du client depuis le formulaire
    $id_client = $_POST['id_client'];

    // 5. Préparation de la requête SQL pour récupérer les informations du client en fonction de l'ID
    $requete = $form->prepare("SELECT * FROM clients WHERE id_client = :id_client");
    $requete->bindValue(':id_client', $id_client);
    $requete->execute();

    // 6. Récupération des données sous forme associative pour les afficher dans le formulaire
    $data = $requete->fetch(PDO::FETCH_ASSOC);

    // 7. Si aucune donnée n'est trouvée, afficher un message d'erreur
    if ($data === false) {
        echo "Aucun client trouvé avec cet ID.";
        exit();
    }

} elseif (isset($_POST['modif'])) {

    // 8. Traitement de la mise à jour après validation du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $age = $_POST['age'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $mail = $_POST['mail'];
    $id_client = $_POST['id_client'];

    // Préparation de la requête de mise à jour
    $requete = $form->prepare('UPDATE clients SET nom=:nom, prenom=:prenom, age=:age, adresse=:adresse, ville=:ville, mail=:mail WHERE id_client=:id_client');
    $requete->bindValue(':nom', $nom);
    $requete->bindValue(':prenom', $prenom);
    $requete->bindValue(':age', $age);
    $requete->bindValue(':adresse', $adresse);
    $requete->bindValue(':ville', $ville);
    $requete->bindValue(':mail', $mail);
    $requete->bindValue(':id_client', $id_client);

    // Exécution de la requête
    $result = $requete->execute();

    if (!$result) {
        echo "Un problème est survenu, les modifications n'ont pas été effectuées.";
    } else {
        echo "Vos modifications ont bien été effectuées !";
    }

} else {
    header('Location: form_modif_client.php'); // Redirection si aucun ID n'est fourni
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier vos coordonnées</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        td {
            padding: 10px;
            border: 1px solid #ddd;
        }
        input[type="text"], input[type="email"] {
            width: 98%;
            padding: 8px;
            margin: 4px 0;
            box-sizing: border-box;
        }
        input[type="reset"], input[type="submit"] {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="reset"]:hover, input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<?php if (isset($data)): ?>
<!-- 9. Formulaire affichant les informations actuelles du client récupérées de la base de données -->
<form action="modif_client.php" method="post">
    <fieldset>
        <legend><b>Modifier vos coordonnées</b></legend>

        <table>
            <tr>
                <td><label for="nom">Nom:</label></td>
                <td><input type="text" id="nom" name="nom" value="<?= htmlspecialchars($data['nom']) ?>"></td>
            </tr>
            <tr>
                <td><label for="prenom">Prénom:</label></td>
                <td><input type="text" id="prenom" name="prenom" value="<?= htmlspecialchars($data['prenom']) ?>"></td>
            </tr>
            <tr>
                <td><label for="age">Âge:</label></td>
                <td><input type="text" id="age" name="age" value="<?= htmlspecialchars($data['age']) ?>"></td>
            </tr>
            <tr>
                <td><label for="adresse">Adresse:</label></td>
                <td><input type="text" id="adresse" name="adresse" value="<?= htmlspecialchars($data['adresse']) ?>"></td>
            </tr>
            <tr>
                <td><label for="ville">Ville:</label></td>
                <td><input type="text" id="ville" name="ville" value="<?= htmlspecialchars($data['ville']) ?>"></td>
            </tr>
            <tr>
                <td><label for="mail">Adresse Email:</label></td>
                <td><input type="email" id="mail" name="mail" value="<?= htmlspecialchars($data['mail']) ?>"></td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <!-- Champ caché pour envoyer l'ID client -->
                    <input type="hidden" name="id_client" value="<?= htmlspecialchars($id_client) ?>">
                    <input type="reset" name="effacer" value="Effacer">
                    <input type="submit" name="modif" value="Valider">
                </td>
            </tr>
        </table>
    </fieldset>
</form>
<?php endif; ?>

</body>
</html>
