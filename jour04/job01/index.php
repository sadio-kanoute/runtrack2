<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire GET</title>
</head>
<body>

<!-- Le formulaire GET -->
<form method="get">
  <label>Prénom :</label>
  <input type="text" name="prenom"><br><br>

  <label>Nom :</label>
  <input type="text" name="nom"><br><br>

  <label>Email :</label>
  <input type="text" name="email"><br><br>

  <input type="submit" value="Envoyer">
</form>

<?php
// je vérifie si des données ont été envoyées
if (!empty($_GET)) {
    $nbArguments = count($_GET); // je compte les arguments GET reçus
    echo "Le nombre d’argument GET envoyé est : " . $nbArguments;
}
?>

</body>
</html>
