<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nos Services - Cabinet Paramédical Occitania</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../images/icon.ico" type="image/x-icon">
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
                <li><a href="equiperp.php">Notre équipe</a></li>
                <li><a href="services.php">Nos services</a></li>
                <li><a href="contact.php">Prendre rendez-vous</a></li>
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
                    <li><a href="deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <a href="en/mentions-legales.php" class="btn-langue">🇬🇧 English</a>
    </header>

    <main class="mentions-legales">
        <section class="intro">
            <h2>Legal Notice</h2>
            <p>
                In accordance with Law No. 2004-575 of June 21, 2004 on confidence in the digital economy,
                here is the information regarding the publisher and host of this website.
            </p>
        </section>

        <section>
            <h3>Website Publisher</h3>
            <p><strong>Responsible person:</strong> Samuel DESCOURS</p>
            <p><strong>Phone:</strong> +33 6 95 60 70 11</p>
            <p><strong>Email:</strong> <a href="mailto:samuel.descours.iut@gmail.com">samuel.descours.iut@gmail.com</a></p>
        </section>

        <section>
            <h3>Hosting</h3>
            <p>
                This website is hosted locally using the <strong>XAMPP</strong> server
                as part of an educational project.
            </p>
            <p>This site is not publicly accessible on the internet.</p>
        </section>

        <section>
            <h3>Data Usage</h3>
            <p>
                This website does not collect any personal data.
                The forms present are used exclusively for a fictional educational project.
            </p>
        </section>

        <section>
            <h3>Credits</h3>
            <p>
                Website created by Samuel DESCOURS, Lilian DEPOISIER, Paul MONTAIGNAC,
                Joy-Floris GUERIN and Selwan BOURMEL.
            </p>
            <p>
                Created as part of SAÉ 21, under the supervision of
                Mr. Gaël Mansalier (<a href="mailto:gael.mansalier@univ-tlse2.fr">gael.mansalier@univ-tlse2.fr</a>).
            </p>
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