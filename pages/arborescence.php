<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arborescence - Cabinet Paramédical Occitania</title>
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
    </header>

    <main class="arbo">
        <h1 class="arbo-title">Vue d'ensemble du site web</h1>

        <div class="arbo-container">
            <img src="../images/arbo.png" alt="Arborescence du site" class="arbo-image">
        </div>

        <div class="category">
            <button class="toggle-button">Pages publiques</button>
            <ul class="page-list">
                <li>
                    <a href="../index.php">Page d'accueil</a>
                    <div class="page-desc">Page d'accueil principale du site, accessible à tous.</div>
                </li>
                <li>
                    <a href="equiperp.php">Notre équipe</a>
                    <div class="page-desc">Présentation des professionnels de santé du cabinet.</div>
                </li>
                <li>
                    <a href="services.php">Nos services</a>
                    <div class="page-desc">Liste des prestations et domaines d'intervention proposés.</div>
                </li>
                <li>
                    <a href="contact.php">Prendre rendez-vous</a>
                    <div class="page-desc">Formulaire de contact pour prise de rendez-vous ou questions.</div>
                </li>
                <li>
                    <a href="traitement-rdv.php">Traitement du rendez-vous</a>
                    <div class="page-desc">Page de traitement du formulaire de rendez-vous envoyé par un utilisateur.</div>
                </li>
                <li>
                    <a href="mention.php">Mentions légales</a>
                    <div class="page-desc">Informations légales relatives au site (auteur, hébergeur...).</div>
                </li>
            </ul>
        </div>

        <div class="category">
            <button class="toggle-button">Gestion de Projet</button>
            <ul class="page-list">
            <li>
                <a href="gestion_projet/index.php">Accueil</a>
                <div class="page-desc">Page d'accueil générale de la section Gestion de Projet.</div>
            </li>
            <li>
                <a href="gestion_projet/gantt.php">Diagramme de Gantt</a>
                <div class="page-desc">Affiche la planification temporelle du projet.</div>
            </li>
            <li>
                <a href="gestion_projet/outils.php">Outils collaboratifs</a>
                <div class="page-desc">Liste des outils utilisés pour la collaboration (Trello, Drive).</div>
            </li>
            <li>
                <a href="gestion_projet/github.php">Dépôt GitHub</a>
                <div class="page-desc">Lien vers le dépôt GitHub contenant le code source du projet.</div>
            </li>
            <li>
                <a href="gestion_projet/problemes.php">Problèmes & solutions</a>
                <div class="page-desc">Historique des blocages rencontrés et des solutions mises en place.</div>
            </li>
            </ul>
        </div>

        <div class="category">
            <button class="toggle-button">Équipe et Évaluations</button>
            <ul class="page-list">
            <li>
                <a href="equipe/index.php">Accueil</a>
                <div class="page-desc">Présentation générale des membres de l'équipe.</div>
            </li>
            <li>
                <a href="equipe/syntheses.php">Synthèses personnelles</a>
                <div class="page-desc">Bilans individuels des membres de l'équipe.</div>
            </li>
            <li>
                <a href="equipe/evaluations.php">Évaluations croisées</a>
                <div class="page-desc">Auto-évaluations et évaluations entre les membres.</div>
            </li>
            </ul>
        </div>

        <div class="category">
            <button class="toggle-button">Documentation Technique</button>
            <ul class="page-list">
            <li>
                <a href="documentation/index.php">Accueil</a>
                <div class="page-desc">Introduction à la documentation technique du projet.</div>
            </li>
            <li>
                <a href="documentation/presentation_sae.php">Présentation SAé</a>
                <div class="page-desc">Résumé du projet tel que demandé dans la SAé.</div>
            </li>
            <li>
                <a href="documentation/mode_emploi.php">Mode d'emploi</a>
                <div class="page-desc">Instructions pour utiliser ou tester le système.</div>
            </li>
            <li>
                <a href="documentation/plan.php">Schéma architecture réseau</a>
                <div class="page-desc">Vue schématique de l'architecture réseau utilisée.</div>
            </li>
            <li>
                <a href="documentation/telephonique.php">Plan de numérotation</a>
                <div class="page-desc">Plan de numérotation pour les postes téléphoniques simulés.</div>
            </li>
            <li>
                <a href="documentation/logins.php">Logins et mots de passe</a>
                <div class="page-desc">Identifiants utilisés pour la démonstration du système.</div>
            </li>
            <li>
                <a href="documentation/simulation.php">Simulation Packet Tracer</a>
                <div class="page-desc">Lien ou explication d'une simulation réseau réalisée avec Cisco Packet Tracer.</div>
            </li>
            <li>
                <a href="documentation/tests.php">Résultats des tests</a>
                <div class="page-desc">Tests fonctionnels ou techniques effectués sur le projet.</div>
            </li>
            </ul>
        </div>

        <div class="category">
            <button class="toggle-button">Communication et Bilan</button>
            <ul class="page-list">
            <li>
                <a href="communication/index.php">Accueil</a>
                <div class="page-desc">Introduction à la partie communication et retour d'expérience.</div>
            </li>
            <li>
                <a href="communication/video.php">Vidéo de présentation</a>
                <div class="page-desc">Lien vers la vidéo explicative ou de promotion du projet.</div>
            </li>
            <li>
                <a href="communication/conclusion.php">Conclusion globale</a>
                <div class="page-desc">Bilan final du projet et perspectives futures.</div>
            </li>
            </ul>
        </div>

        <div class="category">
            <button class="toggle-button">Connexion / Déconnexion</button>
            <ul class="page-list">
            <li>
                <a href="connexion.php">Connexion</a>
                <div class="page-desc">Permet d'accéder à l'espace professionnel avec un identifiant.</div>
            </li>
            <li>
                <a href="deconnexion.php">Déconnexion</a>
                <div class="page-desc">Met fin à la session utilisateur et redirige vers l'accueil.</div>
            </li>
            </ul>
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
    
    <script>
        document.addEventListener('DOMContentLoaded', () => {
        document.querySelectorAll('.toggle-button').forEach(button => {
            button.addEventListener('click', () => {
            const list = button.nextElementSibling;
            list.style.display = list.style.display === 'block' ? 'none' : 'block';
            });
        });
        });
    </script>

</body>
</html>
