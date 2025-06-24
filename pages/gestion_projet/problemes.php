<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problèmes & solutions - Cabinet Paramédical Occitania</title>
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
            <h2>Problèmes rencontrés & solutions apportées</h2>
            <p>
                Tout au long de ce projet, plusieurs problèmes techniques ont été rencontrés. Certains se sont révélés complexes à résoudre, tandis que d'autres ont demandé principalement du temps et de la documentation. Cette section présente les principales difficultés et les solutions mises en place.
            </p>
        </section>

        <section class="contenu">
            <h3>Téléphonie analogique & boîtier ATA (PAP2)</h3>
            <p>
                La configuration du téléphone analogique a posé de nombreuses difficultés, principalement à cause de l'absence d'interface graphique et du comportement instable du boîtier ATA (type PAP2). Ce dernier ne se connectait qu'une fois sur vingt, les autres tentatives échouant avec un voyant rouge allumé.
            </p>
            <p>
                Même en conservant une configuration qui fonctionnait la veille, il arrivait que le téléphone cesse de fonctionner sans raison apparente. La seule solution temporaire efficace a été de réinitialiser l'ensemble du matériel et de reconfigurer depuis zéro.
            </p>
        </section>

        <section class="contenu">
            <h3>Téléphone Aastra instable</h3>
            <p>
                Le téléphone IP de marque Aastra se déconnectait régulièrement, ce qui était frustrant en séance. Après plusieurs essais, le problème a été partiellement résolu en modifiant les paramètres de mise en veille. La temporisation a été fixée à 1 heure pour éviter les déconnexions intempestives.
            </p>
        </section>

        <section class="contenu">
            <h3>Difficultés avec Asterisk</h3>
            <p>
                La majorité des problèmes techniques proviennent de l'utilisation d'Asterisk. Sa configuration en ligne de commande, sans interface graphique, complexifie les manipulations, surtout pour la téléphonie analogique.
            </p>
            <p>
                Malgré tout, à force de tests, recherches et reconfigurations, un fonctionnement stable a pu être obtenu, notamment en utilisant des commandes comme <code>sip show peers</code> et en analysant le retour du CLI.
            </p>
        </section>

        <section class="contenu">
            <h3>Interconnexion réseau entre les sites</h3>
            <p>
                Lors de l'interconnexion entre les deux sites, l'activation du NAT empêchait toute communication entre eux. Dès que le NAT était désactivé, la liaison redevenait fonctionnelle. Après de nombreux essais infructueux, une solution alternative a été adoptée : un lien physique direct entre les deux routeurs.
            </p>
            <p>
                Un câble RJ45 croisé a été connecté sur une troisième interface de chaque routeur, permettant une communication stable sans perturber l'accès à Internet.
            </p>
        </section>

        <section class="contenu">
            <h3>Déploiement de logiciels via GPO</h3>
            <p>
                La mise en place du déploiement par GPO a nécessité de longues recherches malgré la présence de tutoriels. Il a fallu tester plusieurs approches avant d'en obtenir une fonctionnelle.
            </p>
            <p>
                Une découverte importante a été que l'installation d'un nouveau logiciel via GPO nécessite un redéploiement manuel depuis le serveur. Pour palier à cela, un partage réseau sécurisé contenant les applications a été mis à disposition des utilisateurs en cas de besoin.
            </p>
        </section>

        <section class="contenu">
            <h3>Installation d'ESXi et XAMPP</h3>
            <p>
                L'installation des outils comme ESXi et XAMPP s'est globalement bien passée. Seuls quelques petits soucis liés à un manque d'information ou à des erreurs de compréhension sont survenus, mais ils ont été rapidement corrigés grâce à une recherche approfondie.
            </p>
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