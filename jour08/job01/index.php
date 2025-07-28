<?php
session_start(); 


if (isset($_POST['reset'])) {
    $_SESSION['nbVisites'] = 0;
}

// Si la variable existe déjà, on l'incrémente, sinon on l'initialise
if (isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites']++;
} else {
    $_SESSION['nbVisites'] = 1;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites</title>
</head>
<body>

<h1>Nombre de visites : <?= $_SESSION['nbVisites'] ?></h1>

<form method="POST">
    <button type="submit" name="reset">Reset</button>
</form>

</body>
</html>
