<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>job02</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f4f6f9;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            color: #2c3e50;
            margin-bottom: 30px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            background: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: #2c3e50;
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e8f0fe;
        }

        @media screen and (max-width: 768px) {
            table {
                width: 100%;
            }

            th, td {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>

    <h1>Liste des Salles</h1>
    <?php
    require_once '../connexion.php';

    $result = $mysqli->query("SELECT nom, capacite FROM salles");

    if ($result->num_rows > 0) {
        echo "<table border='1' cellspacing='0' cellpadding='8'>";
        
        echo "<thead><tr>";
        while ($col = $result->fetch_field()) {
            echo "<th>" . htmlspecialchars($col->name) . "</th>";
        }
        echo "</tr></thead>";

        // Affiche les lignes de données
        echo "<tbody>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $data) {
                echo "<td>" . htmlspecialchars($data) . "</td>";
            }
            echo "</tr>";
        }
        echo "</tbody>";
        
        echo "</table>";
    } else {
        echo "Aucune salle trouvée.";
    }


    // Fermer la connexion
    $mysqli->close();   
    ?>
</body> 
</html>
