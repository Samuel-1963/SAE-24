<?php session_start(); ?>
<?php
// Vérifie si le formulaire a été soumis via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et sécurisation des données
    $prenom = htmlspecialchars($_POST['prenom'] ?? '');
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $date = htmlspecialchars($_POST['date'] ?? '');
    $heure = htmlspecialchars($_POST['heure'] ?? '');
    $type = htmlspecialchars($_POST['type'] ?? '');
    $message = nl2br(htmlspecialchars($_POST['message'] ?? ''));

    // Destinataire
    $to = "samuel.descours.iut@gmail.com";
    $subject = "📅 Nouvelle demande de rendez-vous de $prenom $nom";

    $content = "Une nouvelle demande de rendez-vous a été envoyée :\n\n";
    $content .= "Nom : $nom\n";
    $content .= "Prénom : $prenom\n";
    $content .= "Adresse e-mail : $email\n";
    $content .= "Date souhaitée : $date\n";
    $content .= "Heure souhaitée : $heure\n";
    $content .= "Type de rendez-vous : $type\n";
    $content .= "Message :\n$message\n";

    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    // Envoi de l'e-mail
    mail($to, $subject, $content, $headers);
} else {
    header("Location: contact.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation de rendez-vous - Cabinet Paramédical Occitania</title>
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
                        <li><a href="livrables.php">Livrables</a></li>
                        <li><a href="equipe.php">Équipe</a></li>
                        <li><a href="site-prive.php">Accès interne</a></li>
                        <li><a href="gantt.php">GANTT</a></li>
                        <li><a href="plan.php">Schéma de l'architecture réseau</a></li>
                        <li><a href="deconnexion.php">Déconnexion</a></li>
                        <?php else: ?>
                        <li><a href="connexion.php">Connexion</a></li>
                        <?php endif; ?>
                    </ul>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="confirmation-section">
            <h2>Votre demande a bien été envoyée ✅</h2>
            <p>Merci <strong><?= $prenom . ' ' . $nom ?></strong> pour votre confiance.</p>
            <p>Voici un récapitulatif de votre demande :</p>

            <div class="confirmation-details">
                <ul>
                    <li><strong>Nom :</strong> <?= $nom ?></li>
                    <li><strong>Prénom :</strong> <?= $prenom ?></li>
                    <li><strong>Email :</strong> <?= $email ?></li>
                    <li><strong>Date du rendez-vous :</strong> <?= $date ?></li>
                    <li><strong>Heure :</strong> <?= $heure ?></li>
                    <li><strong>Type :</strong> <?= ucfirst($type) ?></li>
                    <?php if (!empty($message)): ?>
                        <li><strong>Message :</strong><br><div class="message-box"><?= $message ?></div></li>
                    <?php endif; ?>
                </ul>
            </div>

            <p>Notre secrétariat vous contactera pour confirmer le rendez-vous selon nos disponibilités.</p>
            <a href="contact.php" class="btn-retour">⏎ Retour au formulaire</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Cabinet Paramédical Occitania | Site fictif pédagogique | <a href="../mentions-legales.php">Mentions légales</a></p>
    </footer>
</body>
</html>
