<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Étudiants nés entre 1998 et 2018</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f7f7f7;
      padding: 20px;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      color: #333;
      margin-bottom: 20px;
    }

    table {
      border-collapse: collapse;
      width: 80%;
      background: white;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    th, td {
      padding: 12px;
      text-align: center;
      border-bottom: 1px solid #ddd;
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

  <h1>Étudiants nés entre 1998 et 2018</h1>

  <?php
  // Connexion à la base de données
  $mysqli = new mysqli("localhost", "root", "", "jour09");

  // Vérifie la connexion
  if ($mysqli->connect_error) {
    die("Erreur de connexion : " . $mysqli->connect_error);
  }

  // Requête SQL
  $query = "SELECT prenom, nom, naissance FROM etudiants WHERE naissance BETWEEN '1998-01-01' AND '2018-12-31'";
  $result = $mysqli->query($query);

  // Affichage du tableau
  if ($result && $result->num_rows > 0) {
    echo "<table>";
    echo "<thead>
            <tr>
              <th>Prénom</th>
              <th>Nom</th>
              <th>Date de naissance</th>
            </tr>
          </thead><tbody>";

    while ($row = $result->fetch_assoc()) {
      echo "<tr>";
      echo "<td>" . htmlspecialchars($row['prenom']) . "</td>";
      echo "<td>" . htmlspecialchars($row['nom']) . "</td>";
      echo "<td>" . htmlspecialchars($row['naissance']) . "</td>";
      echo "</tr>";
    }

    echo "</tbody></table>";
  } else {
    echo "Aucun étudiant trouvé dans cette tranche de dates.";
  }

  // Fermeture connexion
  $mysqli->close();
  ?>

</body>
</html>
