
<?php
function calcule($a, $operation, $b) {
    // Preparation pour les opérations
    if ($operation == "+") {
        return $a + $b;
    } elseif ($operation == "-") {
        return $a - $b;
    } elseif ($operation == "*") {
        return $a * $b;
    } elseif ($operation == "/") {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "Erreur : division par zéro !";
        }
    } elseif ($operation == "%") {
        if ($b != 0) {
            return $a % $b;
        } else {
            return "Erreur : modulo par zéro !";
        }
    } else {
        return "Opération non reconnue.";
    }
}

// Exemple :
$resultat = calcule(10, "+", 5);
echo "Résultat : " . $resultat;
?>
