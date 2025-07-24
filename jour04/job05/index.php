<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Connexion</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
      background: #f0f0f0;
    }
    form {
      background: white;
      padding: 20px;
      max-width: 300px;
      border-radius: 8px;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-bottom: 15px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input[type="submit"] {
      background: #007BFF;
      color: white;
      padding: 10px;
      border: none;
      width: 100%;
      border-radius: 4px;
      cursor: pointer;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <form method="POST" action="">
    <label for="username">Nom d'utilisateur :</label><br>
    <input type="text" id="username" name="username" required /><br>

    <label for="password">Mot de passe :</label><br>
    <input type="password" id="password" name="password" required /><br>

    <input type="submit" value="Se connecter" />
  </form>

  <?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      $username = $_POST['username'] ?? '';
      $password = $_POST['password'] ?? '';

      // Sécurisation basique
      $username = htmlspecialchars($username);
      $password = htmlspecialchars($password);

      if ($username === "John" && $password === "Rambo") {
          echo "<p style='color: green; font-weight: bold;'>C’est pas ma guerre</p>";
      } else {
          echo "<p style='color: red; font-weight: bold;'>Votre pire cauchemar</p>";
      }
  }
  ?>

</body>
</html>
