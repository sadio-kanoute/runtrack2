<?php
$str = "Dans l'espace, personne ne vous entend crier";
$compteur = 0;
//compteur commence à 0 et parcours la chaîne de caractères que i qui prend la valeur de 0 jusqu'à la longueur de la chaîne
//à chaque itération, on incrémente le compteur de 1
// on ajoute 1  a i a chaque itération jusqu'à ce que i soit égal à la longueur de la chaîne quont onbtien grace a strlen($str)
for ($i = 0; $i < strlen($str); $i++) {
    $compteur++;
}

echo "La chaîne contient $compteur caractères.";
?>
