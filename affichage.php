<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Récupération des données</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        table th {
            background-color: #f2f2f2;
        }
        h3, h4 {
            font-family: Arial, sans-serif;
        }
    </style>
</head>

<body>

<?php 
$form = new PDO('mysql:host=localhost;dbname=webtoup', 'root', '');
$form->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$requete = "SELECT * FROM clients ORDER BY id_client ASC";
$result = $form->query($requete);

if(!$result){
    echo "La récupération des données a rencontré un problème.";
} else {
    $nbre_clients = $result->rowCount(); 
}
?>

<h3>Tous les clients</h3>
<h4>Il y a <?php echo $nbre_clients; ?> clients</h4>

<!-- Création du tableau avec les données récupérées -->
<table>
    <thead>
        <tr>
            <th>Numéro de client</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Âge</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Adresse Email</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Boucle pour afficher les données de chaque client dans une nouvelle ligne du tableau
        while($ligne = $result->fetch(PDO::FETCH_ASSOC)){
            echo "<tr>";
            echo "<td>" . $ligne['id_client'] . "</td>";
            echo "<td>" . $ligne['nom'] . "</td>";
            echo "<td>" . $ligne['prenom'] . "</td>";
            echo "<td>" . $ligne['age'] . "</td>";
            echo "<td>" . $ligne['adresse'] . "</td>";
            echo "<td>" . $ligne['ville'] . "</td>";
            echo "<td>" . $ligne['mail'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php
$result->closeCursor();
?>

</body>
</html>
