<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Choix du style</title>
   <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

  <?php
  //css dynamique
  // Vérifie si un style a été soumis, sinon utilise le style par défaut
    $style = 'style1'; 
    if (isset($_POST['style']) && in_array($_POST['style'], ['style1', 'style2', 'style3'])) {
        $style = $_POST['style'];
    }
    // a chauque fois dans le variable $style, on met le style choisi par l'utilisateur
    echo '<link rel="stylesheet" href="' . $style . '.css">';
  ?>
</head>
<body>

  <form method="post" action="">
    <label for="style">Choisis un style :</label>
    <select name="style" id="style">
      <option value="style1" <?= ($style === 'style1') ? 'selected' : '' ?>>Style 1</option>
      <option value="style2" <?= ($style === 'style2') ? 'selected' : '' ?>>Style 2</option>
      <option value="style3" <?= ($style === 'style3') ? 'selected' : '' ?>>Style 3</option>
    </select>
    <button type="submit">Valider</button>
  </form>

</body>
</html>
