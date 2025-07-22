<?php
// Boucle de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    $estPremier = true;

    // Teste tous les nombres de 2 à i - 1
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            // Si on trouve un diviseur → pas un nombre premier
            $estPremier = false;
            break;
        }
    }

    // Si le nombre est premier, on l'affiche
    if ($estPremier) {
        echo $i . "<br />";
    }
}
?>
