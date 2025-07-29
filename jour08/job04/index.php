<?php
// Déconnexion : supprimer le cookie
if (isset($_POST['deco'])) {
    setcookie('prenom', '', time() - 3600); // expire le cookie
    header('Location: ' . $_SERVER['PHP_SELF']); // recharge la page
    exit;
}

// Connexion : enregistrer le prénom dans un cookie
if (isset($_POST['connexion']) && !empty(trim($_POST['prenom']))) {
    $prenom = htmlspecialchars(trim($_POST['prenom']));
    setcookie('prenom', $prenom, time() + 3600); 
    header('Location: ' . $_SERVER['PHP_SELF']); 
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion Cookie</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f2f2;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1, p {
            color: #333;
        }

        form {
            background: white;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: flex;
            flex-direction: column;
            gap: 15px;
            min-width: 280px;
        }

        input[type="text"] {
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            padding: 10px;
            font-size: 16px;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            background-color: #007bff;
            color: white;
            transition: background 0.2s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .logout {
            background-color: #dc3545;
        }

        .logout:hover {
            background-color: #b02a37;
        }
    </style>
</head>
<body>

<?php if (isset($_COOKIE['prenom'])): ?>
    <h1>Bonjour <?= htmlspecialchars($_COOKIE['prenom']) ?> !</h1>
    <form method="post">
        <button type="submit" name="deco" class="logout">Déconnexion</button>
    </form>
<?php else: ?>
    <h1>Connexion</h1>
    <form method="post">
        <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
        <button type="submit" name="connexion">Connexion</button>
    </form>
<?php endif; ?>

</body>
</html>
