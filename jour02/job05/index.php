<?php
// Boucle de 2 à 1000
for ($i = 2; $i <= 1000; $i++) {
    $estPremier = true;

    // Teste tous les nombres de 2 à i - 1
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j == 0) {
            // Si on trouve un diviseur → pas un nombre premier
            $estPremier = false;
            break;
        }
    }

    // Si le nombre est premier, on l'affiche
    if ($estPremier) {
        echo $i . "<br />";
    }

    /*
        Ici on fait une boucle principale ($i) qui va de 2 à 1000 :
        → à chaque tour, on suppose que $i est un nombre premier.

        Ensuite, on fait une boucle secondaire ($j) :
        → elle teste tous les nombres entre 2 et $i - 1 pour pas un faire division deyx deux meme nombres.
        → si un seul de ces nombres divise $i sans reste, alors $i n’est pas premier.

        Si aucun diviseur n’est trouvé :
        → $estPremier reste à true
        → donc on affiche $i avec un <br /> 

        Résultat final : tous les nombres premiers jusqu’à 1000 sont affichés proprement.
    */
}
?>
