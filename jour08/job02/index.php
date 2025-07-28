<?php
session_start(); 

//  RESET 
if (isset($_POST['reset'])) {
    
    $_SESSION['nbVisites'] = 0;

    // Supprimer cookies
    setcookie('lastVisit', '', time() - 3600);
}

//  SESSION 
if (isset($_SESSION['nbVisites'])) {
    $_SESSION['nbVisites']++;
} else {
    $_SESSION['nbVisites'] = 1;
}

//  COOKIE "lastVisit" 
$date = date('d/m/Y à H:i:s');
setcookie('lastVisit', $date, time() + 3600 * 24); // 1 jour

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Session & Cookies</title>
</head>
<body>

<h1> Compteur de Visites</h1>
<p>Tu as visité cette page <strong><?= $_SESSION['nbVisites'] ?></strong> fois pendant cette session.</p>

<?php if (isset($_COOKIE['lastVisit'])): ?>
    <p> Ta dernière visite date du : <strong><?= $_COOKIE['lastVisit'] ?></strong></p>
<?php else: ?>
    <p> Première visite détectée.</p>
<?php endif; ?>

<h2> Cookies détectés :</h2>
<?php
if (!empty($_COOKIE)) {
    echo "<ul>";
    foreach ($_COOKIE as $key => $value) {
        echo "<li><strong>$key</strong> : $value</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Aucun cookie trouvé.</p>";
}
?>

<form method="POST">
    <button type="submit" name="reset"> Reset</button>
</form>

</body>
</html>
