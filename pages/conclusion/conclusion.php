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
    <title>Conclusion globale - Cabinet Paramédical Occitania</title>
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
            <h2>Conclusion du projet</h2>
            <p>
                Cette SAÉ nous a permis de mettre en œuvre de manière concrète nos compétences en réseaux et systèmes informatiques, dans un contexte professionnel simulé. Voici une synthèse des résultats obtenus, des moyens employés et des enseignements tirés.
            </p>
        </section>

        <section class="contenu">
            <h3>Objectifs atteints</h3>
            <p>
                L'ensemble des objectifs fixés au départ ont été atteints avec succès :
            </p>
            <ul>
                <li>Chaque membre du cabinet dispose d'un ordinateur de bureau câblé, d'un login/mot de passe, ainsi que des applications bureautiques (navigateur et messagerie).</li>
                <li>L'hyperviseur ESXi 6.7 supporte bien deux machines virtuelles : une VM Windows Server 2019 et une VM GNU/Linux.</li>
                <li>Sur la VM Windows :
                    <ul>
                        <li>Les services DHCP et DNS sont opérationnels</li>
                        <li>Chaque utilisateur dispose de son propre espace disque</li>
                        <li>L'outil de supervision The Dude est installé</li>
                    </ul>
                </li>
                <li>Sur la VM GNU/Linux :
                    <ul>
                        <li>Les services suivants sont déployés : web, MySQL, FTP, TFTP, Asterisk, SMTP, POP3</li>
                    </ul>
                </li>
                <li>Le site web RWD est hébergé localement avec une partie publique bilingue (français/anglais) et une partie privée accessible par login/mot de passe regroupant les livrables.</li>
                <li>Un point d'accès Wi-Fi unique couvre efficacement le cabinet.</li>
                <li>Le plan d'adressage utilise une plage privée de classe C en /24 avec un routeur Cisco comme passerelle.</li>
                <li>Le service de téléphonie ToIP via Asterisk fonctionne pleinement avec toutes les fonctionnalités attendues : transferts, interceptions, mises en attente, enregistrements, groupements, boîtes vocales, messagerie unifiée, IVR, etc.</li>
                <li>Chaque utilisateur dispose d'un téléphone (numérique, analogique ou softphone) configuré selon le plan de numérotation en cohérence avec le plan d'adressage.</li>
                <li>L'objectif de communication entre les deux sites (PM1 et PM2) a été atteint via une maquette fonctionnelle sur Packet Tracer.</li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Moyens utilisés et organisation</h3>
            <p>
                Les moyens mis en œuvre ont été globalement bien adaptés au projet. Lorsque des difficultés apparaissaient, nous avons su mobiliser diverses ressources :
            </p>
            <ul>
                <li>Consultation des documents de travaux pratiques réalisés durant l'année</li>
                <li>Recherches en ligne sur des sites spécialisés et des vidéos tutoriels</li>
                <li>Utilisation de l'intelligence artificielle pour des explications rapides et efficaces</li>
            </ul>
            <p>
                L'organisation du groupe a été rigoureuse : nous faisions un point en début de chaque séance pour planifier les tâches, et une synthèse écrite était rédigée en fin de séance pour garder une trace du travail accompli.
            </p>
        </section>

        <section class="contenu">
            <h3>Ce qui a bien fonctionné, et ce que l'on aurait pu améliorer</h3>
            <p>
                Parmi les points positifs, nous avons pris l'initiative de créer des fiches de configuration pour chaque élément du projet. Cela nous a permis d'avoir un suivi structuré et de faciliter les relais en cas d'absence d'un membre.
            </p>
            <p>
                Cette pratique aurait été encore plus bénéfique si elle avait été mise en place dès le début du projet. Par ailleurs, bien que le réseau soit pleinement fonctionnel, nous aurions pu creuser davantage pour résoudre le conflit NAT lors de l'interconnexion. La solution alternative reste néanmoins efficace.
            </p>
        </section>

        <section class="contenu">
            <h3>Travail d'équipe et coopération</h3>
            <p>
                La coopération dans le groupe a été optimale. La répartition des tâches était équilibrée et chacun a su s'impliquer activement. La communication était fluide, que ce soit pendant ou en dehors des séances.
            </p>
            <p>
                L'écoute mutuelle et l'esprit d'équipe ont largement contribué à la réussite du projet. Dès qu'un problème survenait, les membres proposaient des solutions et n'hésitaient pas à aider les autres. Cette dynamique a permis un gain de temps et une plus grande efficacité.
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