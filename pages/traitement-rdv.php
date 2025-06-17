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
        <a href="en/traitement-rdv.php" class="btn-langue">🇬🇧 English</a>
    </header>

    <main>
    <section class="confirmation-section">
        <h2>✅ Demande de rendez-vous envoyée</h2>
        <p>Merci pour votre demande. Nous vous contacterons rapidement pour confirmer le rendez-vous.</p>

        <div class="confirmation-details">
        <ul>
            <li><strong>Prénom :</strong> <?php echo htmlspecialchars($prenom); ?></li>
            <li><strong>Nom :</strong> <?php echo htmlspecialchars($nom); ?></li>
            <li><strong>Adresse e-mail :</strong> <?php echo htmlspecialchars($email); ?></li>
            <li><strong>Date souhaitée :</strong> <?php echo htmlspecialchars($date); ?></li>
            <li><strong>Heure souhaitée :</strong> <?php echo htmlspecialchars($heure); ?></li>
            <li><strong>Type de consultation :</strong> <?php echo htmlspecialchars($type); ?></li>
            <?php if (!empty($message)) : ?>
            <li><strong>Message complémentaire :</strong>
                <div class="message-box"><?php echo nl2br(htmlspecialchars($message)); ?></div>
            </li>
            <?php endif; ?>
        </ul>
        </div>

        <a class="btn-retour" href="index.php">Retour à l'accueil</a>
    </section>
    </main>

    <footer>
        <p>&copy; 2025 Cabinet Paramédical Occitania | Site fictif pédagogique | <a href="../mentions-legales.php">Mentions légales</a></p>
    </footer>
</body>
</html>
