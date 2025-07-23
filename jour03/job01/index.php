<?php
// Création du tableau
$nombres = [200, 204, 173, 98, 171, 404, 459];

// Parcours du tableau
foreach ($nombres as $nombre) {
    if ($nombre % 2 == 0) {
        echo "$nombre est paire<br />";
    } else {
        echo "$nombre est impaire<br />";
    }
}
?> 
