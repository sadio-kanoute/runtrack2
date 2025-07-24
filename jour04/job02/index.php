<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Arguments GET</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background-color: #f7f7f7;
    }

    form {
      margin-bottom: 20px;
      background-color: white;
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    input[type="text"] {
      margin-bottom: 10px;
      padding: 8px;
      width: 250px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      padding: 10px 15px;
      background-color: #007BFF;
      color: white;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      background-color: white;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    th, td {
      border: 1px solid #ccc;
      padding: 12px;
      text-align: left;
    }

    th {
      background-color: #007BFF;
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>

  <form method="GET">
    <label>Nom :</label><br>
    <input type="text" name="nom"><br>

    <label>Prénom :</label><br>
    <input type="text" name="prenom"><br>

    <label>Email :</label><br>
    <input type="text" name="email"><br>

    <input type="submit" value="Envoyer">
  </form>

  <?php
  if (!empty($_GET)) {
      // Créer les variables dynamiquement
      foreach ($_GET as $key => $value) {
          $$key = $value;
      }

      // Afficher le tableau
      echo "<table>";
      echo "<tr><th>Argument</th><th>Valeur</th></tr>";

      foreach ($_GET as $key => $value) {
          echo "<tr>";
          echo "<td>" . htmlspecialchars($key) . "</td>";
          echo "<td>" . htmlspecialchars($$key) . "</td>";
          echo "</tr>";
      }

      echo "</table>";
  }
  ?>

</body>
</html>
