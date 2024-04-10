<?php 
  require_once "./mtest.php";

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
<body class="contactpage">
<nav class="navbar navbar-expand-lg bg-light fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">
        <img src = "components/media/logo/D&S_Logo_200x115.jpg" height="20px" alt ="menu">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="weoffer.php#">Was wir bieten</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="weoffer.php#offers">Spezialisierung</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="weoffer.php#vorteile">Ihre Vorteile</a>
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
  </div>
</nav>
<!-- Navbar -->

<section class="mb-10">
  <div class="container mb-3">
    <div class="row gx-0">
      <!-- First column -->
      <div class="col-lg-2"></div>
      <div class="col-lg-8 mb-5 mb-lg-0">
        <div class="cardcontact rounded-7 me-lg-n5">
          <div class="card-body p-lg-5 shadow-5">
            <h2 class="fw-bold text-center">
              <span class="text-black">Kontakt</span>
            </h2>
            <form method="POST" class="">
            <div class="contactform">
              <div id="name">
                <label for="floatingInputGrid" class="bg-success input_title">Ihr Name</label>
                <input type="text" class="form-control" placeholder="Ihr Name" name="namen"> 
              </div>
              <div id="firma">
                <label for="floatingInputGrid" class="bg-success input_title">Firma</label>
                <input type="text" class="form-control" placeholder="Firma" name="firma"> 
              </div>
              <div id="email">
                <label for="floatingInputGrid" class="bg-success input_title">email</label>
                <input type="text" class="form-control" placeholder="email" name="email"> 
              </div>
              <div id="phone">
                <label for="floatingInputGrid" class="bg-success input_title">Telefonnummer</label>
                <input type="text" class="form-control" placeholder="Telefonnummer" name="phone"> 
              </div>
              <div id="theme">
                <label for="floatingInputGrid" class="bg-success input_title">Thema Ihres Anliegens</label>
                <input type="text" class="form-control" placeholder="Thema Ihres Anliegens" name="theme"> 
              </div>
              <div id="details">
                <label for="floatingInputGrid" class="bg-success input_title">Details Ihres Anliegens</label>
                <textarea id="description_details" name="description_details" rows="7" ><?php echo $details_ku; ?>
                </textarea> 
              </div>
              <div id="checkbox">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDisabled" required>
                <label class="form-check-label" for="flexCheckDisabled">
                  JA, ich stimme zu, dass meine Daten verarbeitet werden.
                </label>
              </div>
              <div id="button">
                <input type="submit" name="sendEmail" class="form-control btn btn-primary mt-2 button_shadow" value="Anfrage absenden" /> 
              </div>
            </div>
            
          </div>
          
          </form>
          
        </div>

      </div>

    </div>

  </div>

</section>
<script src="components/scripts/texteff2.js"></script>
<script src="components/scripts/effect2.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>