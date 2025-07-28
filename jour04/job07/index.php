<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Maison ASCII</title>
</head>
<body>

<form method="POST">
    Largeur : <input type="number" name="largeur" required><br>
    Hauteur : <input type="number" name="hauteur" required><br>
    <button type="submit">Construire</button>
</form>

<pre>
<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = intval($_POST['largeur']);
    $hauteur = intval($_POST['hauteur']);

    // TOIT
    for ($i = 0; $i < (int)($largeur / 2); $i++) {
        echo str_repeat(' ', (int)(($largeur / 2) - $i - 1));
        echo '/';
        echo str_repeat(' ', 2 * $i);
        echo '\\' . "\n";
    }

    // LIGNE SÉPARATRICE (au milieu)
    echo str_repeat('-', $largeur + 2) . "\n";

    // MURS
    for ($i = 0; $i < $hauteur; $i++) {
        echo '|';
        echo str_repeat(' ', $largeur);
        echo '|' . "\n";
    }

    // BASE
    echo '‾' . str_repeat('‾', $largeur) . '‾';
}
?>
</pre>

</body>
</html>
