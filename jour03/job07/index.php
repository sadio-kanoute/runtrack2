<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";


$newStr = "";


for ($i = 0; $i < strlen($str) - 1; $i++) {
    // je prends le caractère suivant
    $newStr .= $str[$i + 1];
}

// à la fin je rajoute le premier caractère à la fin
$newStr .= $str[0];


echo $newStr;
?>
