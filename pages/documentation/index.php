<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentation Technique - Cabinet Paramédical Occitania</title>
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
        <section class="intro">
            <h2>Documentation Technique</h2>
            <p>
                Cette section rassemble tous les éléments techniques qui ont permis la réalisation de notre projet réseau dans le cadre de la SAÉ21. Elle détaille à la fois notre architecture, nos choix techniques, et les différentes étapes de mise en place et de validation du système.
            </p>
            <p>
                Vous trouverez ici une vue d'ensemble du fonctionnement de notre réseau simulé, des identifiants de connexion utilisés, ainsi que les résultats de nos tests de connectivité et de fonctionnement.
            </p>
        </section>

        <section>
            <h3>Navigation dans la documentation</h3>
            <ul class="page-list">
                <li>
                    <a href="presentation_sae.php">📄 Présentation de la SAÉ</a><br>
                    Contexte, objectifs pédagogiques et attendus de la SAÉ21.
                </li>
                <li>
                    <a href="mode_emploi.php">⚙️ Mode d'emploi</a><br>
                    Explications pour utiliser, déployer ou tester notre réseau simulé.
                </li>
                <li>
                    <a href="plan.php">🗺️ Schéma d'architecture réseau</a><br>
                    Topologie complète du réseau avec ses équipements et interconnexions.
                </li>
                <li>
                    <a href="telephonique.php">📞 Plan de numérotation téléphonique</a><br>
                    Organisation du plan de numérotation VoIP dans l'infrastructure.
                </li>
                <li>
                    <a href="logins.php">🔐 Logins et mots de passe</a><br>
                    Liste des identifiants utilisés pour l'accès aux machines et services.
                </li>
                <li>
                    <a href="simulation.php">🖥️ Simulation Packet Tracer</a><br>
                    Présentation de notre fichier Packet Tracer et configuration des équipements.
                </li>
                <li>
                    <a href="tests.php">✅ Résultats des tests</a><br>
                    Preuves de fonctionnement : ping, téléphonie, routage, etc.
                </li>
            </ul>
        </section>
    </main>


    <footer>
        <p>&copy; 2025 Cabinet Paramédical Occitania | Site fictif pédagogique | <a href="mentions-legales.php">Mentions légales</a></p>
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