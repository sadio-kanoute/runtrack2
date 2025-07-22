<?php
$largeur = 20;   // ← tu peux changer ici
$hauteur = 10;   // ← et ici


// affiche un rectangle de largeur $largeur et de hauteur $hauteur
// composé uniquement de caractères '*'
// il parcour boucle jusqua la taille indiquée dan les variables
// $largeur et $hauteur pour que sa soi moidifiable facilement
// et affiche un * pour chaque itération de la boucle interne
for ($i = 0; $i < $hauteur; $i++) {
    for ($j = 0; $j < $largeur; $j++) {
        echo "*";
    }
    echo "<br />";
}
?>
