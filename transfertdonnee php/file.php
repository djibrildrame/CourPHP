<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Transfert fichier</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<!-- Le formulaire soumet les données à la même page -->
<form method="post" action="" enctype="multipart/form-data"> 
    <fieldset>
    <legend><b>Transfert fichier</b></legend>
    
    <p>
        <label for="fichier">Transfert de fichier:</label>
        <input id="fichier" type="file" name="fichier" >
    </p>

    <p>
        <input type="submit" name="fichier_transmis" value="VALIDER">
        <input type="reset" name="Effacer" value="EFFACER">
    </p>
    </fieldset>
</form>

<?php
// Vérifie si le formulaire a été soumis
if(isset($_POST['fichier_transmis'])){
    echo "<pre>";
    print_r($_FILES); // Affiche les informations sur le fichier transféré
    echo "</pre>";
}
?>

</body>
</html>
