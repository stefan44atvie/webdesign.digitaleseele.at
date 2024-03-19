<?php 
    // require "components/database/db_connect.php";


?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="components/css/styles.css"> -->
    <link rel="stylesheet" href="components/css/webdesign_styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Webdesign Digitale Seele</title>
</head>
<body class="">
<nav id="main-navbar" class="navbar navbar-expand-md fixed-top bg-white shadow-0">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-toggle="collapse"
            data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <a class="navbar-brand me-1" href="index.php"><img src="components/media/logo/D&S_Logo_200x115.jpg" height="20px" alt="Logo" loading="lazy" /></a>
        <li class="nav-item">
            <a class="nav-link text-dark" href="weoffer.php">Was wir bieten</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="weoffer.php#offers">Spezialisierung</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="weoffer.php#vorteile">Ihre Vorteile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="weoffer.php#ablauf">Der Ablauf</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="angebote.php">Unsere Angebote</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="https://webdesign.digitaleseele.at/portfolio">
                Mein Portfolio
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-dark" href="contact.php">Kontakt</a>
        </li>
        </ul>
    </div>
    <!-- Collapsible wrapper -->

  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
<section id = "UnsereAngebote">
    <div class="angebote_titel">
        <h1 class="ang_titel">Unser Angebot für Kunden</h1>
    </div>
    <div class="angebote_text">
        <p class="ang_text">
            Wir legen großen Wert darauf, dass unsere Pakete skalierbar sind und mit dem Wachstum und den sich ändernden Anforderungen unserer Kunden mitwachsen können. Unsere Kunden können jederzeit von einem Paket zum nächsten wechseln, um sicherzustellen, dass ihre Website stets ihren Bedürfnissen entspricht.
        </p>
    </div>
    <div class="angebote_basis">
        <div class="basisangebote"></div>
        <div class="basisangebote_text">
            <p class="ang_text">
                Unsere Basispakete umfassen die Erstellung einer benutzerfreundlichen Website mit einem ansprechenden Design und grundlegenden Funktionen, die perfekt für Start-ups und kleinere Unternehmen geeignet sind. Diese Pakete bieten eine kostengünstige Lösung für Unternehmen, die online präsent sein möchten.
            </p>
        </div>
    </div>
    <div class="angebote_standard">
        <div class="standardangebote"></div>
        <div class="standardangebote_text">
            <p class="ang_text">
                Für Unternehmen, bzw. KMU's, die etwas mehr Funktionalität und Anpassung benötigen, bieten wir erweiterte Pakete an, die zusätzliche Funktionen wie Kontaktformulare, Galerien, Blogintegration und Social-Media-Integrationen enthalten. Diese Pakete eignen sich ideal für Unternehmen, die ihre Online-Präsenz ausbauen und mit ihren Kunden interagieren möchten.
            </p>
        </div>
    </div>
    <div class="angebote_premium">
        <div class="premiumangebote"></div>
        <div class="premiumangebote_text">
            <p class="ang_text">
                Unsere Premium-Pakete bieten eine vollständig maßgeschneiderte Lösung mit allen Funktionen, die ein Unternehmen benötigt, um online erfolgreich zu sein. Diese Pakete umfassen individuelles Design, erweiterte Funktionen wie E-Commerce-Integration, Kundenportale und individuelle Entwicklungen nach den spezifischen Anforderungen des Kunden.
            </p>
        </div>
    </div>
    <div class="angebote_addons">
        <div class="addonangebote"></div>
        <div class="addonangebote_text">
            <p class="ang_text">
                Unsere Basispakete umfassen die Erstellung einer benutzerfreundlichen Website mit einem ansprechenden Design und grundlegenden Funktionen, die perfekt für Start-ups und kleinere Unternehmen geeignet sind. Diese Pakete bieten eine kostengünstige Lösung für Unternehmen, die online präsent sein möchten.
            </p>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- <script src="components/scripts/projectfile_state.js"></script> -->
</body>
</html>