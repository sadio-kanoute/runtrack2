<?php
// Création du tableau
$nombres = [200, 204, 173, 98, 171, 404, 459];

/*Parcours du tableau pour chauque element du tableau genre premier tour nombre 
prend un valeur du tableau fait la condition et reprete avec un autre element*/
foreach ($nombres as $nombre) {
    if ($nombre % 2 == 0) {
        echo "$nombre est paire<br />";
    } else {
        echo "$nombre est impaire<br />";
    }
}
?> 
