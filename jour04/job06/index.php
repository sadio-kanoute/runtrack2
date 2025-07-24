<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Pair ou Impair</title>
</head>
<body>

  <form method="GET" action="">
    <label for="nombre">Entrez un nombre :</label><br>
    <input type="text" id="nombre" name="nombre" required /><br><br>
    <input type="submit" value="Vérifier" />
  </form>

  <?php
  if (isset($_GET['nombre'])) {
      $nombre = $_GET['nombre'];

      // Vérifier que c'est bien un nombre entier
      if (is_numeric($nombre) && intval($nombre) == $nombre) {
          if ($nombre % 2 == 0) {
              echo "<p>Nombre pair</p>";
          } else {
              echo "<p>Nombre impair</p>";
          }
      } else {
          echo "<p>Veuillez entrer un nombre entier valide.</p>";
      }
  }
  ?>

</body>
</html>
