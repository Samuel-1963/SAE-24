<?php
session_start();

$identifiant = "admin";
$mot_de_passe = "secret123";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = $_POST['login'] ?? '';
    $mdp = $_POST['mdp'] ?? '';

    if ($login === $identifiant && $mdp === $mot_de_passe) {
        $_SESSION['connecte'] = true;
        header("Location: ../index.php");
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Cabinet Paramédical Occitania</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" href="../images/icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <button id="menu-toggle" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <a href="../index.php" class="titre-accueil">
            <h1>Cabinet Paramédical Occitania</h1>
        </a>

        <nav id="main-nav">
            <ul>
                <li><a href="equiperp.php">Notre équipe</a></li>
                <li><a href="services.php">Nos services</a></li>
                <li><a href="contact.php">Prendre rendez-vous</a></li>
                <li><a href="#">Espace professionnel</a>
                    <ul class="sous-menu">
                        <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                            <li><a href="arborescence.php">Arborescence du site</a></li>
                            <li><a href="gestion_projet/index.php">Gestion de Projet</a></li>
                            <li><a href="equipe/index.php">Équipe et Évaluations</a></li>
                            <li><a href="documentation/index.php">Documentation Technique</a></li>
                            <li><a href="conclusion/index.php">Communication et Bilan</a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <div class="login-container">
            <h2>Connexion à l'espace professionnel</h2>

            <?php if (isset($erreur)) echo "<p class='error-message'>$erreur</p>"; ?>

            <form method="post">
                <label for="login">Identifiant :</label>
                <input type="text" name="login" id="login" required>

                <label for="mdp">Mot de passe :</label>
                <input type="password" name="mdp" id="mdp" required>

                <button type="submit">Se connecter</button>
            </form>
        </div>
    </main>

    <footer>
        <p>&copy; 2025 Cabinet Paramédical Occitania | Site fictif pédagogique | <a href="mentions-legales.php">Mentions légales</a></p>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const nav = document.getElementById('main-nav');
            nav.classList.toggle('active');
            this.querySelectorAll('span').forEach(span => span.classList.toggle('active'));
        });
    </script>
</body>
</html>
