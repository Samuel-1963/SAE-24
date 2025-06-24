<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Occitania Paramedical Center - Home</title>
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
        <a href="../../index.php" class="btn-langue">🇫🇷 Français</a>
    </header>

    <main>
        <!-- Welcome Section -->
        <section id="accueil">
            <div class="accueil-conteneur">
                <h2>Welcome to Occitania Paramedical Center</h2>
                <p>Located in Haute-Garonne, our multidisciplinary practice welcomes you in a modern and connected environment, dedicated to your health and well-being.</p>
            </div>
            <ul>
                <li><strong>Medical follow-up</strong> provided by an experienced general practitioner</li>
                <li><strong>Rehabilitation and well-being</strong> with our three certified physiotherapists</li>
                <li><strong>Dental care</strong> with state-of-the-art equipment</li>
                <li><strong>Reception and organization</strong> handled by a dedicated medical secretary</li>
            </ul>
        </section>

        <!-- Practical Information Section -->
        <section id="infos">
            <h2>Practical Information</h2>
            <ul>
                <li><strong>Address:</strong> 12 rue de la Santé, 31000 Toulouse</li>
                <li><strong>Phone:</strong> 921</li>
                <li><strong>Opening hours:</strong> Monday to Friday, 8:00 AM - 7:00 PM</li>
                <li><strong>Access:</strong> Free parking, wheelchair accessible, near Metro Line B</li>
            </ul>
        </section>

        <!-- Technology Section -->
        <section id="tech">
            <h2>A connected and secure center</h2>
            <p>Our facility relies on a modern, secure information system with real-time monitoring...</p>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Occitania Paramedical Center | Educational fictional website | <a href="mentions-legales.php">Legal notices</a></p>
    </footer>

    <script>
        // Mobile menu management
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const nav = document.getElementById('main-nav');
            nav.classList.toggle('active');
            this.querySelectorAll('span').forEach(span =>
                span.classList.toggle('active'));
        });
    </script>
</body>
</html>