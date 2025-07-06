<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MATTIA MOLTENI - Portfolio Personale</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/animation.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo"> <!-- Logo o iniziali -->
                <a href="index.php">Mattia Molteni</a>
            </div>
            <button class="hamburger" aria-label="Apri menu di navigazione" aria-expanded="false" aria-controls="main-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul id="main-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="pagine/about.php">Chi Sono</a></li>
                <li><a href="pagine/experience.php">Esperienza</a></li>
                <li><a href="pagine/education.php">Formazione</a></li>
                <li><a href="pagine/projects.php">Progetti</a></li>
                <li><a href="pagine/contact.php">Contatti</a></li>
            </ul>
        </nav>
        <div class="intro" style="margin-bottom: 0;">
            <!-- Sostituisci profile.jpg con la tua foto -->
            <img src="assets/img/profile.jpg" alt="Foto profilo" class="profile-img">
        </div>
    </header>

    <main>
        <section class="home-section" style="max-width: 700px; margin: 70px auto 0 auto; padding: 60px 40px 80px 40px; background: var(--white); border-radius: 18px; box-shadow: 0 8px 32px 0 rgba(26,34,51,0.10); text-align: center;">
            <h2 style="font-size: 2.3rem; font-weight: 800; color: var(--primary); margin-bottom: 32px; letter-spacing: 1px;">Portfolio Personale</h2>
            <p style="font-size: 1.25rem; color: var(--primary); max-width: 600px; margin: 0 auto 38px auto; line-height: 1.7;">Benvenuto! Qui puoi scoprire il mio percorso, le mie competenze e i miei progetti. Utilizza il menu in alto per approfondire ogni aspetto della mia formazione e delle mie esperienze.</p>
            <a href="pagine/about.php" class="btn" style="font-size: 1.1rem; padding: 12px 32px;">Scopri di più su di me</a>
            <a href="assets/cv/Mattia_Molteni_CV.pdf" class="btn" download style="margin-top: 18px; display: inline-block; font-size: 1.1rem; padding: 12px 32px;">Scarica il mio CV</a>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Mattia Molteni | <a href="mailto:matti.molte@gmail.com">matti.molte@gmail.com</a></p>
    </footer>
    <script src="assets/js/navbar.js"></script>
</body>
</html>
