<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GitHub - Cabinet Paramédical Occitania</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../images/icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        
        <a href="../index.php" class="titre-accueil">
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
                            <li><a href="../arborescence/index.php">Arborescence du site</a></li>
                            <li><a href="../gestion_projet/index.php">Gestion de Projet</a></li>
                            <li><a href="../equipe/index.php">Équipe et Évaluations</a></li>
                            <li><a href="../documentation/index.php">Documentation Technique</a></li>
                            <li><a href="../conclusion/index.php">Communication et Bilan</a></li>
                            <li><a href="../deconnexion/index.php">Déconnexion</a></li>
                        <?php else: ?>
                            <li><a href="../connexion.php">Connexion</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contenu">
            <h1>Développement collaboratif via GitHub</h1>

            <p>
                Dans le cadre du projet, nous avons utilisé <strong>GitHub</strong> comme plateforme de versionnement et de collaboration.
                Elle nous a permis de gérer efficacement le code source, suivre les évolutions, corriger les erreurs et travailler à plusieurs sur le même projet.
            </p>

            <h2>Accéder au dépôt GitHub</h2>
            <p>
                Vous pouvez consulter le dépôt du projet en cliquant sur le lien ci-dessous :
            </p>
            <p class="lien-github">
                🔗 <a href="https://github.com/Samuel-1963/SAE-24" target="_blank" rel="noopener">Voir le dépôt GitHub du projet</a>
            </p>

            <h2>Fonctionnalités utilisées</h2>
            <ul>
                <li>Pull requests pour valider les changements</li>
                <li>Issues pour suivre les tâches et les bugs</li>
                <li>README.md pour donner les informations importante sur le projet</li>
            </ul>

            <h2>Bonnes pratiques appliquées</h2>
            <p>
                Nous avons mis en place des règles de nommage, des revues de code systématiques et un processus d'intégration continue pour assurer la qualité du code.
            </p>
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
