<?php 
    // require "components/database/db_connect.php";


?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="components/css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav id="main-navbar" class="navbar navbar-expand-md fixed-top navbar-before-scroll shadow-0">
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
        <!-- Logo -->
        <a class="navbar-brand me-1" href="index.php"><img src="components/media/logo/D&S_Logo_200x115.jpg" height="20px" alt="Logo" loading="lazy" /></a>

        <li class="nav-item">
          <a class="nav-link text-dark active" href="weoffer.php">Was wir bieten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#myoffers">My offers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#myskills">My skills</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#aboutme">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark" href="#contactme">Kontakt</a>
        </li>
      </ul>
    </div>
    <!-- Collapsible wrapper -->

  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->

<section id="myoffer">
    <p>
    Mit unserer FullStack-Webentwicklung bei <span class="firma">Webdesign Digitale Seele</span> erhalten Sie nicht nur eine Website, sondern eine lebendige digitale Erfahrung. Von der Benutzeroberfläche bis zur Datenbank sorgen wir dafür, dass Ihre Online-Präsenz nicht nur funktioniert, sondern auch eine authentische digitale Seele besitzt.
    </p>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<!-- <script src="components/scripts/projectfile_state.js"></script> -->
</body>
</html>