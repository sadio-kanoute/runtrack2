<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>job08</title>
    <style>
      body {
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
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

      th,
      td {
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

        th,
        td {
          font-size: 14px;
          padding: 10px;
        }
      }
    </style>
  </head>
  <body>
    <h1>Capacite Total</h1>

    <?php
    require_once '../connexion.php';

    
    $result = $mysqli->query("SELECT SUM(capacite) AS capacite_totale FROM salles"); if ($result && $result->num_rows > 0) { echo "
    <table>
      "; echo "
      <thead>
        <tr>
          <th>Capacite totale</th>
        </tr>
      </thead>
      "; echo "
      <tbody>
        "; $row = $result->fetch_assoc(); echo "
        <tr>
          <td>" . htmlspecialchars($row['capacite_totale']) . "</td>
        </tr>
        "; echo "
      </tbody>
    </table>
    "; } else { echo "Aucun résultat trouvé."; } $mysqli->close(); ?>
  </body>
</html>
