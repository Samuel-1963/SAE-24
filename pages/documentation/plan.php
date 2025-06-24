<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schéma de l'architecture réseau - Cabinet Paramédical Occitania</title>
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
            <h2>Schéma de l'architecture réseau</h2>
            <img src="../../images/plan.png" alt="Schéma du réseau SAé24" class="capture">

            <p>
                Ce schéma illustre l'architecture réseau mise en place dans le cadre de la SAé24, réalisée par notre groupe composé de Depoissier, Montaignac, Guerin, Descours et Bourmel. Le réseau repose sur une infrastructure centralisée autour d'un serveur ESXi hébergeant plusieurs machines virtuelles, permettant de gérer efficacement les services internes.
            </p>

            <p>Voici les éléments clés représentés :</p>
            <ul>
                <li>Un <strong>serveur ESXi</strong> virtualise les systèmes nécessaires à l'infrastructure.</li>
                <li>Un <strong>routeur</strong> connecté à Internet distribue la connexion au reste du réseau via un <strong>switch</strong> central.</li>
                <li>Les différents <strong>postes de travail</strong> et <strong>softphones</strong> sont répartis dans les locaux selon les besoins : cabinet du dentiste, médecin généraliste, kinésithérapeutes, etc.</li>
                <li>Un <strong>point d'accès Wi-Fi</strong> est installé dans la salle d'attente pour une connectivité sans fil.</li>
                <li>Un système de téléphonie est également intégré, incluant des <strong>téléphones IP Aastra</strong> et un <strong>boîtier ATA</strong> pour la conversion VoIP vers des téléphones analogiques.</li>
            </ul>

            <p>L'ensemble du réseau utilise une <strong>adresse IP de type 192.168.90.0/24</strong>, assurant une séparation claire des flux et une bonne organisation des services numériques au sein du cabinet paramédical.</p>
        </section>

        <section class="contenu">
            <h3>Table d'adressage réseau</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Adresse IP</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Routeur</td>
                        <td>192.168.90.254</td>
                        <td>Passerelle par défaut</td>
                    </tr>
                    <tr>
                        <td>ESXi</td>
                        <td>192.168.90.10</td>
                        <td>Hyperviseur de niveau 1</td>
                    </tr>
                    <tr>
                        <td>Windows Server 2019</td>
                        <td>192.168.90.11</td>
                        <td>AD, DHCP, DNS, fichiers, supervision</td>
                    </tr>
                    <tr>
                        <td>Ubuntu 22.04</td>
                        <td>192.168.90.12</td>
                        <td>Web, MySQL, FTP, Asterisk, SMTP, POP3</td>
                    </tr>
                    <tr>
                        <td>PC Médecin (Paul)</td>
                        <td>192.168.90.21</td>
                        <td>Poste fixe</td>
                    </tr>
                    <tr>
                        <td>PC Kinésithérapeute 1 (Lilian)</td>
                        <td>192.168.90.22</td>
                        <td>Poste fixe</td>
                    </tr>
                    <tr>
                        <td>PC Kinésithérapeute 2 (Selwan)</td>
                        <td>192.168.90.23</td>
                        <td>Poste fixe</td>
                    </tr>
                    <tr>
                        <td>PC Kinésithérapeute 3 (Samuel)</td>
                        <td>192.168.90.24</td>
                        <td>Poste fixe</td>
                    </tr>
                    <tr>
                        <td>PC Dentiste (Joy)</td>
                        <td>192.168.90.25</td>
                        <td>Poste fixe</td>
                    </tr>
                    <tr>
                        <td>PC Secrétaire</td>
                        <td>192.168.90.26</td>
                        <td>Poste fixe + opérateur téléphonique</td>
                    </tr>
                    <tr>
                        <td>Point d'accès Wi-Fi</td>
                        <td>192.168.90.50</td>
                        <td>Couverture Wi-Fi du cabinet</td>
                    </tr>
                </tbody>
            </table>
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
