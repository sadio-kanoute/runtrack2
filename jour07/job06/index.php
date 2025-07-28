<?php
function leetSpeak($str) {
    // Tableau lettre => chiffre
    $leet = [
        'A' => '4',
        'B' => '8',
        'E' => '3',
        'G' => '6',
        'L' => '1',
        'S' => '5',
        'T' => '7'
    ];

    // On parcourt chaque lettre à remplacer
    foreach ($leet as $lettre => $code) {
        // Remplace la lettre majuscule ET minuscule
        $str = str_replace([$lettre, strtolower($lettre)], $code, $str);
    }

    // On retourne la version modifiée
    return $str;
}

//  Exemple :
$phrase = "Le talent de Cristiano est exceptionnel";
echo leetSpeak($phrase);
?>
