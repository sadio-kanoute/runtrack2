<?php
$hauteur = 5; 


// I NOMBRE LIGNES // J NOMBRE ETOILES PAR LIGNE
for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br />";
}
?>
