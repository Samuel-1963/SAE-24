<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logins et mots de passe - Cabinet Paramédical Occitania</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../images/icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        
        <a href="../../index.php" class="titre-accueil">
            <h1>Cabinet Paramédical Occitania</h1>
        </a>
        
        <button id="menu-toggle" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="main-nav">
            <ul>
                <li><a href="../equiperp.php">Notre équipe</a></li>
                <li><a href="../services.php">Nos services</a></li>
                <li><a href="../contact.php">Prendre rendez-vous</a></li>
                <li><a href="#">Espace professionnel</a>
                    <ul class="sous-menu">
                        <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                            <li><a href="../arborescence.php">Arborescence du site</a></li>
                            <li><a href="../gestion_projet/index.php">Gestion de Projet</a></li>
                            <li><a href="../equipe/index.php">Équipe et Évaluations</a></li>
                            <li><a href="../documentation/index.php">Documentation Technique</a></li>
                            <li><a href="../conclusion/index.php">Communication et Bilan</a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                    <li><a href="../deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="../connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contenu">
            <h1>🔐 Logins et Mots de Passe</h1>

            <p>Ce tableau récapitule tous les identifiants utilisés dans le cadre du projet pour les différentes machines, services et connexions.</p>

            <table class="table">
                <thead>
                    <tr>
                        <th>Login</th>
                        <th>Mot de passe</th>
                        <th>Destination / Usage</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>root</td>
                        <td>passroot24*</td>
                        <td>Connexion ESXi</td>
                    </tr>
                    <tr>
                        <td>administrateur</td>
                        <td>passroot24*</td>
                        <td>Connexion Ubuntu-PSSLJ</td>
                    </tr>
                    <tr>
                        <td>daemon</td>
                        <td>xampp</td>
                        <td>FTP XAMPP</td>
                    </tr>
                    <tr>
                        <td>admin</td>
                        <td>secret123</td>
                        <td>Site web (interface d'administration)</td>
                    </tr>
                    <tr>
                        <td>Il n'y en as pas</td>
                        <td>ciscort</td>
                        <td>Point d'accès Wi-Fi (mot de passe global)</td>
                    </tr>
                </tbody>
            </table>

            <p class="info-warning">⚠️ <strong>Note :</strong> Ces identifiants sont fictifs et à usage pédagogique uniquement. Ne jamais utiliser de mots de passe faibles ou partagés en environnement réel.</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Cabinet Paramédical Occitania | Site fictif pédagogique | <a href="../mentions-legales.php">Mentions légales</a></p>
    </footer>

    <script>
        // Gestion du menu mobile
        document.getElementById('menu-toggle').addEventListener('click', function() {
            const nav = document.getElementById('main-nav');
            nav.classList.toggle('active');

            this.querySelectorAll('span').forEach(span =>
                span.classList.toggle('active'));

            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
        });
    </script>
</body>
</html>    