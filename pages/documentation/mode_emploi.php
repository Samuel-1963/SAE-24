<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mode d'emploi - Cabinet Paramédical Occitania</title>
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
            <h2>Mode d'emploi de la preuve de concept</h2>
            <p>Ce mode d'emploi explique comment démarrer, tester et interagir avec notre infrastructure réseau déployée dans le cadre de la SAé24. Il s'applique à la <strong>preuve de concept physique</strong> mise en place avec du matériel réel à l'IUT.</p>
            <p>Suivez pas à pas les étapes ci-dessous pour démarrer le réseau, vérifier les services et réaliser les tests de bon fonctionnement.</p>
        </section>

        <section class="contenu">
            <h3>Étape 1 - Démarrer l'infrastructure</h3>
            <ul>
                <li>Allumez le <strong>routeur</strong> pour activer la distribution du réseau.
                    <button class="toggle-btn" onclick="toggleConfig()">📂 Voir la configuration du routeur</button>
                    <div id="config-router" class="config-hidden">
                        <h4>Configuration du Routeur SAé 24</h4>

                        <h5>🔌 Schéma de branchement</h5>
                        <ol>
                            <li>Console : PC de configuration → Port console du routeur (câble console)</li>
                            <li>Réseau local (192.168.90.0/24) : Port Gi0/0/0 → Switch local</li>
                            <li>Réseau salle (192.168.105.0/24) : Port Gi0/0/1 → Switch salle</li>
                        </ol>

                        <h5>🛠️ Configuration à appliquer via PuTTY (mode série)</h5>
                        <pre><code>
                            enable
                            configure terminal

                            ! Configuration des interfaces
                            interface GigabitEthernet0/0/0
                            ip address 192.168.90.254 255.255.255.0
                            ip nat inside
                            negotiation auto
                            no shutdown
                            exit

                            interface GigabitEthernet0/0/1
                            ip address 192.168.105.90 255.255.255.0
                            ip nat outside
                            negotiation auto
                            no shutdown
                            exit

                            interface GigabitEthernet0/0/2
                            ip address 192.168.10.253 255.255.255.0
                            negotiation auto
                            no shutdown
                            exit

                            ! Configuration du NAT
                            ip nat inside source list 1 interface GigabitEthernet0/0/1 overload

                            ! Configuration des routes statiques
                            ip route 0.0.0.0 0.0.0.0 192.168.105.254
                            ip route 192.168.42.0 255.255.255.0 192.168.10.254

                            ! Configuration de la liste d'accès pour le NAT
                            access-list 1 permit 192.168.90.0 0.0.0.255

                            ! Activation du serveur HTTP pour la gestion
                            ip http server
                            ip http secure-server

                            ! Configuration des lignes VTY pour l'accès à distance
                            line vty 0 4
                            login local
                            transport input ssh
                            exit

                            ! Configuration de la ligne console
                            line con 0
                            exec-timeout 0 0
                            logging synchronous
                            exit

                            end
                        </code></pre>

                        <h5>🔎 Vérifications</h5>
                        <ul>
                            <li><code>show running-config</code></li>
                            <li><code>show ip interface brief</code></li>
                            <li><code>ping 8.8.8.8</code></li>
                        </ul>
                    </div>
                </li>

                <li>Vérifiez que le <strong>switch</strong> est bien connecté au routeur et sous tension.</li>
                <li>Allumez le <strong>serveur ESXi</strong> (Dell ou HP selon le matériel utilisé).</li>
                <li>Démarrez les deux machines virtuelles :
                    <ul>
                        <li>
                            <strong>Ubuntu 22.04</strong> (services web, Asterisk, FTP...)
                            <button class="toggle-btn" onclick="toggleUbuntu()">📂 Voir la procédure de lancement</button>

                            <div id="config-ubuntu" class="config-hidden">
                                <h4>Procédure pour lancer les services sur la VM Ubuntu</h4>

                                <h5>Services à lancer manuellement (si le script automatique ne fonctionne pas)</h5>
                                <ol>
                                <li><strong>Asterisk</strong> (service VoIP) :
                                    <pre><code>sudo asterisk -vvvvc</code></pre>
                                    <em>Pour accéder à la console Asterisk après démarrage :</em>
                                    <pre><code>sudo asterisk -r</code></pre>
                                </li>

                                <li><strong>XAMPP</strong> (serveur web) :
                                    <pre><code>sudo /opt/lampp/lampp start</code></pre>
                                    <em>Pour vérifier l'état :</em>
                                    <pre><code>sudo /opt/lampp/lampp status</code></pre>
                                </li>
                                </ol>

                                <h5>Vérification des téléphones SIP</h5>
                                <p>Dans la console Asterisk (<code>sudo asterisk -r</code>), exécutez :</p>
                                <pre><code>sip show peers</code></pre>
                                <p><em>Résultat attendu :</em> Tous les téléphones configurés doivent apparaître avec leur statut.</p>

                                <h5>Gestion du site web via XAMPP</h5>
                                <h4>Accès au site :</h4>
                                <ul>
                                <li>Accessible via l'adresse IP de la VM : <code>192.168.90.12</code></li>
                                <li>URL du site : <code>http://192.168.90.12/sae24</code></li>
                                </ul>

                                <h4>Mise à jour du site avec FileZilla :</h4>
                                <ol>
                                <li><strong>Paramètres de connexion</strong> :
                                    <ul>
                                    <li>Hôte : <code>192.168.90.12</code></li>
                                    <li>Nom d'utilisateur : <code>daemon</code></li>
                                    <li>Mot de passe : <code>XAMPP</code></li>
                                    <li>Port : <code>21</code></li>
                                    </ul>
                                </li>

                                <li><strong>Procédure de mise à jour</strong> :
                                    <ul>
                                    <li>Télécharger la dernière version depuis GitHub</li>
                                    <li>Dézipper l'archive</li>
                                    <li>Se connecter via FileZilla</li>
                                    <li>Glisser-déposer le contenu dans <code>/opt/lampp/htdocs/</code></li>
                                    <li>Renommer le dossier en <code>sae24</code></li>
                                    </ul>
                                </li>
                                </ol>
                            </div>
                        </li>
                        <li><strong>Windows Server 2019</strong> (AD DS, DHCP, DNS, The Dude, fichiers...)</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Étape 2 - Vérifier la connectivité réseau</h3>
            <ul>
                <li>Assurez-vous que le <strong>switch</strong> est alimenté et connecté au routeur.</li>
                <li>Connectez un PC en filaire ou via le <strong>point d'accès Wi-Fi</strong>.</li>
                <li>Testez l'accès réseau :
                    <ul>
                        <li><code>ping 192.168.90.10</code> → ESXi</li>
                        <li><code>ping 192.168.90.11</code> → Windows Server</li>
                        <li><code>ping 192.168.90.12</code> → Ubuntu</li>
                    </ul>
                </li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Étape 3 - Tester les services principaux</h3>
            <ul>
                <li><strong>Site web :</strong> ouvrez un navigateur et accédez à <a href="http://192.168.90.12/sae24">http://192.168.90.12/sae24</a></li>
                <li><strong>Wi-Fi :</strong> connectez-vous au réseau Wi-Fi depuis votre appareil</li>
                <li><strong>Dossier personnel :</strong> accédez au disque H: sur un PC connecté au réseau pour avoir un accès à des fichiers privés.</li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Étape 4 - Tester la téléphonie</h3>
            <ul>
                <li>Vérifiez que le service Asterisk est actif sur la VM Ubuntu :
                    <ul>
                        <li>Commande SSH : <code>sudo systemctl status asterisk</code></li>
                    </ul>
                </li>
                <li>Assurez-vous que les téléphones sont bien connectés (IP obtenue, SIP enregistré).</li>
                <li>Composez un numéro depuis un téléphone (voir <a href="telephonique.php">plan de numérotation</a>) pour vérifier l'appel.</li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Étape 5 - Accès Wi-Fi</h3>
            <ul>
                <li>Recherchez le réseau Wi-Fi configuré : Wifi Cabinet Occitania.</li>
                <li>Connectez-vous sans avoir besoin de mot de passe.</li>
                <li>Testez la navigation vers un site web au choix (Ex : <a href="http://192.168.90.12/sae24">http://192.168.90.12/sae24</a>).</li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Étape 6 - Dépannage courant</h3>
            <ul>
                <li>❌ Pas d'IP automatique ? → Vérifiez que le service DHCP est bien actif sur Windows Server.</li>
                <li>❌ Impossible d'accéder au site ? → Vérifiez l'adresse IP de la VM Ubuntu et le statut d'Apache (XAMPP).</li>
                <li>❌ Aucune tonalité sur les téléphones ? → Vérifiez que les comptes SIP sont bien enregistrés.</li>
            </ul>
        </section>

        <section class="contenu">
            <h3>Informations complémentaires</h3>
            <p>Le réseau physique mis en place représente une version réduite de la simulation. Pour voir la version complète du projet reportez-vous à la page <a href="simulation.php">Simulation Packet Tracer</a>.</p>
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

    <script>
        function toggleConfig() {
            const config = document.getElementById('config-router');
            config.classList.toggle('config-visible');
        }
        function toggleUbuntu() {
        const config = document.getElementById('config-ubuntu');
        config.classList.toggle('config-visible');
        }
    </script>

    

</body>
</html>
