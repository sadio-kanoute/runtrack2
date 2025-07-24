<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Maison ASCII</title>
    <style>
        pre {
            font-family: monospace;
            line-height: 1;
        }
    </style>
</head>
<body>
    <form method="post">
        Largeur : <input type="text" name="largeur" required />
        Hauteur : <input type="text" name="hauteur" required />
        <button type="submit">Afficher maison</button>
    </form>

    <pre>
<?php
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = (int) $_POST['largeur'];
    $hauteur = (int) $_POST['hauteur'];

    // Limite pour pas trop casser la mise en page
    if ($largeur < 2) $largeur = 2;
    if ($hauteur < 1) $hauteur = 1;

    // Dessin du toit (triangle)
    for ($i = 1; $i <= $hauteur; $i++) {
        // espaces avant le toit pour centrer
        echo str_repeat(' ', $hauteur - $i);

        // dessin du toit avec / et \
        echo '/';
        if ($i == 1) {
            echo '^';
        } else {
            echo str_repeat('_', 2 * $i - 3);
        }
        echo '\\' . "\n";
    }

    // Dessin du corps (rectangle)
    for ($j = 0; $j < $largeur; $j++) {
        if ($j == 0 || $j == $largeur - 1) {
            echo '|';
        } else {
            echo ' ';
        }
    }
    echo "\n";

    for ($k = 1; $k < $hauteur; $k++) {
        echo '|';
        echo str_repeat(' ', $largeur - 2);
        echo "|\n";
    }

    for ($j = 0; $j < $largeur; $j++) {
        echo '-';
    }
    echo "\n";
}
?>
    </pre>
</body>
</html>
