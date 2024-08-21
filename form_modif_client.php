<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero client</title>
</head>
<body>
    <form action="modif_client.php" method="post">

    <fieldset>

<legend>Saisissez votre identifiant client pour modifier vos coordonnées</legend>

<table>
<tr>
<td>Code client:</td> 
<td><input type="text" name="id_client" size="20" maxlength="10" /></td>
</tr>
<tr>
<td>Modifier:</td> 
<td><input type="submit" name="<?=$data['id_client']?>" value="Modifier" size="20" maxlength="10" /></td>
</tr>
</table>

    </fieldset>

    </form>
</body>
</html>