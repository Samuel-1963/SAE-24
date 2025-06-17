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
                            <li><a href="arborescence.php">Arborescence du site</a></li>
                            <li><a href="gestion_projet/index.php">Gestion de Projet</a></li>
                            <li><a href="equipe/index.php">Équipe et Évaluations</a></li>
                            <li><a href="documentation/index.php">Documentation Technique</a></li>
                            <li><a href="conclusion/index.php">Communication et Bilan</a></li>
                        <?php endif; ?>
                    </ul>
                </li>

                <?php if (isset($_SESSION['connecte']) && $_SESSION['connecte'] === true): ?>
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <a href="en/equiperp.php" class="btn-langue">🇬🇧 English</a>
    </header>

<main>
        <section class="intro">
            <h2>Une équipe pluridisciplinaire au service de votre santé</h2>
            <p>Notre cabinet réunit des professionnels passionnés, à l'écoute et hautement qualifiés. Découvrez les visages de celles et ceux qui vous accompagnent chaque jour vers le mieux-être.</p>
        </section>

        <section class="equipe">
            <article class="membre">
                <img src="../images/medecin.jpg" alt="Dr. Élodie Martin">
                <h3>Dr. Élodie Martin - Médecin généraliste</h3>
                <p>Forte de 15 ans d'expérience en médecine générale, le Dr Martin incarne l'écoute et la rigueur. Elle place le patient au cœur de sa pratique et propose un suivi personnalisé à chaque étape de la vie, que ce soit pour la prévention, le diagnostic ou le traitement de pathologies aiguës et chroniques. Elle accorde une grande importance à la relation de confiance avec ses patients.</p>
            </article>

            <article class="membre">
                <img src="../images/lucas.jpg" alt="Lucas Dubois">
                <h3>Lucas Dubois - Kinésithérapeute</h3>
                <p>Spécialisé en rééducation post-opératoire et sportive, Lucas allie précision, pédagogie et écoute active pour accompagner efficacement ses patients dans leur rétablissement. Grâce à des techniques manuelles et des exercices adaptés, il favorise une récupération durable tout en rétablissant la mobilité et la confiance en soi. Il suit régulièrement des formations pour intégrer les dernières avancées du domaine.</p>
            </article>

            <article class="membre">
                <img src="../images/sophia.jpg" alt="Sophia Renard">
                <h3>Sophia Renard - Kinésithérapeute</h3>
                <p>Avec une approche douce, bienveillante et attentive, Sophia est particulièrement investie dans la rééducation des personnes âgées et les soins pédiatriques. Elle privilégie une relation de proximité avec ses patients et adapte ses méthodes en fonction des besoins spécifiques de chaque âge, en instaurant un climat de confiance et de sérénité favorable au soin.</p>
            </article>

            <article class="membre">
                <img src="../images/julien.jpg" alt="Julien Lefèvre">
                <h3>Julien Lefèvre - Kinésithérapeute</h3>
                <p>Passionné par la biomécanique et l'innovation en thérapie physique, Julien propose des soins ciblés et personnalisés. Il accompagne aussi bien les sportifs de haut niveau que les personnes sédentaires dans leur reprise d'activité, avec des techniques modernes et un suivi rigoureux, basé sur l'analyse du mouvement et l'optimisation des performances fonctionnelles.</p>
            </article>

            <article class="membre">
                <img src="../images/dentiste.jpg" alt="Dr. Camille Moreau">
                <h3>Dr. Camille Moreau - Chirurgien-dentiste</h3>
                <p>Dotée d'un équipement de pointe et d'une solide expérience, le Dr Moreau assure des soins dentaires de haute qualité dans une ambiance sereine et rassurante. Elle prend en charge aussi bien les soins courants que les interventions plus complexes, avec une approche centrée sur le confort, l'écoute du patient et une hygiène irréprochable.</p>
            </article>

            <article class="membre">
                <img src="../images/claire.jpg" alt="Claire Petit">
                <h3>Claire Petit - Secrétaire paramédicale</h3>
                <p>Premier sourire que vous verrez en arrivant, Claire coordonne les rendez-vous et assure le lien entre les patients et les professionnels de santé. Grâce à sa réactivité, son sens de l'organisation et sa bienveillance, elle garantit un accueil chaleureux et un accompagnement fluide tout au long de votre parcours au sein du cabinet.</p>
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
