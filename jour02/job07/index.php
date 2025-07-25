<?php
$hauteur = 5; 

// Boucle sur chaque ligne (de 1 jusqu'à la hauteur)
for ($i = 1; $i <= $hauteur; $i++) {

    // Ajouter des espaces pour centrer les étoiles
    // Exemple : ligne 1 → 4 espaces, ligne 2 → 3 espaces, etc.
    for ($j = 1; $j <= $hauteur - $i; $j++) {
        echo "&nbsp;"; // &nbsp; = espace insécable en HTML
    }

    //  Afficher les étoiles
    // Formule pour nombre d'étoiles : 2 * $i - 1
    // Ligne 1 → 1 étoile, ligne 2 → 3, ligne 3 → 5, etc.
    for ($k = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
    }


    echo "<br />";
}

?>

