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
    <title>Tests - Cabinet Paramédical Occitania</title>
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
            <h2>Preuve de concept (PoC) - Validation du réseau</h2>
            <p>
                Pour que notre réseau fonctionne, nous devons d'abord vérifier que les appareils communiquent bien entre eux. Pour ce faire, nous avons effectué plusieurs tests successifs, illustrés ci-dessous.
            </p>
        </section>

        <section class="contenu">
            <h3>Test de connectivité interne</h3>
            <p>
                Nous avons réalisé deux tests de ping : l'un vers l'interface du routeur de notre réseau.
            </p>
            <!-- Image 1 : ping vers interface routeur -->
            <figure>
                <img src="../../images/ping_routeur_interface1.png" alt="Résultat du ping vers l'interface 1 du routeur" class="capture"/>
                <figcaption>Ping vers la première interface du routeur</figcaption>
            </figure>

            <p>
                Puis, vers sa deuxième interface, reliée au réseau de la salle.
            </p>
            <!-- Image 2 : ping vers interface réseau salle -->
            <figure>
                <img src="../../images/ping_routeur_interface2.png" alt="Résultat du ping vers la deuxième interface du routeur" class="capture"/>
                <figcaption>Ping vers la deuxième interface, côté réseau de la salle</figcaption>
            </figure>
        </section>

        <section class="contenu">
            <h3>Test d'accès Internet</h3>
            <p>
                Une fois cela fait, nous savons que les PC sont bien connectés au réseau local. Le deuxième objectif est de s'assurer que nous avons accès à Internet. Pour ce faire, nous avons effectué un ping vers <strong>sfr.fr</strong>, ce qui permet de vérifier que notre DNS fonctionne bien et que le NAT sur le routeur est bien configuré.
            </p>
            <!-- Image 3 : ping vers sfr.fr -->
            <figure>
                <img src="../../images/ping_sfr.png" alt="Résultat du ping vers sfr.fr" class="capture"/>
                <figcaption>Ping vers sfr.fr pour valider l'accès Internet</figcaption>
            </figure>

            <p>
                Puis, pour s'assurer que nous passons par les bons chemins, nous avons effectué un tracert pour analyser le trajet pendant la création du réseau.
            </p>
            <!-- Image 4 : tracert -->
            <figure>
                <img src="../../images/tracert_internet.png" alt="Trace route vers Internet" class="capture"/>
                <figcaption>Analyse du chemin réseau avec tracert</figcaption>
            </figure>
        </section>

        <section class="contenu">
            <h3>Test d’interconnexion réseau entre sites</h3>
            <p>
                Nous pouvons communiquer entre nous et nous avons accès à Internet. Ce qui manque, c'est l'interconnexion réseau. Alors, nous effectuons un ping vers l'un de leurs appareils, puis un tracert pour nous assurer du bon acheminement.
            </p>

            <p><strong>Ping :</strong></p>
            <!-- Image 5 : ping vers appareil distant -->
            <figure>
                <img src="../../images/ping_interco.png" alt="Résultat du ping vers un appareil distant" class="capture"/>
                <figcaption>Ping vers un appareil distant sur le réseau partenaire</figcaption>
            </figure>

            <p><strong>Tracert :</strong></p>
            <!-- Image 6 : tracert vers appareil distant -->
            <figure>
                <img src="../../images/tracert_interco.png" alt="Trace route vers un appareil distant" class="capture"/>
                <figcaption>Tracert vers un appareil distant pour valider le routage</figcaption>
            </figure>
        </section>

        <section class="contenu">
            <h3>Validation du serveur Asterisk</h3>
            <p>
                Enfin, nous voulons vérifier que le serveur Asterisk a bien été configuré. Pour ce faire, nous passons des appels pour observer le CLI et nous vérifions que les téléphones apparaissent bien dans la commande <code>sip show peers</code>.
            </p>

            <p><strong>CLI après un appel :</strong></p>
            <!-- Image 7 : CLI Asterisk -->
            <figure>
                <img src="../../images/asterisk_cli_call.png" alt="Capture CLI Asterisk après un appel" class="capture"/>
                <figcaption>Affichage CLI Asterisk suite à un appel</figcaption>
            </figure>

            <p><strong>Liste des peers SIP :</strong></p>
            <!-- Image 8 : sip show peers -->
            <figure>
                <img src="../../images/asterisk_sip_peers.png" alt="Liste des peers SIP dans Asterisk" class="capture"/>
                <figcaption>Commande <code>sip show peers</code> confirmant les téléphones enregistrés</figcaption>
            </figure>
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