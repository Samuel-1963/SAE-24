<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notre Équipe - Cabinet Paramédical Occitania</title>
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
                <li><a href="equiperp.php">Notre équipe</a></li>
                <li><a href="services.php">Nos services</a></li>
                <li><a href="contact.php">Prendre rendez-vous</a></li>
                <li><a href="#">Espace professionnel</a>
                    <ul class="sous-menu">
                    <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                        <li><a href="livrables.php">Livrables</a></li>
                        <li><a href="equipe.php">Équipe</a></li>
                        <li><a href="site-prive.php">Accès interne</a></li>
                        <li><a href="gantt.php">GANTT</a></li>
                        <li><a href="plan.php">Schéma de l'architecture réseau</a></li>
                        <li><a href="deconnexion.php">Déconnexion</a></li>
                        <?php else: ?>
                        <li><a href="connexion.php">Connexion</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="equipe">
            <h2>Notre équipe projet</h2>
            <p>Voici les membres ayant contribué activement à la mise en place du Cabinet Paramédical Occitania. Chacun a apporté ses compétences pour mener à bien ce projet collectif :</p>

            <ul class="liste-equipe">
                <li>
                    <strong>Samuel DESCOURS</strong> - Chef de projet et développeur web : en charge de la coordination du groupe, de la réalisation et gestion du diagramme de Gantt, de la structuration du Trello et de la gestion des livrables. Il a également géré le développement du site en créant la page d'accueil, l'architecture HTML, la navigation principale ainsi que les pages nécessaire pour les livrables.
                </li>
                <li>
                    <strong>Paul MONTAIGNAC</strong> - Responsable réseau : a co-conçu l'architecture réseau avec Lilian, établi un plan d'adressage IP, et contribué à la validation du diagramme de Gantt. Il a également participé à la configuration réseau sur les équipements physiques.
                </li>
                <li>
                    <strong>Selwan BOURMEL</strong> - Administrateur systèmes : a pris en charge le déploiement et la configuration des machines virtuelles sur ESXi. Il a installé et paramétré des VM sous Ubuntu et Windows Server, avec la gestion des ressources, des ISO et des adresses IP statiques.
                </li>
                <li>
                    <strong>Lilian DEPOISIER</strong> - Technicien réseau : a travaillé avec Paul sur l'adressage IP et la topologie réseau. Il s'est entraîné à la configuration des routeurs et switches, puis les a mis en œuvre en conditions réelles. Il a aussi assisté Selwan dans la mise en place du serveur.
                </li>
                <li>
                    <strong>Joy-Floris GUERIN</strong> - Responsable outils collaboratifs et simulation réseau : a mis en place le suivi de projet via Trello, collaboré avec Samuel sur le diagramme de Gantt, et réalisé la simulation réseau sur Packet Tracer. Il a ensuite participé à la configuration réseau sur les équipements physiques.
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
