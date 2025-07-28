<?php
function occurrences($str, $char) {
    $nb_occurrences = 0;

    
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $char) {
            $nb_occurrences++;
        }
    }

    
    return "Le nombre d'occurrences de '$char' dans \"$str\" est : $nb_occurrences";
}

// Exemple :
$phrase = "Cristiano Ronaldo est une légende du football mondial.";
$char = "a";

echo occurrences($phrase, $char);
?>
