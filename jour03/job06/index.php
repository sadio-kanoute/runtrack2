<?php
$str = "Les choses que l'on possède finissent par nous posséder.";

$inverse = "";
$longueur = strlen($str);

for ($i = $longueur - 1; $i >= 0; $i--) {
    $inverse .= $str[$i];
}

echo $inverse;
?>
