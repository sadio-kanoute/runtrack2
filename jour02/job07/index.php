<?php
$hauteur = 5; // modifiable

for ($i = 1; $i <= $hauteur; $i++) {
    // espaces pour centrer
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;";
    }

    // étoiles
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }

    // nouvelle ligne
    echo "<br />";
}
?>
