<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Sono - Mattia Molteni</title>
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
                <li><a href="about.php" class="active">Chi Sono</a></li>
                <li><a href="experience.php">Esperienza</a></li>
                <li><a href="education.php">Formazione</a></li>
                <li><a href="projects.php">Progetti</a></li>
                <li><a href="contact.php">Contatti</a></li>
            </ul>
        </nav>
        <h1 style="text-align:center; font-size:2.5rem; font-weight:900; color:var(--accent); letter-spacing:1.5px; margin: 32px 0 0 0; text-shadow:0 2px 12px #2563eb22;">Chi Sono</h1>
    </header>

    <main>
        <section class="bio fade-in" style="text-align: center;">
            <!-- Immagine profilo: ../assets/img/profile.jpg -->
            <img src="../assets/img/profile.jpg" alt="Foto profilo" class="profile-img">
            <p><strong>Città: Verano Brianza</strong></p> 
            <p><strong>Telefono: (+39) 3314994975</strong> </p>
            <p><strong>Mail: <a href="mailto:matti.molte@gmail.com">matti.molte@gmail.com</a></strong> </p>
            <p>Data di nascita: 29/11/2006 | Patente di guida: Categoria B</p>
            <p>Studente di Economia delle Imprese e dei Mercati alla Cattolica di Milano, con diploma in Informatica e forte passione per tecnologia, business e crescita personale.</p>
            <p>Ho sviluppato CivicVois, una piattaforma digitale per la segnalazione urbana, e continuo a formarmi tra progetti concreti, sport e nuove sfide. Ambizioso, curioso e orientato al futuro.</p>
            <div style="margin-top:24px; display: flex; justify-content: center; gap: 18px;">
                <a href="https://www.linkedin.com/in/moltenimattia/" target="_blank" aria-label="LinkedIn"><img src="../assets/img/linkedin.png" alt="LinkedIn" style="height:28px;"></a>
                <a href="https://www.instagram.com/mattiamolteni_/" target="_blank" aria-label="Instagram"><img src="../assets/img/instagram.png" alt="Instagram" style="height:28px;"></a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Mattia Molteni | <a href="mailto:matti.molte@gmail.com">matti.molte@gmail.com</a></p>
    </footer>
    <script src="../assets/js/navbar.js"></script>
</body>
</html>
