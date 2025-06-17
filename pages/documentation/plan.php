<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schéma de l'architecture réseau - Cabinet Paramédical Occitania</title>
    <link rel="stylesheet" href="../styles.css">
    <link rel="icon" href="../images/icon.ico" type="image/x-icon">
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
            <h2>Schéma de l'architecture réseau</h2>
            <img src="../images/plan.png" alt="Schéma du réseau SAé24" style="max-width:100%; height:auto;">

            <p>Ce schéma illustre l'architecture réseau mise en place dans le cadre de la SAé24, réalisée par notre groupe composé de Depoissier, Montaignac, Guerin, Descours et Bourmel. Le réseau repose sur une infrastructure centralisée autour d'un serveur ESXi hébergeant plusieurs machines virtuelles, permettant de gérer efficacement les services internes.</p>

            <p>Voici les éléments clés représentés :</p>
            <ul>
                <li>Un <strong>serveur ESXi</strong> virtualise les systèmes nécessaires à l'infrastructure.</li>
                <li>Un <strong>routeur</strong> connecté à Internet distribue la connexion au reste du réseau via un <strong>switch</strong> central.</li>
                <li>Les différents <strong>postes de travail</strong> et <strong>softphones</strong> sont répartis dans les locaux selon les besoins : cabinet du dentiste, médecin généraliste, kinésithérapeutes, etc.</li>
                <li>Un <strong>point d'accès Wi-Fi</strong> est installé dans la salle d'attente pour une connectivité sans fil.</li>
                <li>Un système de téléphonie est également intégré, incluant des <strong>téléphones IP Aastra</strong> et un <strong>boîtier ATA</strong> pour la conversion VoIP vers des téléphones analogiques.</li>
            </ul>

            <p>L'ensemble du réseau utilise une <strong>adresse IP de type 192.168.90.0/24</strong>, assurant une séparation claire des flux et une bonne organisation des services numériques au sein du cabinet paramédical.</p>
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
