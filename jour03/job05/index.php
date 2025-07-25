<?php
// Création de la variable $str avec le texte demandé
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";

// Création d'un dictionnaire associatif avec les clés "voyelles" et "consonnes"
$dic = [ 
    "voyelles" => 0,
    "consonnes" => 0
];

// strtolower() → transforme tout en minuscules pour simplifier les comparaisons
$str = strtolower($str);

// Parcours de chaque caractère
for ($i = 0; isset($str[$i]); $i++) {
    $char = $str[$i];

    // Vérifie si c'est une lettre (pas un espace, une ponctuation, etc.)
    if (ctype_alpha($char)) {

        // Si la lettre est dans le tableau des voyelles
        if (in_array($char, ['a', 'e', 'i', 'o', 'u', 'y'])) {
            $dic["voyelles"]++; // On compte comme voyelle
        } else {
            $dic["consonnes"]++; // Sinon c’est une consonne
        }
    }
}
?>

<!-- Affichage HTML -->
<table border="1">
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <!-- <?= ... ?> est la version courte de <?php echo ... ?> -->
            <!-- Les deux lignes ci-dessous font la même chose : -->

            <td><?= $dic["voyelles"] ?></td> <!-- version courte -->

            <td><?php echo $dic["consonnes"]; ?></td> <!-- version classique -->
        </tr>
    </tbody>
</table>
