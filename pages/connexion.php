<?php
session_start();

$identifiant = "admin";
$mot_de_passe = "secret123"; // à sécuriser en vrai projet

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST['login'] ?? '';
    $mdp = $_POST['mdp'] ?? '';

    if ($login === $identifiant && $mdp === $mot_de_passe) {
        $_SESSION['connecte'] = true;
        header("Location: site-prive.php");
        exit();
    } else {
        $erreur = "Identifiants incorrects.";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="../styles.css">
</head>
<body>
    <main>
        <h1>Connexion à l'espace professionnel</h1>
        <?php if (isset($erreur)) echo "<p style='color:red;'>$erreur</p>"; ?>
        <form method="post">
            <label for="login">Identifiant :</label><br>
            <input type="text" name="login" id="login" required><br><br>

            <label for="mdp">Mot de passe :</label><br>
            <input type="password" name="mdp" id="mdp" required><br><br>

            <input type="submit" value="Se connecter">
        </form>
    </main>
</body>
</html>
