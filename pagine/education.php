<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formazione - Mattia Molteni</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/animation.css">
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="logo">
                <a href="../index.php">Mattia Molteni</a>
            </div>
            <button class="hamburger" aria-label="Apri menu di navigazione" aria-expanded="false" aria-controls="main-menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <ul id="main-menu">
                <li><a href="../index.php">Home</a></li>
                <li><a href="about.php">Chi Sono</a></li>
                <li><a href="experience.php">Esperienza</a></li>
                <li><a href="education.php" class="active">Formazione</a></li>
                <li><a href="projects.php">Progetti</a></li>
                <li><a href="contact.php">Contatti</a></li>
            </ul>
        </nav>
        <h1 style="text-align:center; font-size:2.5rem; font-weight:900; color:var(--accent); letter-spacing:1.5px; margin: 32px 0 0 0; text-shadow:0 2px 12px #2563eb22;">Formazione</h1>
    </header>

    <main>
        <section class="education-section fade-in" style="display: flex; flex-direction: column; gap: 38px; align-items: center;">
            <div style="background: var(--white); border-radius: 14px; box-shadow: 0 2px 12px #2563eb11; padding: 32px 28px; max-width: 600px; width: 100%;">
                <h2 style="color: var(--accent); font-size: 1.5rem; margin-bottom: 10px;">Università Cattolica del Sacro Cuore</h2>
                <p style="margin:0 0 8px 0;"><strong>Da settembre 2025</strong></p>
                <p style="margin:0;">Corso di laurea in Economia delle Imprese e dei Mercati - Milano</p>
            </div>
            <div style="background: var(--white); border-radius: 14px; box-shadow: 0 2px 12px #2563eb11; padding: 32px 28px; max-width: 600px; width: 100%;">
                <h2 style="color: var(--accent); font-size: 1.5rem; margin-bottom: 10px;">Diploma Scuola Superiore</h2>
                <p style="margin:0 0 8px 0;"><strong>2019 - 2025</strong></p>
                <p style="margin:0;">Informatica e telecomunicazioni (ITIA)<br>IIS Jean Monnet - Mariano Comense</p>
            </div>
            <div style="background: var(--white); border-radius: 14px; box-shadow: 0 2px 12px #2563eb11; padding: 32px 28px; max-width: 600px; width: 100%;">
                <h2 style="color: var(--accent); font-size: 1.5rem; margin-bottom: 10px;">Attestato Terza Media</h2>
                <p style="margin:0 0 8px 0;"><strong>2015 - 2019</strong></p>
                <p style="margin:0;">Istituto Comprensivo Statale "G.D Romagnosi" - Carate Brianza</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Mattia Molteni | <a href="mailto:matti.molte@gmail.com">matti.molte@gmail.com</a></p>
    </footer>
    <script src="../assets/js/navbar.js"></script>
</body>
</html>
