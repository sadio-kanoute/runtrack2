<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Formulaire POST</title>
</head>
<body>

<!-- Le formulaire POST -->
<form method="post" action="index.php">
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
if (!empty($_POST)) {
    $nbArguments = count($_POST); // je compte les arguments POST reçus
    echo "Le nombre d’arguments POST envoyés est : " . $nbArguments;
}
?>

</body>
</html>
