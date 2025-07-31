<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Salles et Étages</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f9f9f9;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      color: #333;
    }

    table {
      width: 80%;
      border-collapse: collapse;
      margin-top: 20px;
      background: white;
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      border: 1px solid #ccc;
      text-align: center;
    }

    th {
      background-color: #2c3e50;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    tr:hover {
      background-color: #e0f7fa;
    }
  </style>
</head>
<body>

  <h1>Liste des salles et leurs étages</h1>

  <?php

    require_once '../connexion.php';
     $query = "SELECT salles.nom AS salle, etage.nom AS etage 
            FROM salles 
            INNER JOIN etage ON salles.id_etage = etage.id";

  $result = $mysqli->query($query);

  if ($result && $result->num_rows > 0) {
    echo "<table>";
    echo "<thead>
            <tr>
              <th>Nom de la salle</th>
              <th>Nom de l'étage</th>
            </tr>
          </thead><tbody>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($row['salle']) . "</td>";
      echo "<td>" . htmlspecialchars($row['etage']) . "</td>";
      echo "</tr>";
    }

    echo "</tbody></table>";
  } else {
    echo "Aucune donnée trouvée.";
  }

  $mysqli->close();
  ?>

</body>
</html>
