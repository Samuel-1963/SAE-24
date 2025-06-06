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
    <section class="equipe-intro">
        <h2>Notre équipe projet</h2>
        <p>Voici les membres ayant contribué activement à la mise en place de la SAé24. Chacun a apporté ses compétences pour mener à bien cette situation d'apprentisage évalué :</p>
    </section>

    <section class="equipe">
        <article class="chef">
            <h3>Samuel DESCOURS - Chef de projet et développeur web</h3>
            <p>En charge de la coordination du groupe, de la réalisation et gestion du diagramme de Gantt, de la structuration du Trello et de la gestion des livrables. Il a également géré le développement du site en créant la page d'accueil, l'architecture HTML, la navigation principale ainsi que les pages nécessaires pour les livrables.</p>
            <h4>Bilan personnel</h4>
            <p>En tant que coordinateur du groupe, je m'occupe de l'organisation générale du projet. Je réalise et gère le diagramme de Gantt, je structure le Trello pour répartir les tâches de manière claire et efficace, et je veille au bon suivi des livrables pour que tout soit remis dans les délais.</p>
            <p>Sur la partie technique, je développe le site en créant la page d'accueil, l'architecture HTML et PHP, la navigation principale, ainsi que les différentes pages nécessaires pour présenter les livrables.</p>
            <p>J'aime bien cette SAE, c'est un projet sympa à réaliser. Il y a une bonne ambiance dans le groupe, on travaille dans une atmosphère détendue mais sérieuse, ce qui rend l'expérience agréable et motivante. Chacun s'implique, on avance bien ensemble, et c'est valorisant de voir le projet se construire au fil du temps.</p>
        </article>

        <article class="membre">
            <h3>Paul MONTAIGNAC - Responsable réseau</h3>
            <p>A co-conçu l'architecture réseau avec Lilian, établi un plan d'adressage IP, et contribué à la validation du diagramme de Gantt. Il a également participé à la configuration réseau sur les équipements physiques.</p>
            <h4>Bilan personnel</h4>
            <p>Je me sens bien intégré dans l'équipe. Chacun de nous a sa petite spécialité ou sa tâche favorite. Pour ma part, je gère principalement l'aspect réseau et son organisation. Au début, j'ai participé à l'architecture et à la conception du plan d'adressage. Ensuite, je me suis chargé de la configuration du routeur et des appareils réseau afin d'assurer leur interaction et l'accès au réseau.</p>
        </article>

        <article class="membre">
            <h3>Selwan BOURMEL - Administrateur systèmes</h3>
            <p>A pris en charge le déploiement et la configuration des machines virtuelles sur ESXi. Il a installé et paramétré des VM sous Ubuntu et Windows Server, avec la gestion des ressources, des ISO et des adresses IP statiques.</p>
            <h4>Bilan personnel</h4>
            <p>Personnellement, je trouve que les quatre séances réalisées jusqu'à présent se sont bien déroulées, avec moins de problèmes techniques que pour les autres SAÉ. Je me suis surtout occupé du côté serveur de cette SAÉ, avec l'ESXi, en installant les machines virtuelles Ubuntu et Windows. Sur la VM Ubuntu, j'ai d'abord configuré le serveur XAMPP pour que Samuel puisse héberger son site web et tester le PHP en action. Ensuite, j'ai configuré Asterisk, afin que nous puissions gérer les téléphones, ce que je fais actuellement pendant cette quatrième séance.</p>
            <p>Pour moi, cette SAÉ est très intéressante, car le contexte est concret, ce qui me permet de voir clairement l'utilité de ce que nous faisons. L'ambiance dans l'équipe est excellente : tout se passe bien, chacun travaille comme il faut. On reste sérieux, tout en rigolant de temps en temps.</p>
        </article>

        <article class="membre">
            <h3>Lilian DEPOISIER - Technicien réseau</h3>
            <p>A travaillé avec Paul sur l'adressage IP et la topologie réseau. Il s'est entraîné à la configuration des routeurs et switches, puis les a mis en œuvre en conditions réelles. Il a aussi assisté Selwan dans la mise en place du serveur.</p>
            <h4>Bilan personnel</h4>
            <p>Avec le groupe, nous avons réparé les tâches. Avec Paul, nous avons travaillé sur l'architecture réseau et l'adresse IP, puis je me suis entraîné à configurer un routeur et un switch. Ensuite, nous avons configuré le réseau pour avoir une connexion Internet. J'ai aidé Selwan à préparer le serveur. Nous avons importé l'ISO de Windows Server sur ESXi, créé une VM, puis lancé l'installation. Avec Samuel et Lilian, nous avons configuré un téléphone Fortinet pour tester le serveur Asterisk. J'ai aussi configuré deux téléphones IP, aidé sur un problème FileZilla, et participé à une réunion pour préparer le livrable.</p>
            <p>Ces séances m'ont beaucoup plu car elles mêlent théorie et pratique, et j'ai apprécié travailler en équipe tout en développant mes compétences techniques. L'expérience a été très motivante.</p>
        </article>

        <article class="membre">
            <h3>Joy-Floris GUERIN - Responsable outils collaboratifs et simulation réseau</h3>
            <p>A mis en place le suivi de projet via Trello, collaboré avec Samuel sur le diagramme de Gantt, et réalisé la simulation réseau sur Packet Tracer. Il a ensuite participé à la configuration réseau sur les équipements physiques.</p>
            <h4>Bilan personnel</h4>
            <p>Le travail est très agréable au sein de cette équipe. Nous répartissons les tâches en début de séance, puis nous les réalisons au fur et à mesure.</p> 
            <p>Lors des deux premières séances, j'ai participé à la mise en place des outils de suivi tels que Gantt et Trello, mais j'ai surtout travaillé sur la configuration du réseau avec Packet Tracer.</p>
            <p>Durant les 3ème et 4ème séances, je me suis concentré sur la configuration du serveur Windows Server 2019.</p>
        </article>
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
