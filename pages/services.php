<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - Cabinet Paramédical Occitania</title>
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
                        <li><a href="gantt.php">GANTT</a></li>
                        <li><a href="livrables.php">Livrables</a></li>
                        <li><a href="equipe.php">Équipe</a></li>
                        <li><a href="site-prive.php">Accès interne</a></li>
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
        <section class="services-intro">
            <h2>Des soins de qualité, au cœur de Toulouse</h2>
            <p>Le Cabinet Paramédical Occitania offre une approche globale de la santé, en combinant expertise médicale, technologies modernes et accompagnement humain. Découvrez nos pôles d'intervention, conçus pour répondre à tous vos besoins.</p>
        </section>

        <section class="services-liste">
            <article class="service">
                <h3>🏥 Médecine Générale</h3>
                <p>Le Dr Élodie Martin vous accueille pour un suivi médical complet, de la prévention à la prise en charge des pathologies aiguës et chroniques. Elle travaille main dans la main avec l'équipe paramédicale pour assurer une prise en charge coordonnée et bienveillante.</p>
                <ul>
                    <li>Consultations adultes et enfants</li>
                    <li>Vaccinations, certificats médicaux</li>
                    <li>Suivi de maladies chroniques (diabète, HTA...)</li>
                    <li>Bilans de santé personnalisés</li>
                </ul>
            </article>

            <article class="service">
                <h3>🧘 Kinésithérapie & Rééducation</h3>
                <p>Nos trois kinésithérapeutes — Lucas, Sophia et Julien — proposent des soins variés, adaptés à chaque âge et chaque condition physique. Ils allient gestes techniques et conseils posturaux pour vous guider vers un rétablissement optimal.</p>
                <ul>
                    <li>Rééducation post-chirurgicale</li>
                    <li>Traumatologie du sport</li>
                    <li>Kinésithérapie respiratoire (enfants & adultes)</li>
                    <li>Séances de renforcement musculaire ciblé</li>
                </ul>
            </article>

            <article class="service">
                <h3>🦷 Soins Dentaires</h3>
                <p>Le Dr Camille Moreau vous accueille dans un espace équipé des dernières technologies dentaires. Hygiène, précision et confort sont au cœur de sa pratique, pour redonner le sourire à chaque patient.</p>
                <ul>
                    <li>Détartrage, soins des caries</li>
                    <li>Prothèses fixes et mobiles</li>
                    <li>Urgences dentaires</li>
                    <li>Conseils en hygiène bucco-dentaire</li>
                </ul>
            </article>

            <article class="service">
                <h3>📞 Accueil & Coordination</h3>
                <p>Claire Petit, notre secrétaire paramédicale, est votre première interlocutrice. Elle gère vos prises de rendez-vous, assure le lien entre les professionnels et veille à ce que chaque parcours de soin soit fluide, clair et rassurant.</p>
                <ul>
                    <li>Prise de rendez-vous sur place ou par téléphone</li>
                    <li>Suivi des dossiers médicaux</li>
                    <li>Assistance administrative</li>
                    <li>Orientation et information des patients</li>
                </ul>
            </article>

            <article class="service">
                <h3>🔒 Un cabinet connecté et sécurisé</h3>
                <p>Notre infrastructure numérique garantit la confidentialité de vos données de santé. Dossiers informatisés, téléconsultation possible, accès PMR, et coordination interprofessionnelle font partie intégrante de notre organisation.</p>
                <ul>
                    <li>Plateforme de rendez-vous en ligne</li>
                    <li>Connexion sécurisée pour les professionnels</li>
                    <li>Archivage médical sécurisé</li>
                    <li>Salle de téléconsultation disponible</li>
                </ul>
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
