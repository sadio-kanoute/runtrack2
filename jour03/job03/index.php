<?php
$voyelles = "aeiouyAEIOUY";
$str = "I'm sorry Dave I'm afraid I can't do that.";

for ($i = 0; $i < strlen($str); $i++) {
    // Si le caractère $str[$i] est présent dans la chaîne $voyelles
    // alors strpos() retourne sa position (index), sinon false
    if (strpos($voyelles, $str[$i]) !== false) {
        echo $str[$i];
    }
}
?>
