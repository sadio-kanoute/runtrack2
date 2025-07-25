<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

// chaîne inversée
$inverse = "";


$longueur = strlen($str); 

// Boucle qui part de la fin vers le début
for ($i = $longueur - 1; $i >= 0; $i--) {
    // On ajoute chaque caractère (en partant de la fin) dans $inverse
    $inverse .= $str[$i];
}


echo $inverse;
?>
