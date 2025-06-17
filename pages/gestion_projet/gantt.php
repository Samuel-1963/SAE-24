<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GANTT - Cabinet Paramédical Occitania</title>
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
    <section>
        <h2>Planification du projet (SAé24)</h2>

        <p>Voici le diagramme de Gantt utilisé pour planifier les différentes étapes de notre projet SAé24. Ce document a été créé avec l'outil GanttProject et nous a permis de répartir les tâches de manière structurée, en tenant compte des délais impartis et de la charge de travail de chacun.</p>

        <div class="download-section">
            <p>Vous pouvez télécharger le fichier source du diagramme Gantt ici :</p>
            <a href="../documents/SAé24.gan" download class="download-button">📥 Télécharger le Gantt (.gan)</a>
        </div>

        <div class="image-gantt">
            <img src="../images/gantt_capture.png" alt="Diagramme de Gantt du projet SAé24">
        </div>

        <p>Nous avons structuré la planification du projet en plusieurs phases :</p>
        <ul>
            <li><strong>Analyse des besoins</strong> : prise en compte des attentes du client.</li>
            <li><strong>Conception du réseau</strong> : création du schéma réseau et des services à déployer.</li>
            <li><strong>Mise en œuvre</strong> : configuration des machines, du serveur ESXi et des VM.</li>
            <li><strong>Tests et validation</strong> : vérification de la connectivité, sécurité et services VoIP.</li>
            <li><strong>Livrables</strong> : rédaction des documents techniques et mise en ligne du portfolio.</li>
        </ul>

        <p>Chaque membre du groupe avait des responsabilités précises et des échéances à respecter, ce qui a été facilité par cette planification claire.</p>

        <p>Le diagramme ci-dessus nous a permis de respecter les délais du projet et d'assurer un suivi rigoureux des tâches.</p>
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
