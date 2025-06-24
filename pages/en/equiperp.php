<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Team - Occitania Paramedical Center</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../images/icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        
        <a href="index.php" class="titre-accueil">
            <h1>Occitania Paramedical Center</h1>
        </a>
        
        <button id="menu-toggle" aria-label="Open menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="main-nav">
            <ul>
                <li><a href="equiperp.php">Our team</a></li>
                <li><a href="services.php">Our services</a></li>
                <li><a href="contact.php">Book an appointment</a></li>
                <li><a href="#">Professional space</a>
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
                    <li><a href="../deconnexion.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="../connexion.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <a href="../equiperp.php" class="btn-langue">🇫🇷 Français</a>
    </header>

<main>
        <section class="intro">
            <h2>A multidisciplinary team dedicated to your health</h2>
            <p>Our center brings together passionate, attentive and highly qualified professionals. Meet the faces of those who accompany you daily towards well-being.</p>
        </section>

        <section class="equipe">
            <article class="membre">
                <img src="../../images/medecin.jpg" alt="Dr. Élodie Martin">
                <h3>Dr. Élodie Martin - General Practitioner</h3>
                <p>With 15 years of experience in general medicine, Dr. Martin embodies listening and rigor. She places the patient at the heart of her practice and offers personalized follow-up at every stage of life, whether for prevention, diagnosis or treatment of acute and chronic conditions. She places great importance on building trust with her patients.</p>
            </article>

            <article class="membre">
                <img src="../../images/lucas.jpg" alt="Lucas Dubois">
                <h3>Lucas Dubois - Physiotherapist</h3>
                <p>Specialized in post-operative and sports rehabilitation, Lucas combines precision, teaching skills and active listening to effectively support his patients in their recovery. Through manual techniques and adapted exercises, he promotes lasting recovery while restoring mobility and self-confidence. He regularly attends training to incorporate the latest advances in the field.</p>
            </article>

            <article class="membre">
                <img src="../../images/sophia.jpg" alt="Sophia Renard">
                <h3>Sophia Renard - Physiotherapist</h3>
                <p>With a gentle, caring and attentive approach, Sophia is particularly involved in rehabilitation for elderly patients and pediatric care. She favors close relationships with her patients and adapts her methods according to the specific needs of each age group, establishing an atmosphere of trust and serenity conducive to care.</p>
            </article>

            <article class="membre">
                <img src="../../images/julien.jpg" alt="Julien Lefèvre">
                <h3>Julien Lefèvre - Physiotherapist</h3>
                <p>Passionate about biomechanics and innovation in physical therapy, Julien offers targeted and personalized treatments. He supports both high-level athletes and sedentary individuals in their return to activity, using modern techniques and rigorous follow-up based on movement analysis and optimization of functional performance.</p>
            </article>

            <article class="membre">
                <img src="../../images/dentiste.jpg" alt="Dr. Camille Moreau">
                <h3>Dr. Camille Moreau - Dentist</h3>
                <p>Equipped with state-of-the-art technology and solid experience, Dr. Moreau provides high-quality dental care in a serene and reassuring atmosphere. She handles both routine care and more complex procedures with an approach focused on comfort, patient listening and impeccable hygiene.</p>
            </article>

            <article class="membre">
                <img src="../../images/claire.jpg" alt="Claire Petit">
                <h3>Claire Petit - Medical Secretary</h3>
                <p>The first smile you'll see when arriving, Claire coordinates appointments and ensures the link between patients and healthcare professionals. Thanks to her responsiveness, organizational skills and kindness, she guarantees a warm welcome and smooth support throughout your journey at the center.</p>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Occitania Paramedical Center | Educational fictional website | <a href="mentions-legales.php">Legal notices</a></p>
    </footer>

    <script>
        // Mobile menu management
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