<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Évaluations croisées - Cabinet Paramédical Occitania</title>
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
      <section class="intro">
        <h2>Évaluations croisées des membres de l'équipe</h2>
        <p>Chaque membre a été évalué par ses pairs sur différents critères tels que l'implication, les idées apportées, la participation et la transmission des compétences. Retrouvez ci-dessous les notes moyennes ainsi que les commentaires de chacun.</p>
      </section>

      <div class="evaluation-container">

        <!-- Samuel -->
        <div class="evaluation-card">
          <div class="evaluation-header">
            <h4>Évaluation de Samuel</h4>
            <div class="badges">
              <span class="badge note">Moyenne : 15.00</span> 
              <span class="badge etoile">⭐⭐⭐</span>
            </div>
          </div>
          <div class="commentaires">
            <div class="commentaire"><strong>Selwan :</strong>
              <p>Samuel a brillamment pris en charge toute la partie développement web, en HTML, CSS et PHP. À première vue, cela pourrait sembler limité en volume, mais en réalité, la qualité du site, sa structure et les fonctionnalités qu'il a mis en place témoignent d'un travail conséquent et maîtrisé. Bien qu'il n'ait pas proposé d'idées oralement durant les échanges de groupe, il s'est montré particulièrement créatif et impliqué, concrétisant ses idées de manière autonome. Il sollicitait régulièrement des retours sur son travail, preuve d'une vraie volonté de bien faire. S'il avait pu participer un peu plus aux tâches des autres membres, son implication aurait été encore plus remarquable. Son travail reste néanmoins d'une excellente qualité et essentiel pour la réussite du projet. <strong>Note : 15/20</strong></p>
            </div>
            <div class="commentaire"><strong>Joy :</strong>
              <p>Dès le début, il a commencé le site web, qu'il fait évoluer séance après séance. Grâce à lui, l'ensemble du projet est retracé sur ce site. En tant que chef de groupe, il supervise la gestion de tous les membres afin d'assurer une coordination optimale. Je lui attribue la note de <strong>15/20.</strong></p>
            </div>
            <div class="commentaire"><strong>Paul :</strong>
              <p>Samuel s'est beaucoup occupé du site tout au long de la SAÉ. Il a donné quelques idées et a attribué les rôles ou expliqué comment optimiser le groupe. Il était un peu plus discret mais a su faire ce qu'on lui a demandé ou attribué. Il nous a rapidement expliqué son code du site et fait des démonstrations. En ce qui concerne son rôle de chef de projet, je pense qu'il aurait dû être plus présent en termes de discussion ou d'initiative, mais c'est un rôle assez compliqué qui s'apprend avec la pratique. Je dirais que Samuel mérite la note de <strong>14/20.</strong></p>
            </div>
            <div class="commentaire"><strong>Lilian :</strong>
              <p>Samuel s'est occupé du site web en gérant toute sa structure, son contenu et sa mise en ligne. Il a également réalisé le diagramme de Gantt pour organiser le projet. Enfin, il a aidé Selwan à configurer correctement XAMPP pour le serveur local. Je lui mettrais la note de <strong>16/20.</strong></p>
            </div>
          </div>
        </div>

        <!-- Selwan -->
        <div class="evaluation-card">
          <div class="evaluation-header">
            <h4>Évaluation de Selwan</h4>
            <div class="badges">
              <span class="badge note">Moyenne : 16.25</span> 
              <span class="badge etoile">⭐⭐⭐</span>
            </div>
          </div>
          <div class="commentaires">
            <div class="commentaire"><strong>Joy :</strong>
              <p>Selwan s'est investi dès le début de cette SAE en mettant en place l'hyperviseur ESXi, qui constitue le pilier du projet. Grâce à son travail, nous avons pu rapidement entamer les tâches principales, ce qui nous a fait gagner un temps précieux. Par la suite, il a enchaîné avec la configuration des téléphones via le serveur Asterisk, ainsi que la mise en place des services sur la machine virtuelle Ubuntu. Je lui attribue la note de <strong>16/20.</strong></p>
            </div>
            <div class="commentaire"><strong>Paul :</strong>
              <p>Selwan est l'un des membres les plus impliqués et a joué un rôle crucial. Il s'occupe de la configuration de l'hyperviseur et de la machine virtuelle Linux. Il a toujours été présent pour faire ce qu'on lui demandait et a toujours été actif dans son travail. Vers les dernières séances, il s'est occupé de nous expliquer le fonctionnement du serveur Asterisk et comment il a fait la configuration de l'hyperviseur ESXi. Je lui donnerais la note de <strong>16/20.</strong></p>
            </div>
            <div class="commentaire"><strong>Lilian :</strong>
              <p>Selwan s'est chargé de l'installation et du paramétrage du serveur ESXi, où il a hébergé deux machines virtuelles : une Ubuntu et une Windows Server 2019. Il a aussi configuré XAMPP pour le serveur web. Par ailleurs, il a collaboré avec moi sur la mise en place d'Asterisk et la configuration des téléphones IP. Je lui attribue une note de <strong>17/20</strong> pour son travail sérieux et efficace.</p>
            </div>
            <div class="commentaire"><strong>Samuel :</strong>
              <p>Selwan est sans doute celui qui a dû faire face aux plus grandes difficultés techniques, mais aussi celui qui les a le mieux surmontées. Il a pris en charge l'installation de l'hyperviseur ESXi, la création et configuration des VM, ainsi que l'installation des services sur la VM Ubuntu. Il a aussi mis en place Asterisk et assuré son bon fonctionnement. Il a travaillé sur des tâches essentielles, souvent complexes, avec persévérance et rigueur. Son investissement technique et sa volonté de bien faire ont été remarquables. Je lui attribue la note de <strong>16/20.</strong></p>
            </div>
          </div>
        </div>

        <!-- Joy -->
        <div class="evaluation-card">
          <div class="evaluation-header">
            <h4>Évaluation de Joy</h4>
            <div class="badges">
              <span class="badge note">Moyenne : 15,75</span> 
              <span class="badge etoile">⭐⭐⭐</span>
            </div>
          </div>
          <div class="commentaires">
            <div class="commentaire"><strong>Selwan :</strong>
              <p>Joy a géré avec assurance l'administration des services et des utilisateurs, en particulier sur la machine virtuelle Windows Server mise en place après l'activation de l'ESXi. Expert dans ce domaine, il a su déployer des services critiques comme le DHCP, qui ont permis le bon fonctionnement des équipements, notamment les téléphones Aastra. Il s'est aussi occupé de la gestion des utilisateurs, de l'outil The Dude, ainsi que de Thunderbird en collaboration avec moi. Autonome, rigoureux et très efficace, Joy a joué un rôle clé dans l'infrastructure logicielle du projet. <strong>Note : 15/20</strong></p>
            </div>
            <div class="commentaire"><strong>Paul :</strong>
              <p>Joy a toujours voulu bien faire avec le serveur Windows et a souvent cherché des solutions à ses problèmes et à la configuration. Il a donné son avis sur beaucoup de choses que nous faisions et a proposé des solutions alternatives pour améliorer notre projet. Il a fait preuve de beaucoup d'initiatives dans ce qu'il y avait à faire. Joy a toujours voulu comprendre ce que faisait chacun en essayant de reproduire ce que nous avions fait et surtout en nous demandant des explications. Je lui donnerais la note de <strong>16/20.</strong></p>
            </div>
            <div class="commentaire"><strong>Lilian :</strong>
              <p> Joy s'est occupé de réaliser le projet sur Packet Tracer avec Paul, puis il a configuré un serveur Windows Server 2019 depuis zéro. Il a mis en place les services DHCP, DNS, le partage d'applications, ainsi que la création d'espaces de travail dédiés pour chaque utilisateur. Je lui attribue la note de <strong>17/20</strong> pour la qualité de son travail et son implication.</p>
            </div>
            <div class="commentaire"><strong>Samuel :</strong>
              <p>Joy a été responsable de la configuration du serveur Windows Server 2019. Il a mis en place les services réseau comme DHCP et DNS, géré la création des utilisateurs et les espaces de travail. Son travail a été structuré, propre, et surtout très fiable. Il s'est montré autonome, méthodique et a toujours su trouver des solutions aux problèmes rencontrés. Grâce à lui, toute la partie Windows du projet a fonctionné de manière fluide. Il a aussi contribué à la bonne organisation du travail collectif. Je lui attribue la note de <strong>15/20</strong> pour la qualité et la rigueur de son travail.</p>
            </div>
          </div>
        </div>

        <!-- Paul -->
        <div class="evaluation-card">
          <div class="evaluation-header">
            <h4>Évaluation de Paul</h4>
            <div class="badges">
              <span class="badge note">Moyenne : 16,125</span> 
              <span class="badge etoile">⭐⭐⭐</span>
            </div>
          </div>
          <div class="commentaires">
            <div class="commentaire"><strong>Selwan :</strong>
              <p>Paul a assuré l'ensemble de la partie câblage et paramétrage réseau. Il a notamment configuré les équipements, en particulier le routeur, garantissant ainsi la connectivité de tout le groupe. Grâce à lui, nous avons pu travailler dans de bonnes conditions, avec un réseau fonctionnel dès les premières phases du projet. Il a également rédigé les scripts de configuration et s'implique désormais dans une supervision plus large du travail du groupe, s'intéressant à plusieurs domaines. Son engagement constant et son efficacité technique justifient pleinement sa place centrale dans le projet. <strong>Note : 16/20</strong></p>
            </div>
            <div class="commentaire"><strong>Joy :</strong>
              <p>Après avoir organisé le plan d'adressage pour assurer une bonne structuration du réseau, il a directement enchaîné avec la partie câblage. Il a rencontré quelques problèmes, qu'il a rapidement su résoudre, ce qui a permis de poursuivre efficacement la mise en place du serveur Windows. À chaque séance, il a proposé des idées sur les tâches à réaliser et celles restant à faire. Je lui attribue la note de <strong>16/20.</strong></p>
            </div>
            <div class="commentaire"><strong>Lilian :</strong>
              <p>Paul s'est chargé de concevoir l'architecture du réseau physique, puis il a réalisé la topologie sur Packet Tracer. Il a configuré tous les switchs et le routeur, en assurant la communication avec l'autre groupe. Il a également apporté un petit coup de main sur la partie téléphonie. Je lui attribuerais la note de <strong>17,5/20</strong> pour son implication.</p>
            </div>
            <div class="commentaire"><strong>Samuel :</strong>
              <p>Paul a fait un excellent travail tout au long de la SAÉ. Il s'est occupé de l'architecture physique du réseau, du câblage, puis de la configuration complète du routeur et des switchs. Grâce à lui, l'infrastructure réseau a pu être rapidement fonctionnelle. Il a aussi participé à la configuration des téléphones et a même touché brièvement au développement web. Sa capacité à intervenir efficacement dans plusieurs domaines et à résoudre les problèmes techniques a été très précieuse pour l'équipe. Pour son sérieux et sa polyvalence, je lui attribue la note de <strong>15/20.</strong></p>
            </div>
          </div>
        </div>

        <!-- Lilian -->
        <div class="evaluation-card">
          <div class="evaluation-header">
            <h4>Évaluation de Lilian</h4>
            <div class="badges">
              <span class="badge note">Moyenne : 15.00</span> 
              <span class="badge etoile">⭐⭐⭐</span>
            </div>
          </div>
          <div class="commentaires">
            <div class="commentaire"><strong>Selwan :</strong>
              <p>Lilian s'est distinguée par sa polyvalence et son engagement sans faille. Véritable soutien de l'équipe, il a su intervenir sur de nombreux aspects du projet et prêter main forte là où il était nécessaire. J'ai particulièrement travaillé avec lui sur le paramétrage des téléphones, une tâche complexe et chronophage que nous avons pu mener à bien ensemble grâce à sa présence. Il a été à la fois un binôme précieux et un membre moteur de l'équipe, toujours volontaire pour aider et résoudre les problèmes. <strong>Note : 15/20</strong></p>
            </div>
            <div class="commentaire"><strong>Joy :</strong>
              <p>Lilian a assuré la mise en place des logiciels collaboratifs tels que Gantt et Trello. Il s'est beaucoup investi dans les différentes tâches de chacun. Il a effectué la configuration des fichiers Astérix pour le bon fonctionnement des téléphones, puis s'est occupé de planifier le contenu de la vidéo afin d'assurer une bonne organisation. Je lui attribut la note de <strong>15/20</strong>.</p>
            </div>
            <div class="commentaire"><strong>Paul :</strong>
              <p>Lilian a toujours été investi dans le but d'aider ou de comprendre ce que faisaient les autres. Il a beaucoup aidé Selwan pour la configuration des téléphones. Au début, il était venu avec moi pour faire le plan d'adressage et l'architecture du réseau. Il a apporté quelques idées sur la façon dont nous devions configurer le réseau pour l'optimiser. Il a expliqué comment il a configuré les téléphones et, surtout, il est venu vers nous pour comprendre nos tâches. Pour moi, j'attribue à Lilian la note de <strong>15/20.</strong></p>
            </div>
            <div class="commentaire"><strong>Samuel :</strong>
              <p>Lilian a été un membre moteur et polyvalent tout au long du projet. Il s'est investi dans la gestion des outils collaboratifs (Trello, Gantt), a participé à l'élaboration du plan d'adressage réseau, et a aidé activement à la configuration des téléphones. Il a souvent pris le rôle de soutien auprès de différents membres du groupe, apportant des idées, de l'aide technique, et de la coordination. Même si ses interventions ont été variées et parfois dispersées, elles ont toutes eu un impact positif sur l'avancement global du projet. Je lui attribue la note de <strong>15/20.</strong></p>
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