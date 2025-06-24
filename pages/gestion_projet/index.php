<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Projet - Cabinet Paramédical Occitania</title>
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
        <section class="intro">
            <h2>Gestion de projet</h2>
            <p>
                La gestion de projet a été essentielle pour assurer la réussite de notre SAÉ24. Dès le départ, nous avons défini les rôles de chacun, structuré notre travail autour d'un planning prévisionnel, et mis en place des outils collaboratifs pour le suivi des tâches.
            </p>
            <p>
                Cette rubrique vous permet d'explorer l'ensemble de notre organisation, du diagramme de Gantt aux outils de communication et versionnage, en passant par les problèmes rencontrés pendant la réalisation.
            </p>
        </section>

        <section>
            <h3>Navigation dans la gestion de projet</h3>
            <ul class="page-list">
                <li>
                    <a href="gantt.php">📅 Diagramme de Gantt</a><br>
                    Visualisation de notre planification prévisionnelle et des échéances majeures du projet.
                </li>
                <li>
                    <a href="outils.php">🛠️ Outils collaboratifs</a><br>
                    Présentation des plateformes utilisées (Trello, Drive) pour répartir les tâches et centraliser les documents.
                </li>
                <li>
                    <a href="github.php">💻 Suivi GitHub</a><br>
                    Explication de l'utilisation de Git pour le développement du site web et la collaboration technique.
                </li>
                <li>
                    <a href="problemes.php">⚠️ Problèmes rencontrés</a><br>
                    Retour sur les difficultés techniques ou organisationnelles, et les solutions mises en place.
                </li>
            </ul>
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
