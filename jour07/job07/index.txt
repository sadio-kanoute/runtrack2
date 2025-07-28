<?php
function gras($str) {
    // On divise la phrase en mots
    $mots = explode(" ", $str);
    $result = "";

    foreach ($mots as $mot) {
        if (ctype_upper(substr($mot, 0, 1))) {
            $result .= "<b>$mot</b> ";
        } else {
            $result .= "$mot ";
        }
    }

    return $result;
}

function cesar($str, $decalage = 2) {
    $result = "";
    $str = strtolower($str);

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        if (ctype_alpha($char)) {
            $code = ord($char) + $decalage;
            if ($code > ord('z')) {
                $code -= 26;
            }
            $result .= chr($code);
        } else {
            $result .= $char;
        }
    }

    return $result;
}

function plateforme($str) {
    $mots = explode(" ", $str);
    $result = "";

    foreach ($mots as $mot) {
        if (substr($mot, -2) == "me") {
            $result .= $mot . "_ ";
        } else {
            $result .= $mot . " ";
        }
    }

    return $result;
}

// TRAITEMENT FORMULAIRE
$resultat = "";
if (isset($_POST["str"]) && isset($_POST["fonction"])) {
    $str = $_POST["str"];
    $fonction = $_POST["fonction"];

    if ($fonction == "gras") {
        $resultat = gras($str);
    } elseif ($fonction == "cesar") {
        $resultat = cesar($str); 
    } elseif ($fonction == "plateforme") {
        $resultat = plateforme($str);
    }
}
?>

<!-- FORMULAIRE HTML -->
<form method="post">
    <label>Texte :</label>
    <input type="text" name="str" required>

    <label>Transformation :</label>
    <select name="fonction">
        <option value="gras">Gras (mots avec majuscules)</option>
        <option value="cesar">César (décalage lettres)</option>
        <option value="plateforme">Plateforme (_ pour les "me")</option>
    </select>

    <button type="submit">Transformer</button>
</form>

<!-- AFFICHAGE DU RÉSULTAT -->
<?php
if (!empty($resultat)) {
    echo "<p>Résultat : $resultat</p>";
}
?>
