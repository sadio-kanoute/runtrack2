<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <title>Maison ASCII dynamique</title>
    <style>
        body {
            font-family: monospace, monospace;
            padding: 20px;
            background: #f0f0f0;
            color: #333;
        }
        form {
            margin-bottom: 20px;
        }
        input[type="text"] {
            width: 70px;
            padding: 5px;
            font-size: 1rem;
            margin-right: 10px;
        }
        input[type="submit"] {
            padding: 5px 10px;
            font-size: 1rem;
            cursor: pointer;
        }
        pre {
            background: #fff;
            padding: 10px;
            border: 1px solid #ccc;
            display: inline-block;
            white-space: pre;
            line-height: 1.1;
        }
    </style>
</head>
<body>

<form method="post" action="">
    <label>Largeur : <input type="text" name="largeur" required /></label>
    <label>Hauteur : <input type="text" name="hauteur" required /></label>
    <input type="submit" value="Afficher la maison" />
</form>

<?php

function drawHouse($width, $height) {
    if ($width < 2 || $height < 2) {
        return "Largeur et hauteur doivent être >= 2";
    }
    $output = "";

    // Partie toit (triangle)
    // Hauteur du toit = hauteur totale - hauteur du corps
    // Le corps a hauteur $height, le toit aussi
    // On fait un toit en triangle équilatéral avec des espaces et underscores

    $roofHeight = $height;
    $halfWidth = intval($width / 2);

    // Le toit a $roofHeight lignes

    for ($i = 0; $i < $roofHeight; $i++) {
        // espaces avant le slash
        $spacesBefore = $halfWidth - $i;
        if ($spacesBefore < 0) $spacesBefore = 0;

        // espaces entre / et \
        $spacesMiddle = $i * 2;

        // Ligne 0 (sommet)
        if ($i == 0) {
            $output .= str_repeat(" ", $spacesBefore) . "^\n";
            continue;
        }

        // Ligne 1 (le premier _ si i==1)
        if ($i == 1) {
            $output .= str_repeat(" ", $spacesBefore) . "/" . str_repeat("_", 1) . "\\\n";
            continue;
        }

        // Ligne suivante: on met des underscores au milieu (2*i-1)
        $output .= str_repeat(" ", $spacesBefore) . "/" . str_repeat("_", $spacesMiddle - 1) . "\\\n";
    }

    // Corps de la maison : rectangle largeur x hauteur

    // Corps a 2 côtés verticaux |...|, largeur de base = largeur totale

    // Largeur intérieure = $width (mais faut gérer que le toit fait +/- la moitié)

    // Affiche le corps avec des | au bord et espaces dedans sauf dernière ligne avec underscores

    for ($j = 0; $j < $height; $j++) {
        if ($j == $height - 1) {
            // dernière ligne = plancher en underscores
            $output .= "|" . str_repeat("_", $width) . "|\n";
        } else {
            $output .= "|" . str_repeat(" ", $width) . "|\n";
        }
    }

    return $output;
}

if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    $largeur = intval($_POST['largeur']);
    $hauteur = intval($_POST['hauteur']);

    if ($largeur <= 0 || $hauteur <= 0) {
        echo "<p style='color:red;'>Largeur et hauteur doivent être des nombres positifs.</p>";
    } else {
        echo "<pre>" . drawHouse($largeur, $hauteur) . "</pre>";
    }
}

?>

</body>
</html>
