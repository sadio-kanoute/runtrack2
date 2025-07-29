<?php
session_start();


if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

// Reset
if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
}

// Ajout prénom,  trim cest pour supprimer les espaces avant et après le prénom
if (isset($_POST['prenom']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    $_SESSION['prenoms'][] = $prenom;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Prénoms Session</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: #f4f4f4;
            padding: 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2, h3 {
            color: #333;
        }

        form {
            background-color: white;
            padding: 20px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 30px;
        }

        input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
            min-width: 200px;
        }

        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            transition: background 0.2s ease;
        }

        button:hover {
            background-color: #0056b3;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            background-color: white;
            padding: 10px 15px;
            margin-bottom: 8px;
            border-radius: 6px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            color: #444;
            min-width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>

    <h2>Ajouter un prénom</h2>

    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez un prénom" required>
        <button type="submit">Ajouter</button>
        <button type="submit" name="reset" formnovalidate style="background-color: #dc3545;">Reset</button>
    </form>

    <h3>Liste des prénoms :</h3>
    <ul>
        <!-- pour chaque prenom stocker dans la variable session ils les afiches en liste dans un variable p -->

        <?php foreach ($_SESSION['prenoms'] as $p): ?>
            <li><?= $p ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>
