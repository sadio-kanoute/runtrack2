<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Salles - Capacité</title>
  <style>
    body {
      font-family: sans-serif;
      background: #f4f6f9;
      margin: 0;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      color: #2c3e50;
    }

    table {
      width: 90%;
      border-collapse: collapse;
      background: white;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
  </style>
</head>
<body>
  <h1>Salles (Capacité croissante)</h1>

  <?php
    require_once '../connexion.php';

    $result = $mysqli->query("SELECT nom, capacite FROM salles ORDER BY capacite ASC");

    if ($result && $result->num_rows > 0) {
      echo "<table>
              <thead>
                <tr><th>Nom</th><th>Capacité</th></tr>
              </thead>
              <tbody>";
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . htmlspecialchars($row['nom']) . "</td>
                <td>" . htmlspecialchars($row['capacite']) . "</td>
              </tr>";
      }
      echo "</tbody></table>";
    } else {
      echo "<p>Aucune salle trouvée.</p>";
    }

    $mysqli->close();
  ?>
</body>
</html>
