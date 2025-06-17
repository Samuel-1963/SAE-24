<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prendre rendez-vous - Cabinet Paramédical Occitania</title>
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
        <a href="en/contact.php" class="btn-langue">🇬🇧 English</a>
    </header>

    <main>
        <section class="intro">
            <h2>Prendre rendez-vous</h2>
            <p>Merci de remplir le formulaire ci-dessous pour effectuer une demande de rendez-vous. Un membre de notre équipe vous recontactera rapidement pour confirmation.</p>
        </section>
        <section id="rdv">
            <form action="traitement-rdv.php" method="POST" class="formulaire-rdv">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="email">Mail :</label>
            <input type="email" id="email" name="email" required>

            <label for="date">Date souhaitée :</label>
            <input type="date" id="date" name="date" required>

            <label for="heure">Heure souhaitée :</label>
            <input type="time" id="heure" name="heure" required>

            <label for="type">Type de consultation :</label>
            <select id="type" name="type" required>
                <option value="">-- Choisir un type --</option>
                <option value="medecin">Consultation médecin</option>
                <option value="kine">Séance de kinésithérapie</option>
                <option value="dentaire">Consultation dentaire</option>
            </select>

            <label for="message">Message complémentaire :</label>
            <textarea id="message" name="message" rows="5" placeholder="Décrivez vos symptômes ou précisez vos disponibilités..."></textarea>

            <button type="submit">Envoyer la demande</button>
            </form>
        </section>
    </main>


    <footer>
        <p>&copy; 2025 Cabinet Paramédical Occitania | Site fictif pédagogique | <a href="../mentions-legales.php">Mentions légales</a></p>
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
