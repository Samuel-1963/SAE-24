<?php session_start(); ?>
<?php
if (!isset($_SESSION['connecte']) || $_SESSION['connecte'] !== true) {
    header("Location: ../connexion.php"); // Redirige vers la page de connexion
    exit(); // Arrête le chargement de la page
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation SAé - Cabinet Paramédical Occitania</title>
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
            <h2>Présentation de la SAÉ</h2>
            <p>
                Dans le cadre de notre formation en Réseaux et Télécommunications, nous participons à la <strong>SAÉ 24</strong>, une Situation d'Apprentissage et d'Évaluation conçue pour nous plonger dans une démarche de projet concret et professionnalisant.
            </p>
        </section>

        <section class="contenu">
            <h3>Contexte du projet</h3>
            <p>
                Nous avons été sollicités par <strong>SipOc</strong>, une société spécialisée dans les systèmes d'information pour les cabinets paramédicaux, afin de concevoir et mettre en œuvre une <strong>preuve de concept (PoC)</strong>. Cette PoC doit démontrer la faisabilité d'une infrastructure réseau multi-sites connectant plusieurs établissements de santé répartis en région Occitanie.
            </p>
        </section>

        <section class="contenu">
            <h3>Objectifs techniques</h3>
            <p>
                Notre mission principale est de déployer une <strong>architecture réseau virtualisée</strong>, intégrant les services suivants :
            </p>
            <ul>
                <li>Interconnexion sécurisée entre plusieurs sites distants</li>
                <li>Infrastructure de <strong>téléphonie IP</strong> fonctionnelle</li>
                <li>Systèmes de <strong>supervision</strong> et <strong>monitoring</strong> du réseau</li>
                <li>Gestion des <strong>bases de données</strong> et des accès utilisateurs</li>
                <li>Respect des bonnes pratiques en <strong>cybersécurité</strong></li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Compétences mobilisées</h3>
            <p>
                Ce projet mobilise l'ensemble des compétences acquises depuis le début de notre formation :
            </p>
            <ul>
                <li>Configuration de réseaux physiques et virtuels</li>
                <li>Déploiement de services sur des machines Linux</li>
                <li>Travail collaboratif en équipe projet</li>
                <li>Rédaction de documentation technique</li>
                <li>Présentation synthétique et professionnelle des résultats</li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Centralisation des livrables</h3>
            <p>
                Tous les éléments de notre travail sont regroupés sur ce site web afin de faciliter la consultation et la valorisation de notre démarche. Cette plateforme permet un accès clair à nos livrables, aux résultats des tests, à notre schéma réseau, et à l'ensemble de la documentation produite dans le cadre de cette SAÉ.
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