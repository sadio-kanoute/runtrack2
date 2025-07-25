<?php

for ($i = 0; $i <= 1337; $i++) {

    // Si le nombre (! sa veut dire genre contraire)n'est PAS égal à 26, 37, 88, 1111 ou 3233. && c'est un ET logique
    if ($i != 26 && $i != 37 && $i != 88 && $i != 1111 && $i != 3233) {
        echo $i . "<br />";
    }
}
?>
