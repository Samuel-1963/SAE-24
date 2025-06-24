<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Occitania Paramedical Center</title>
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
        <a href="../services.php" class="btn-langue">🇫🇷 Français</a>
    </header>


    <main>
        <section class="intro">
            <h2>Quality care in the heart of Toulouse</h2>
            <p>Occitania Paramedical Center offers a comprehensive approach to health, combining medical expertise, modern technologies and human support. Discover our areas of intervention, designed to meet all your needs.</p>
        </section>

        <section class="services-liste">
            <article class="service">
                <h3>🏥 General Medicine</h3>
                <p>Dr. Élodie Martin welcomes you for complete medical follow-up, from prevention to management of acute and chronic conditions. She works hand in hand with the paramedical team to ensure coordinated and caring treatment.</p>
                <ul>
                    <li>Consultations for adults and children</li>
                    <li>Vaccinations, medical certificates</li>
                    <li>Chronic disease management (diabetes, hypertension...)</li>
                    <li>Personalized health check-ups</li>
                </ul>
            </article>

            <article class="service">
                <h3>🧘 Physiotherapy & Rehabilitation</h3>
                <p>Our three physiotherapists — Lucas, Sophia and Julien — offer varied treatments adapted to every age and physical condition. They combine technical skills with postural advice to guide you toward optimal recovery.</p>
                <ul>
                    <li>Post-surgical rehabilitation</li>
                    <li>Sports injury treatment</li>
                    <li>Respiratory physiotherapy (children & adults)</li>
                    <li>Targeted muscle strengthening sessions</li>
                </ul>
            </article>

            <article class="service">
                <h3>🦷 Dental Care</h3>
                <p>Dr. Camille Moreau welcomes you in a space equipped with the latest dental technologies. Hygiene, precision and comfort are at the heart of her practice, to restore smiles to every patient.</p>
                <ul>
                    <li>Scaling, cavity treatment</li>
                    <li>Fixed and removable prostheses</li>
                    <li>Dental emergencies</li>
                    <li>Oral hygiene advice</li>
                </ul>
            </article>

            <article class="service">
                <h3>📞 Reception & Coordination</h3>
                <p>Claire Petit, our medical secretary, is your first point of contact. She manages your appointments, ensures communication between professionals and makes sure every care pathway is smooth, clear and reassuring.</p>
                <ul>
                    <li>On-site or phone appointment booking</li>
                    <li>Medical records management</li>
                    <li>Administrative assistance</li>
                    <li>Patient orientation and information</li>
                </ul>
            </article>

            <article class="service">
                <h3>🔒 A connected and secure center</h3>
                <p>Our digital infrastructure guarantees the confidentiality of your health data. Computerized records, possible teleconsultation, wheelchair access, and interprofessional coordination are integral parts of our organization.</p>
                <ul>
                    <li>Online booking platform</li>
                    <li>Secure connection for professionals</li>
                    <li>Secure medical archiving</li>
                    <li>Teleconsultation room available</li>
                </ul>
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