<?php

//  boucle et incrementation de 0 à 100
for ($i = 0; $i <= 100; $i++) {

    if ($i == 42) {
        // Remplace 42 par "La Plateforme_"
        echo "La Plateforme_<br />";
    } 
    else if ($i >= 0 && $i <= 20) {
        // Nombres entre 0 et 20 en italique
        echo "<i>$i</i><br />";
    } 
    else if ($i >= 25 && $i <= 50) {
        // Nombres entre 25 et 50 en souligné
        echo "<u>$i</u><br />";
    } 
    else {
        // Tous les autres nombres s'affichent normalement
        echo "$i<br />";
    }
}
?>
