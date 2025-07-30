<?php
session_start();

if (isset($_POST['reset'])) {
    session_destroy();
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

if (!isset($_SESSION['grille'])) {
    $_SESSION['grille'] = array_fill(0, 9, "-");
    $_SESSION['joueur'] = "X";
    $_SESSION['fini'] = false;
    $_SESSION['message'] = "";
}

// Gestion du clic sur une case
if (isset($_POST['case']) && $_SESSION['fini'] === false) {
    $i = intval($_POST['case']);
    if ($_SESSION['grille'][$i] === "-") {
        $_SESSION['grille'][$i] = $_SESSION['joueur'];

        // Combinaisons gagnantes
        $gagnants = [
            [0,1,2], [3,4,5], [6,7,8],
            [0,3,6], [1,4,7], [2,5,8],
            [0,4,8], [2,4,6]
        ];

        foreach ($gagnants as $combinaison) {
            if (
                $_SESSION['grille'][$combinaison[0]] === $_SESSION['joueur'] &&
                $_SESSION['grille'][$combinaison[1]] === $_SESSION['joueur'] &&
                $_SESSION['grille'][$combinaison[2]] === $_SESSION['joueur']
            ) {
                $_SESSION['message'] = $_SESSION['joueur'] . " a gagné !";
                $_SESSION['fini'] = true;
                break;
            }
        }

        // Match nul si grille pleine sans gagnant
        if (!$_SESSION['fini'] && !in_array("-", $_SESSION['grille'])) {
            $_SESSION['message'] = "Match nul !";
            $_SESSION['fini'] = true;
        }

        // Changer de joueur 
        if (!$_SESSION['fini']) {
            $_SESSION['joueur'] = ($_SESSION['joueur'] === "X") ? "O" : "X";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background: #f8f8f8;
            margin-top: 40px;
        }

        h1 {
            margin-bottom: 10px;
        }

        table {
            margin: 20px auto;
            border-collapse: collapse;
        }

        td {
            width: 90px;
            height: 90px;
            border: 2px solid #444;
            padding: 0;
        }

        form {
            display: inline;
        }

        button {
            width: 100%;
            height: 100%;
            font-size: 2em;
            background: white;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #ddd;
        }

        .message {
            font-size: 1.2em;
            margin: 20px;
            color: #222;
        }

        .reset-btn {
            width: auto;           
            height: auto;          
            padding: 8px 16px;
            font-size: 1em;
            background-color: #e53935;
            border: none;
            color: white;
            cursor: pointer;
            border-radius: 5px;
            transition: background 0.3s;
}


        .reset-btn:hover {
            background-color: #c62828;
        }


    </style>
</head>
<body>

    <h1>Jeu du Morpion</h1>

    <div class="message"><?= $_SESSION['message'] ?></div>

    <table>
        <tr>
            <?php for ($i = 0; $i < 9; $i++): ?>
                <?php if ($i > 0 && $i % 3 == 0): ?>
                    </tr><tr>
                <?php endif; ?>
                <td>
                    <?php if ($_SESSION['grille'][$i] === "-"): ?>
                        <form method="post">
                            <input type="hidden" name="case" value="<?= $i ?>">
                            <button type="submit">-</button>
                        </form>
                    <?php else: ?>
                        <button disabled><?= $_SESSION['grille'][$i] ?></button>
                    <?php endif; ?>
                </td>
            <?php endfor; ?>
        </tr>
    </table>

        <div class="reset-container">
            <form method="post">
                <button type="submit" name="reset" class="reset-btn">Réinitialiser</button>
            </form>
        </div>



</body>
</html>