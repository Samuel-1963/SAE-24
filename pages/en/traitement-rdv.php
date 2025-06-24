<?php session_start(); ?>
<?php
// Check if form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize data
    $prenom = htmlspecialchars($_POST['prenom'] ?? '');
    $nom = htmlspecialchars($_POST['nom'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $date = htmlspecialchars($_POST['date'] ?? '');
    $heure = htmlspecialchars($_POST['heure'] ?? '');
    $type = htmlspecialchars($_POST['type'] ?? '');
    $message = nl2br(htmlspecialchars($_POST['message'] ?? ''));

    // Recipient
    $to = "samuel.descours.iut@gmail.com";
    $subject = "📅 New appointment request from $prenom $nom";

    $content = "A new appointment request has been submitted:\n\n";
    $content .= "Last Name: $nom\n";
    $content .= "First Name: $prenom\n";
    $content .= "Email: $email\n";
    $content .= "Preferred Date: $date\n";
    $content .= "Preferred Time: $heure\n";
    $content .= "Appointment Type: $type\n";
    $content .= "Message:\n$message\n";

    $headers = "From: $email\r\nReply-To: $email\r\nContent-Type: text/plain; charset=UTF-8";

    // Send email
    mail($to, $subject, $content, $headers);
} else {
    header("Location: contact.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Confirmation - Occitania Paramedical Center</title>
    <link rel="stylesheet" href="../../styles.css">
    <link rel="icon" href="../../images/icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        
        <a href="index.php" class="titre-accueil">
            <h1>Occitania Paramedical Center</h1>
        </a>
        
        <button id="menu-toggle" aria-label="Open menu">
            <span></span>
            <span></span>
            <span></span>
        </button>

        <nav id="main-nav">
            <ul>
                <li><a href="equiperp.php">Our team</a></li>
                <li><a href="services.php">Our services</a></li>
                <li><a href="contact.php">Book an appointment</a></li>
                <li><a href="#">Professional space</a>
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
                    <li><a href="../deconnexion.php">Logout</a></li>
                <?php else: ?>
                    <li><a href="../connexion.php">Login</a></li>
                <?php endif; ?>
            </ul>
        </nav>
        <a href="../traitement-rdv.php" class="btn-langue">🇫🇷 Français</a>
    </header>

    <main>
    <section class="confirmation-section">
        <h2>✅ Appointment request sent</h2>
        <p>Thank you for your request. We will contact you shortly to confirm your appointment.</p>

        <div class="confirmation-details">
        <ul>
            <li><strong>First Name:</strong> <?php echo htmlspecialchars($prenom); ?></li>
            <li><strong>Last Name:</strong> <?php echo htmlspecialchars($nom); ?></li>
            <li><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></li>
            <li><strong>Preferred Date:</strong> <?php echo htmlspecialchars($date); ?></li>
            <li><strong>Preferred Time:</strong> <?php echo htmlspecialchars($heure); ?></li>
            <li><strong>Appointment Type:</strong> <?php echo htmlspecialchars($type); ?></li>
            <?php if (!empty($message)) : ?>
            <li><strong>Additional Message:</strong>
                <div class="message-box"><?php echo nl2br(htmlspecialchars($message)); ?></div>
            </li>
            <?php endif; ?>
        </ul>
        </div>

        <a class="btn-retour" href="index.php">Return to homepage</a>
    </section>
    </main>

    <footer>
        <p>&copy; 2025 Occitania Paramedical Center | Educational fictional website | <a href="mentions-legales.php">Legal notices</a></p>
    </footer>
</body>
</html>