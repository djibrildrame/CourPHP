<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulaire</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
<form method="post" action="traitementform.php"> 
    <!-- Le formulaire utilise la méthode POST pour envoyer les données à traitementform.php -->
<fieldset>
<legend>
    <b>Traitement du formulaire</b>
</legend>
<p>
    <label for="nom">Nom :</label>
    <!-- Champ de saisie pour le nom de l'utilisateur -->
    <input id="nom" type="text" name="nom" placeholder="Entrez votre nom" size="50">
</p>
<p>
    <label for="email">Adresse Mail :</label>
    <!-- Champ de saisie pour l'adresse email de l'utilisateur -->
    <input id="email" type="email" name="email" placeholder="Entrez votre email" size="50">
</p>
<p>
    <label for="profession">Profession :</label>
    <!-- Menu déroulant pour sélectionner la profession de l'utilisateur -->
    <select id="profession" name="profession">
        <option value="Enseignant">Enseignant</option>
        <option value="développeur web">développeur web</option>
        <option value="Ingenieur">Ingenieur</option>
        <option value="Commerce">Commerce</option>
    </select>
</p>

<p>
    <!-- Bouton pour soumettre le formulaire -->
    <input type="submit" name="Envoyer" value="VALIDER">
    <!-- Bouton pour réinitialiser le formulaire -->
    <input type="reset" name="Envoyer" value="EFFACER">
</p>
</fieldset>
</form>
</body>
</html>
