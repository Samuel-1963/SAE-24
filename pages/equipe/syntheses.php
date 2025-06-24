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
    <title>Synthèses personnelles - Cabinet Paramédical Occitania</title>
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
            <h2>Synthèse personnelle</h2>
            <p>Dans le cadre de cette SAÉ, chaque membre du groupe a été invité à rédiger une synthèse personnelle mettant en lumière les missions qu'il a réalisées, les compétences mobilisées, les difficultés rencontrées ainsi qu'une autoévaluation justifiée.</p>
            <p>Cette réflexion permet de prendre du recul sur le travail accompli, d'identifier les points forts et les axes d'amélioration, tout en valorisant l'implication personnelle dans un projet collectif. Vous trouverez ci-dessous ma propre synthèse accompagnée de la note que je m'attribue.</p>
        </section>


        <div class="evaluation-container">

            <!-- Synthèse personnelle de Joy -->
            <div class="evaluation-card">
            <div class="evaluation-header">
                <h4>Synthèse personnelle de Joy</h4>
                <div class="badges">
                <span class="badge note">Autoévaluation : 15/20</span>   
                </div>
            </div>
            <div class="commentaires">
                <div class="commentaire">
                <strong>Autoévaluation :</strong>
                <p>Dans le cadre de cette SAÉ24, j'ai pu mettre en œuvre un large éventail de compétences techniques, organisationnelles et collaboratives liées au déploiement d'un système d'information. Ce projet m'a permis de mieux comprendre les étapes concrètes de mise en place d'une infrastructure réseau et serveur dans un contexte professionnel.</p>
                <p>J'ai d'abord participé à la gestion du projet, en mettant en place des outils de suivi comme Trello et un diagramme de Gantt. Cela m'a aidé à structurer le déroulement des tâches au sein de l'équipe et à mieux visualiser les priorités ainsi que les dépendances entre les différentes étapes.</p>
                <p>Sur le plan technique, j'ai contribué à la conception et à la simulation du réseau informatique à l'aide de Cisco Packet Tracer, avant de passer à la configuration réelle des équipements (routeurs, switchs).</p>
                <p>J'ai ensuite pris en charge le déploiement d'un serveur Windows, en installant les rôles nécessaires comme Active Directory, DHCP et DNS, en structurant les utilisateurs dans des groupes et en gérant leurs droits d'accès. J'ai également configuré le service de messagerie (Thunderbird), installé des applications de bureautique et de navigation web pour chaque utilisateur.</p>
                <p>Cette étape a été particulièrement complexe. J'ai rencontré, par exemple, un problème de synchronisation de l'horloge entre la machine virtuelle serveur et mon poste Windows, ce qui empêchait la communication entre le serveur et les clients. De plus, la méthode de déploiement par GPO (stratégies de groupe) m'a demandé de nombreuses recherches. Même si de nombreux tutoriels étaient disponibles sur le web et sur YouTube, il a fallu tester, comparer, et ajuster les différentes approches pour parvenir à une solution fonctionnelle.</p>
                <p>J'ai également appris qu'il était nécessaire de relancer manuellement le déploiement des applications via le serveur Windows à chaque fois qu'on souhaitait installer un nouveau logiciel. Par précaution, j'ai donc mis à disposition un répertoire partagé sécurisé contenant les applications nécessaires, afin que les utilisateurs puissent les installer manuellement en cas de problème.</p>
                <p>En parallèle, j'ai créé un script de démarrage qui affiche un message de bienvenue à chaque ouverture de session. J'ai aussi mis en place un répertoire personnel pour chaque utilisateur, avec des droits d'accès restreints pour garantir la confidentialité des données.</p>
                <p>Enfin, je me suis intéressé à la supervision réseau grâce à l'outil The Dude, ce qui m'a permis de découvrir les bases du monitoring d'équipements.</p>
                <p>J'ai proposé au groupe que chacun montre comment il avait personnellement configuré sa partie, afin que, lors des débuts de séance suivants, une autre personne prenne le relais pour faire sa configuration. Cela nous a permis de mettre en place une rotation, où chacun présentait à tour de rôle son travail. Cette démarche nous a aidés, dans un premier temps, à mieux comprendre le fonctionnement de chaque élément, puis, dans un second temps, à approfondir notre compréhension globale du système.</p>
                <p>Ce projet m'a permis de travailler en autonomie tout en collaborant avec mes camarades sur certains points clés, notamment lors des échanges de connaissances ou pour la résolution de problèmes techniques. J'ai ainsi renforcé mes compétences en configuration réseau, en administration système et en gestion de projet, tout en développant ma rigueur, ma curiosité et ma réactivité.</p>
                <p>En somme, cette SAÉ a été très formatrice et m'a permis de me projeter plus concrètement dans les missions d'un administrateur systèmes et réseaux.</p>
                </div>
            </div>
            </div>

            <!-- Synthèse personnelle de Paul -->
            <div class="evaluation-card">
            <div class="evaluation-header">
                <h4>Synthèse personnelle de Paul</h4>
                <div class="badges">
                <span class="badge note">Autoévaluation : 15/20</span>   
                </div>
            </div>
            <div class="commentaires">
                <div class="commentaire">
                <strong>Autoévaluation :</strong>
                <p>Lors de cette première séance, j'ai pris le temps de discuter avec l'équipe afin de répartir les différentes tâches et d'échanger sur le projet. De mon côté, je me suis concentré sur l'aspect architecture réseau et l'adressage IP, en collaboration avec Lilian. Nous avons commencé à élaborer un premier schéma réseau sur Draw.io, dans le but d'uniformiser la vision de l'architecture au sein de l'équipe.</p>
                <p>Par ailleurs, nous avons établi un plan d'adressage IP permettant à Selwan de commencer son travail sur le serveur ESXi dans de bonnes conditions.</p>
                <p>En parallèle, je suis allé voir Samuel en milieu de séance pour discuter avec lui de l'avancement du diagramme de Gantt. Je lui ai apporté mes remarques et suggestions afin de le compléter de manière plus précise et cohérente avec notre organisation.</p>
                <p>Je me sens bien intégré dans l'équipe. Chacun de nous a sa spécialité ou sa tâche favorite. Pour ma part, je gère principalement l'aspect réseau et son organisation. Au début, j'ai participé à l'architecture et à la conception du plan d'adressage. Ensuite, je me suis chargé de la configuration des routeurs et des appareils réseau afin d'assurer leur interaction et l'accès au réseau. J'ai rencontré des difficultés à interconnecter notre réseau avec celui de l'autre cabinet; le NAT nous a posé problème, mais cela ne m'a pas empêché de réussir. J'ai dû relier notre réseau à celui de l'autre cabinet avec un câble croisé, et j'ai utilisé NAT pour avoir accès à internet dans notre réseau.</p>
                <p>Pendant les séances intermédiaires, j'ai aidé à configurer et à observer ce que faisaient les autres membres du groupe. Grâce à ces moments, j'ai pu comprendre le fonctionnement des autres éléments du réseau. Vers les cinq dernières séances, j'ai repris le Packet Tracer que nous avions commencé pour le peaufiner et pouvoir réaliser des tests dessus.</p>
                <p>Pendant les dernières séances, nous avons beaucoup discuté du projet et de ce que chacun avait fait. J'ai donc expliqué la configuration du réseau et du Packet Tracer. J'ai aussi aidé à configurer quelques téléphones dont les configurations avaient été perdues ou modifiées par d'autres groupes.</p>
                <p>Je dirais que j'ai réalisé un bon travail, et surtout j'ai essayé de faire le mieux possible pour que les autres membres puissent comprendre facilement. J'ai fait en sorte d'être le plus souvent actif, de prendre des nouvelles des avancements pour savoir s'il y avait besoin d'aide quand j'avais fini mes tâches de la journée.</p>
                <p>Je me donne la note de 15/20. J'aurais pu faire plus de tâches en général, et mon rôle dans le groupe était important surtout en début de séances pour le bon démarrage, mais une fois la séance lancée j'avais moins d'importance. J'avais plus la forme d'un soutien, même si je prenais un maximum d'initiatives pour faire gagner du temps au groupe.</p>
                </div>
            </div>
            </div>

            <!-- Synthèse personnelle de Lilian -->
            <div class="evaluation-card">
            <div class="evaluation-header">
                <h4>Synthèse personnelle de Lilian</h4>
                <div class="badges">
                <span class="badge note">Autoévaluation : 15/20</span>   
                </div>
            </div>
            <div class="commentaires">
                <div class="commentaire">
                <strong>Autoévaluation :</strong>
                <p>Durant cette SAE24, j'ai eu l'occasion de travailler sur différents aspects du projet, en collaboration avec les membres de mon groupe. L'ambiance était très bonne, chacun participait activement, et l'entraide était naturelle.</p>
                <p>Tout d'abord, avec Samuel, nous avons configuré le diagramme de Gantt afin de planifier les différentes étapes du projet. Une fois cette tâche terminée, je suis allé aider Paul sur Packet Tracer et l'architecture du site physique, où j'ai configuré un routeur. Cependant, comme Paul préférait s'en occuper lui-même, je l'ai laissé continuer.</p>
                <p>Je me suis alors tourné vers Selwan, avec qui j'ai travaillé sur la configuration des téléphones IP et du serveur Asterisk. Une fois cette configuration terminée à 100 %, nous avons noté les problèmes rencontrés ainsi que les solutions apportées.</p>
                <p>Ensuite, je suis allé voir ce que faisaient les autres membres du groupe, pour comprendre leur travail, les raisons de leurs choix techniques, et les erreurs rencontrées. Cela m'a permis d'élargir mes connaissances et de mieux comprendre le projet dans sa globalité.</p>
                <p>Enfin, je suis retourné sur la partie téléphonie afin d'expliquer à mon tour le fonctionnement du système aux autres membres.</p>
                <p>Avec Selwan, nous avons configuré plusieurs modèles de téléphones : un Aastra, un Fortinet, un Doro Congress150, ainsi qu'un téléphone logiciel 3CX. Chaque appareil avait ses spécificités, ce qui nous a obligés à adapter certaines configurations, notamment au niveau des adresses IP, des ports SIP, et des paramètres liés à l'enregistrement des postes sur le serveur.</p>
                <p>Nous avons activé les fonctionnalités essentielles pour simuler un environnement professionnel complet, telles que le transfert d'appel, la messagerie vocale, les appels internes, la mise en attente, et la gestion des lignes multiples. L'objectif était de reproduire le fonctionnement d'un petit standard téléphonique d'entreprise, avec plusieurs utilisateurs pouvant communiquer entre eux de manière fluide et organisée.</p>
                <p>L'ensemble des tests a été validé, ce qui signifie que les communications étaient fonctionnelles dans les deux sens, et que les téléphones réagissaient bien aux différentes commandes SIP.</p>
                <p>Tout au long de cette configuration, nous avons rencontré quelques problèmes : incompatibilité avec certains codecs, mauvaise attribution d'adresses IP dynamiques via DHCP, ou encore des ports bloqués sur le pare-feu de certaines machines. Nous avons pris le temps de noter chaque problème, de chercher une solution, puis de documenter tout cela pour permettre aux autres membres du groupe (et à nous-mêmes) de mieux comprendre ce qui avait été fait et pourquoi.</p>
                <p>Ce travail m'a beaucoup appris, autant sur la configuration pratique de la téléphonie IP que sur la résolution de problèmes techniques en équipe. Cela m'a aussi permis de mieux comprendre le rôle d'un serveur Asterisk dans une architecture réseau moderne.</p>
                <p>Ce que les autres ont fait m'a montré comment faire, ainsi que les problèmes rencontrés :</p>
                <ul>
                    <li><strong>Samuel :</strong> site web, box Wi-Fi, gestion de projet</li>
                    <li><strong>Selwan :</strong> installation d'ESXi, paramétrage des machines virtuelles, installation de XAMPP</li>
                    <li><strong>Paul :</strong> Packet Tracer, configuration réseau</li>
                    <li><strong>Joy :</strong> Packet Tracer, configuration d'un serveur Windows Server 2019, DHCP, DNS, partage d'applications, création d'espaces de travail dédiés pour chaque utilisateur</li>
                </ul>
                <p>J'ai adoré cette SAE car l'ambiance de groupe était excellente. Tout le monde était impliqué et personne ne restait sans rien faire. Dès qu'un membre avait fini sa tâche, il allait voir les autres pour aider ou apprendre de leur travail. Cela a vraiment renforcé la cohésion du groupe.</p>
                <p>Pour mon travail personnel, je me mettrais une note de <strong>14,5</strong> ou <strong>15 sur 20</strong>. J'ai bien travaillé, j'ai participé à plusieurs aspects du projet, mais je pense que j'aurais pu être encore plus utile. Cela dit, la répartition des tâches étant bien faite, je n'ai pas eu besoin d'intervenir partout.</p>
                </div>
            </div>
            </div>

            <!-- Synthèse personnelle Samuel -->
            <div class="evaluation-card">
            <div class="evaluation-header">
                <h4>Synthèse personnelle de Samuel</h4>
                <div class="badges">
                <span class="badge note">Autoévaluation : 16/20</span>   
                </div>
            </div>
            <div class="commentaires">
                <div class="commentaire">
                <strong>Autoévaluation :</strong>
                <p>Durant cette SAÉ, j'ai pris en charge l'ensemble du développement du site web retraçant notre projet. Cela comprenait la conception des pages en HTML, CSS et PHP, la création de la base de données pour la consultation des mesures et la mise en place d'un espace d'administration sécurisé. Ce site avait pour but de centraliser notre avancement et de servir de support de restitution. J'ai veillé à ce qu'il soit régulièrement mis à jour et documenté.</p>
                <p>En parallèle, j'ai assumé le rôle de chef de projet. Même si ce rôle m'a parfois semblé difficile à cerner, j'ai essayé de suivre le travail de chacun, de m'assurer que les objectifs étaient clairs, et de coordonner les efforts du groupe. J'ai régulièrement demandé des retours sur le site pour garantir un rendu qui soit à la fois complet et cohérent avec les attentes de tous.</p>
                <p>J'ai consacré beaucoup de temps, y compris en dehors des heures de cours, pour améliorer le site, corriger les bugs, ajouter de nouvelles fonctionnalités et intégrer les contributions des autres membres. J'ai aussi documenté les étapes clés de manière claire afin de faciliter la relecture et la compréhension de notre démarche.</p>
                <p>Si je devais pointer un axe d'amélioration, ce serait mon implication dans les parties réseau et système. J'aurais pu davantage collaborer sur ces aspects pour mieux comprendre ce que les autres réalisaient et les aider plus concrètement. De même, une meilleure anticipation des tâches en tant que chef de projet aurait pu renforcer l'efficacité collective.</p>
                <p>Je pense avoir joué un rôle central dans la réussite du projet, notamment grâce au site qui en constitue la vitrine. Pour l'ensemble du travail fourni, ma régularité, mon autonomie et ma capacité à aller jusqu'au bout de mes responsabilités, je m'attribue la note de <strong>16/20</strong>.</p>
                </div>
            </div>
            </div>

            <!-- Synthèse personnelle de Selwan -->
            <div class="evaluation-card">
            <div class="evaluation-header">
                <h4>Synthèse personnelle de Selwan</h4>
                <div class="badges">
                <span class="badge note">Autoévaluation : 16/20</span>   
                </div>
            </div>
            <div class="commentaires">
                <div class="commentaire">
                <strong>Autoévaluation :</strong>
                <p>Pendant l'ensemble du projet, je me suis principalement occupé de la mise en place des VMs ainsi que de la configuration avancée du système de téléphonie sur IP, en lien avec le serveur Asterisk.</p>
                <p>Dans un premier temps, j'ai procédé à l'installation et à la configuration de l'hyperviseur ESXi, sur lequel j'ai déployé deux machines virtuelles : une sous Ubuntu, servant de base pour Asterisk et XAMPP, et une autre sous Windows Server, destinée à la gestion des services Microsoft et des utilisateurs. J'ai ensuite installé le serveur XAMPP pour l'hébergement local du site web, et mis en place Asterisk en important des fichiers de configuration existants que j'ai adaptés aux besoins spécifiques du projet.</p>
                <p>Une fois le serveur Asterisk fonctionnel, j'ai travaillé sur le paramétrage complet du système de téléphonie, incluant plusieurs types de téléphones : deux téléphones IP, un téléphone Wi-Fi et un téléphone analogique, tous testés et configurés pour interagir avec notre serveur Asterisk.</p>
                <p>J'ai implémenté et validé plusieurs fonctionnalités avancées liées à la téléphonie d'entreprise, parmi lesquelles :</p>
                <ul>
                    <li>Le paramétrage des tonalités DTMF pour assurer une compatibilité parfaite avec les menus interactifs</li>
                    <li>Le transfert d'appel via des raccourcis pour la mise en attente</li>
                    <li>L'interception d'appel</li>
                    <li>L'enregistrement de l'appel</li>
                    <li>La création de groupes d'appel, pour permettre la sonnerie simultanée de plusieurs postes</li>
                    <li>La gestion des boîtes vocales, avec une configuration spécifique par extension</li>
                    <li>L'exploitation de la messagerie unifiée, grâce à l'installation de exim4, d'un serveur POP, et de la configuration de Thunderbird pour la réception des messages vocaux</li>
                    <li>Et enfin, la création d'un Menu Vocal Interactif (IVR) avec synthèse vocale, permettant d'offrir une navigation intuitive par clavier pour accéder à différents services</li>
                </ul>
                </div>
            </div>
            </div>


        </div>
    
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