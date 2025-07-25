<?php

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";


// strlen($str) récupère la longueur totale de la chaîne.
// $i += 2 permet de prendre 1 caractère sur 2 (0, 2, 4, etc.)
for ($i = 0; $i < strlen($str); $i += 2) {

    // $str[$i] donne le caractère à la position $i
    // Ici, on affiche le caractère à l’index $i (donc un sur deux)
    echo $str[$i];
}

?>
