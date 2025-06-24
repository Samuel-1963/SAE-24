<?php session_start(); ?>
<?php
if (!isset($_SESSION['connecte']) || $_SESSION['connecte'] !== true) {
    header("Location: ../connexion.php"); // Redirige vers la page de connexion
    exit(); // Arrête le chargement de la page
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulation Packet Tracer - Cabinet Paramédical Occitania</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../images/icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        
        <a href="../../index.php" class="titre-accueil">
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
        <section class="intro">
            <h2>Simulation Packet Tracer</h2>
            <p>
                Afin de tester et valider notre infrastructure réseau avant un déploiement réel, nous avons utilisé <strong>Cisco Packet Tracer</strong>. Ce logiciel nous a permis de simuler la connectivité entre les différents sites, la configuration des routeurs, des VLANs, ainsi que les services essentiels (DHCP, DNS, téléphonie IP, etc.).
            </p>
        </section>

        <section class="contenu">
            <h3>⚠️ Version recommandée de Packet Tracer ⚠️</h3>
            <p>
                Nous recommandons vivement d'utiliser la <strong>version 8.1.1</strong> de Packet Tracer. En effet, les versions plus récentes, comme la 8.2.1 ou 8.2.3, présentent de nombreux bugs affectant la stabilité et la sauvegarde du projets complexes (erreurs de connexion pour enregistrer, etc.).
            </p>
            <p>
                Cette version est parfaitement compatible avec notre projet, et a été utilisée tout au long de notre simulation.
            </p>
            <a href="../../documents/CiscoPacketTracer_811_Windows_64bit.exe" class="bouton">⬇️ Télécharger Packet Tracer 8.1.1</a>
        </section>

        <section class="contenu">
            <h3>📁 Télécharger la simulation 📁</h3>
            <p>
                Vous pouvez télécharger notre fichier de simulation Packet Tracer ci-dessous. Il contient l'intégralité de notre infrastructure virtualisée telle que testée et validée.
            </p>
            <a href="../../documents/Simulation_SAE24.pkt" class="bouton">📥 Télécharger le fichier .pkt</a>
        </section>

        <section class="contenu">
            <h3>Aperçu de la topologie</h3>
            <img src="../../images/simulation-topologie.png" alt="Capture de la topologie Packet Tracer" class="capture">
            <p>
                Cette capture présente la topologie complète : 2 sites interconnectés via des routeurs, chacun équipé de plusieurs services. La configuration inclut des PC, des téléphones IP, et des serveurs pour la supervision et la base de données.
            </p>
        </section>

        <section class="contenu">
            <h3>Vérifications de bon fonctionnement</h3>
            <div>
                <article>
                    <img src="../../images/ping-fonctionnel.png" alt="Ping fonctionnel entre sites" class="capture">
                    <p>Les tests de connectivité (ping entre les postes des différents sites) confirment que le routage intersite est fonctionnel.</p>
                </article>
                <article>
                    <img src="../../images/internet-ok.png" alt="Internet opérationnelle" class="capture">
                    <p>Le test de connectivité au serveurs 8.8.8.8 confirment que le routage vers la simulation d'internet</p>
                </article>
                <article>
                    <img src="../../images/dhcp.png" alt="Serveurs DHCP et DNS actifs" class="capture">
                    <p>Les services DHCP fonctionnent sur chaque site, avec attribution automatique des adresses IP.</p>
                </article>
            </div>
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