<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Outils collaboratifs - Cabinet Paramédical Occitania</title>
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
        <section class="contenu outils">
            <h1>Outils Collaboratifs</h1>
            <p>Durant toute la durée du projet, nous avons utilisé des outils en ligne pour organiser notre travail et centraliser les documents partagés.</p>

            <div class="outil">
                <h2>Trello - Suivi des tâches</h2>
                <p>Nous avons utilisé un tableau Trello pour répartir les responsabilités, planifier les étapes du projet et suivre l'avancement de chacun.</p>
                <div class="capture-wrapper">
                    <img src="../../images/trello_capture.png" alt="Capture du tableau Trello" class="outil-capture">
                    <span class="caption">Tableau Trello collaboratif du projet</span>
                </div>
            </div>

            <div class="outil">
                <h2>Google Drive - Partage de fichiers</h2>
                <p>Un dossier Google Drive partagé contenait tous les fichiers utiles au projet : textes, captures, maquettes, vidéos, schémas techniques, etc.</p>
                <div class="capture-wrapper">
                    <img src="../../images/drive_capture.png" alt="Capture du Drive partagé" class="outil-capture">
                    <span class="caption">Drive Google partagé entre les membres</span>
                </div>
            </div>
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