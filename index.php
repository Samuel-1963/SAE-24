<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet Paramédical Occitania - Accueil</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" href="images/icon.ico" type="image/x-icon">
</head>
<body>
    <header>

        <a href="index.php" class="titre-accueil">
            <h1>Cabinet Paramédical Occitania</h1>
        </a>

        <button id="menu-toggle" aria-label="Ouvrir le menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="main-nav">
            <ul>
                <li><a href="pages/equiperp.php">Notre équipe</a></li>
                <li><a href="pages/services.php">Nos services</a></li>
                <li><a href="pages/contact.php">Prendre rendez-vous</a></li>
                <li><a href="#">Espace professionnel</a>
                    <ul class="sous-menu">
                        <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                            <li><a href="pages/arborescence.php">Arborescence du site</a></li>
                            <li><a href="pages/gestion_projet/index.php">Gestion de Projet</a></li>
                            <li><a href="pages/equipe/index.php">Équipe et Évaluations</a></li>
                            <li><a href="pages/documentation/index.php">Documentation Technique</a></li>
                            <li><a href="pages/conclusion/index.php">Communication et Bilan</a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                    <li><a href="pages/deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="pages/connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <a href="pages/en/index.php" class="btn-langue">🇬🇧 English</a>
    </header>

    <main>
        <!-- Section d'Accueil -->
        <section id="accueil">
            <div class="accueil-conteneur">
                <h2>Bienvenue au Cabinet Paramédical Occitania</h2>
                <p>Installé en Haute-Garonne, notre cabinet pluridisciplinaire vous accueille dans un cadre moderne et connecté, dédié à votre santé et votre bien-être.</p>
            </div>
            <ul>
                <li><strong>Suivi médical</strong> assuré par un médecin généraliste expérimenté</li>
                <li><strong>Rééducation et bien-être</strong> grâce à nos trois kinésithérapeutes diplômés</li>
                <li><strong>Soins dentaires</strong> de proximité avec un matériel de dernière génération</li>
                <li><strong>Accueil et organisation</strong> pris en charge par une secrétaire paramédicale dédiée</li>
            </ul>
        </section>

        <!-- Section Informations pratiques -->
        <section id="infos">
            <h2>Informations pratiques</h2>
            <ul>
                <li><strong>Adresse :</strong> 12 rue de la Santé, 31000 Toulouse</li>
                <li><strong>Téléphone :</strong> 921 </li>
                <li><strong>Horaires d'ouverture :</strong> du lundi au vendredi, 8h00 - 19h00</li>
                <li><strong>Accès :</strong> Parking gratuit, accès PMR, proche métro Ligne B</li>
            </ul>
        </section>

        <!-- Section technologie -->
        <section id="tech">
            <h2>Un cabinet connecté et sécurisé</h2>
            <p>Notre structure repose sur un système d'information moderne, sécurisé et supervisé en temps réel...</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Cabinet Paramédical Occitania | Site fictif pédagogique | <a href="pages/mentions-legales.php">Mentions légales</a></p>
    </footer>

    <script>
        // Gestion du menu mobile
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const nav = document.getElementById('main-nav');
            nav.classList.toggle('active');
            this.querySelectorAll('span').forEach(span =>
                span.classList.toggle('active'));
        });
    </script>
</body>
</html>
