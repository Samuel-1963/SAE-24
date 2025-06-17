<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Téléphonie - Cabinet Paramédical Occitania</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../images/icon.ico" type="image/x-icon">
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
                <li><a href="../equiperp.php">Notre équipe</a></li>
                <li><a href="../services.php">Nos services</a></li>
                <li><a href="../contact.php">Prendre rendez-vous</a></li>
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
                    <li><a href="../deconnexion.php">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="../connexion.php">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>

    <main>
        <section class="contenu">
            <h1>Téléphonie - Cabinet Paramédical Occitania</h1>

            <p>Cette page récapitule les dispositifs téléphoniques du cabinet et présente des preuves de fonctionnement grâce au serveur Asterisk et à l'analyse réseau via Wireshark.</p>

            <h2>📋 Tableau des téléphones configurés</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>Type d'appareil</th>
                        <th>Adresse IP</th>
                        <th>Affectation</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Téléphone analogique</td>
                        <td>192.168.90.91</td>
                        <td>Poste secrétaire (n°901)</td>
                    </tr>
                    <tr>
                        <td>Téléphone IP Aastra 320w</td>
                        <td>192.168.90.92</td>
                        <td>Poste dentiste (n°902)</td>
                    </tr>
                    <tr>
                        <td>Softphone secrétaire</td>
                        <td>192.168.90.26</td>
                        <td>Poste médecin généraliste (n°900)<br><em>(utilise l'IP du PC de la secrétaire)</em></td>
                    </tr>
                    <tr>
                        <td>Téléphone IP (FON-175)</td>
                        <td>192.168.90.94</td>
                        <td>Poste kiné (Hors PoC n°904)</td>
                    </tr>
                    <tr>
                        <td>Téléphone IP (analogique)</td>
                        <td>192.168.90.95</td>
                        <td>Poste kiné (Hors PoC n°905)</td>
                    </tr>
                    <tr>
                        <td>Téléphone IP (Aastra)</td>
                        <td>192.168.90.49</td>
                        <td>Poste kiné (Hors PoC n°906)</td>
                    </tr>
                </tbody>
            </table>

            <h2>Fonctionnement du serveur Asterisk</h2>
            <p>Voici une capture d'écran du serveur Asterisk affichant l'enregistrement des téléphones ainsi que le journal des appels :</p>
            <img src="../../images/asterisk_capture.png" alt="Capture d'écran du serveur Asterisk" class="screenshot">

            <h2>Analyse réseau avec Wireshark</h2>
            <p>Une capture Wireshark prouve le bon déroulement de la communication SIP entre les téléphones :</p>
            <img src="../../images/wireshark_capture.png" alt="Capture Wireshark des paquets SIP" class="screenshot">
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
