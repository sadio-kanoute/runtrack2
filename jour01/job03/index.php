<?php
$varString = "PHP niveau débutant";
$varInt = 23;
$varFloat = 23.1; // variables numériques avec decimales
$varBool = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Tableau des Variables</title>
</head>
<body>

<table border="2">
    <thead>
        <tr>
            <th>Type</th>
            <th>Nom</th>
            <th>Valeur</th>
        </tr>
</thead>
<tbody> 
    <tr>
        <!-- 
    echo gettype affiche uniquement le type d'une variable (ex : string, boolean, integer, etc.).

    Ici, j'aurais aussi pu utiliser var_dump, car il affiche à la fois le type ET le contenu de la variable.
    C'est ce que j'ai fait plus bas, mais en deux lignes séparées.
-->


        <td><?php echo gettype($varString); ?></td>
        <td>$varString</td>
        <td><?php echo $varString; ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($varInt); ?></td>
        <td>$varInt</td>
        <td><?php echo $varInt; ?></td>
    </tr>

    <tr>
        <td><?php echo gettype($varFloat); ?></td>
        <td>$varFloat</td>
        <td><?php echo $varFloat; ?></td>
    </tr>

     <tr>
        <td><?php echo gettype($varBool); ?></td>
        <td>$varBool</td>
        <td><?php echo $varBool ? "true" : "false";?></td>
    </tr>
</tbody>
</table>
