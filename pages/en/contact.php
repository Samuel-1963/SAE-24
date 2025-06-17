<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book an Appointment - Occitania Paramedical Center</title>
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
        <a href="../contact.php" class="btn-langue">🇫🇷 Français</a>
    </header>

    <main>
        <section class="intro">
            <h2>Book an Appointment</h2>
            <p>Please fill out the form below to request an appointment. A member of our team will contact you shortly to confirm.</p>
        </section>
        <section id="rdv">
            <form action="traitement-rdv.php" method="POST" class="formulaire-rdv">
            <label for="prenom">First Name:</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="nom">Last Name:</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="date">Preferred Date:</label>
            <input type="date" id="date" name="date" required>

            <label for="heure">Preferred Time:</label>
            <input type="time" id="heure" name="heure" required>

            <label for="type">Type of Appointment:</label>
            <select id="type" name="type" required>
                <option value="">-- Select a type --</option>
                <option value="medecin">Doctor Consultation</option>
                <option value="kine">Physiotherapy Session</option>
                <option value="dentaire">Dental Consultation</option>
            </select>

            <label for="message">Additional Message:</label>
            <textarea id="message" name="message" rows="5" placeholder="Describe your symptoms or specify your availability..."></textarea>

            <button type="submit">Send Request</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Occitania Paramedical Center | Educational fictional website | <a href="../../mentions-legales.php">Legal notices</a></p>
    </footer>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const nav = document.getElementById('main-nav');
            nav.classList.toggle('active');
            this.querySelectorAll('span').forEach(span => span.classList.toggle('active'));
        });
    </script>
</body>
</html>