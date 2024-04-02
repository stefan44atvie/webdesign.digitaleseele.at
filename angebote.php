<?php 
    require "components/database/db_connect.php";

    //BASIS Pakete
    $sql_angebote_basis = "select * from angebote where fk_status = 1 and fk_art in (1,2,4) and name like '%BASIC%'";
    $resAB = mysqli_query($connect,$sql_angebote_basis);
    
    if(mysqli_num_rows($resAB)  > 0) {
        while($rowAB = mysqli_fetch_array($resAB, MYSQLI_ASSOC)){
            $aid = $rowAB['id'];
            $aname = $rowAB['name'];
            $adetails = $rowAB['details'];
            $apreis = $rowAB['preis'];
            $aangebotnr = $rowAB['angebotNr.'];
            $acreate = $rowAB['create_date'];
            $apreis = $rowAB['preis'];
            $fk_webseiten = $rowAB['fk_webseiten'];
            $fk_login = $rowAB['fk_login'];
            $fk_backend = $rowAB['fk_backend'];
            $fk_art = $rowAB['fk_art'];
            $fk_content = $rowAB['fk_content'];
            $fk_status = $rowAB['fk_status'];
            $fk_profile = $rowAB['fk_profile'];

            $apreis = number_format($apreis, 2, ',', '.');
            $create_date = date("d.m.Y", strtotime($acreate)); 
            
            // var_dump($adetails);
            // die();

            $sql_webseiten = "select * from opt_webseiten where id = $fk_webseiten";
            $resWBS = mysqli_query($connect,$sql_webseiten);
            $rowWBS = mysqli_fetch_assoc($resWBS);
            $webseiten = $rowWBS['wb_option'];

            $sql_login = "select * from opt_login where id = $fk_login";
            $resLOG = mysqli_query($connect,$sql_login);
            $rowLOG = mysqli_fetch_assoc($resLOG);
            $login = $rowLOG['l_option'];

            $sql_backend = "select * from opt_backend where id = $fk_backend";
            $resBaE = mysqli_query($connect,$sql_backend);
            $rowBaE = mysqli_fetch_assoc($resBaE);
            $backend = $rowBaE['b_option'];

            $sql_content = "select * from opt_content where id = $fk_content";
            $resCOU = mysqli_query($connect,$sql_content);
            $rowCOU = mysqli_fetch_assoc($resCOU);
            $content = $rowCOU['ct_otpion'];

            $sql_art = "select * from opt_art where id = $fk_art";
            $resART = mysqli_query($connect,$sql_art);
            $rowART = mysqli_fetch_assoc($resART);
            $art = $rowART['art_option'];

            $sql_profil = "select * from opt_profile where id = $fk_profile";
            $resPRO = mysqli_query($connect,$sql_profil);
            $rowPRO = mysqli_fetch_assoc($resPRO);
            $profile = $rowPRO['pr_otpion'];
           
            $tbodyAB .= "
            <div class='col g-3'>
            <div class='angebot_card box-shadow_black'>
        <div class='ang_header'>
            <img src='components/media/logo/D&S_Logo_200x115.jpg'' width='300' alt='ai'>
        </div>
        <div class='ang_card-body'>
            <span class='tag'>$art</span>
            <h4 class='ang_title'>$aname</h4>
            <p class='ang_description'>
              $adetails
                <table class='table table-striped'>
                  <tr>
                    <td>Anzahl der Webseiten</td>
                    <td>$webseiten</td>
                  </tr>
                  <tr>
                    <td>Login</td>
                    <td class='option'>$login</td>
                  </tr>
                  <tr>
                    <td>Backend</td>
                    <td class='option'>$backend</td>
                  </tr>
                  <tr>
                    <td>Content-Upload</td>
                    <td class='option'>$content</td>
                  </tr>
                  <tr>
                    <td>Userprofil</td>
                    <td class='option'>$profile</td>
                  </tr>
                </table>
                <a class='price'>$apreis €</a>
            </p>
            <div class='user hidden'>$my_session</div>
            
           </div>
    </div>
    </div>    
            ";
        }
    }else {
            $tbodyAB =  "<tr><td colspan='9' class='noitem'><center>Derzeit keine Basis-Pakete vorhanden</center></td></tr>";
    }

    //Erweiterte Pakete 
   $sql_PaketErweitert = "select * from angebote where name like 'Webdesign%MEDIUM' UNION select * from angebote where name like 'Webdesign%LARGE%' order by name";
    //$sql_PaketErweitert = "select * from angebote where name like 'Webdesign PRO BASIC' or name like 'Webdesign PRO MEDIUM' or name like 'Webdesign PRO LARGE'";
//    $sql_PaketErweitert = "select * from angebote where name like 'Webdesign%'";
    $resPerw = mysqli_query($connect,$sql_PaketErweitert);

    if(mysqli_num_rows($resPerw)  > 0) {
        while($rowPerw = mysqli_fetch_array($resPerw, MYSQLI_ASSOC)){
            $aid = $rowPerw['id'];
            $aname = $rowPerw['name'];
            $adetails = $rowPerw['details'];
            $apreis = $rowPerw['preis'];
            $aangebotnr = $rowPerw['angebotNr.'];
            $acreate = $rowPerw['create_date'];
            $apreis = $rowPerw['preis'];
            $fk_webseiten = $rowPerw['fk_webseiten'];
            $fk_login = $rowPerw['fk_login'];
            $fk_backend = $rowPerw['fk_backend'];
            $fk_art = $rowPerw['fk_art'];
            $fk_content = $rowPerw['fk_content'];
            $fk_status = $rowPerw['fk_status'];
            $fk_profile = $rowPerw['fk_profile'];

            $apreis = number_format($apreis, 2, ',', '.');
            $create_date = date("d.m.Y", strtotime($acreate)); 
            
            // var_dump($adetails);
            // die();

            $sql_webseiten = "select * from opt_webseiten where id = $fk_webseiten";
            $resWBS = mysqli_query($connect,$sql_webseiten);
            $rowWBS = mysqli_fetch_assoc($resWBS);
            $webseiten = $rowWBS['wb_option'];

            $sql_login = "select * from opt_login where id = $fk_login";
            $resLOG = mysqli_query($connect,$sql_login);
            $rowLOG = mysqli_fetch_assoc($resLOG);
            $login = $rowLOG['l_option'];

            $sql_backend = "select * from opt_backend where id = $fk_backend";
            $resBaE = mysqli_query($connect,$sql_backend);
            $rowBaE = mysqli_fetch_assoc($resBaE);
            $backend = $rowBaE['b_option'];

            $sql_content = "select * from opt_content where id = $fk_content";
            $resCOU = mysqli_query($connect,$sql_content);
            $rowCOU = mysqli_fetch_assoc($resCOU);
            $content = $rowCOU['ct_otpion'];

            $sql_art = "select * from opt_art where id = $fk_art";
            $resART = mysqli_query($connect,$sql_art);
            $rowART = mysqli_fetch_assoc($resART);
            $art = $rowART['art_option'];

            $sql_profil = "select * from opt_profile where id = $fk_profile";
            $resPRO = mysqli_query($connect,$sql_profil);
            $rowPRO = mysqli_fetch_assoc($resPRO);
            $profile = $rowPRO['pr_otpion'];
           
            $tbodyPerw .= "
            <div class='col g-3'>
            <div class='angebot_card box-shadow_white'>
        <div class='ang_header'>
            <img src='components/media/logo/D&S_Logo_200x115.jpg' width='300' alt='ai'>
        </div>
        <div class='ang_card-body'>
            <span class='tag'>$art</span>
            <h4 class='ang_title'>$aname</h4>
            <p class='ang_description'>
              $adetails
                <table class='table table-striped'>
                  <tr>
                    <td>Anzahl der Webseiten</td>
                    <td>$webseiten</td>
                  </tr>
                  <tr>
                    <td>Login</td>
                    <td class='option'>$login</td>
                  </tr>
                  <tr>
                    <td>Backend</td>
                    <td class='option'>$backend</td>
                  </tr>
                  <tr>
                    <td>Content-Upload</td>
                    <td class='option'>$content</td>
                  </tr>
                  <tr>
                    <td>Userprofil</td>
                    <td class='option'>$profile</td>
                  </tr>
                </table>
                <a class='price'>$apreis €</a>
            </p>
            <div class='user hidden'>$my_session</div>
           </div>
    </div>
    </div>    
            ";
        }
    }else {
            $tbodyPerw =  "<tr><td colspan='9' class='noitem'><center>Derzeit keine erweiterten Pakete vorhanden</center></td></tr>";
    }

    //PREMIUM Pakete
    $sql_angebote_premium = "select * from angebote where fk_status = 1 and name like '%ULTIMATE'";
    $resPRP = mysqli_query($connect,$sql_angebote_premium);
    
    if(mysqli_num_rows($resPRP)  > 0) {
        while($rowPRP = mysqli_fetch_array($resPRP, MYSQLI_ASSOC)){
            $aid = $rowPRP['id'];
            $aname = $rowPRP['name'];
            $adetails = $rowPRP['details'];
            $apreis = $rowPRP['preis'];
            $aangebotnr = $rowPRP['angebotNr.'];
            $acreate = $rowPRP['create_date'];
            $apreis = $rowPRP['preis'];
            $fk_webseiten = $rowPRP['fk_webseiten'];
            $fk_login = $rowPRP['fk_login'];
            $fk_backend = $rowPRP['fk_backend'];
            $fk_art = $rowPRP['fk_art'];
            $fk_content = $rowPRP['fk_content'];
            $fk_status = $rowPRP['fk_status'];
            $fk_profile = $rowPRP['fk_profile'];

            $apreis = number_format($apreis, 2, ',', '.');
            $create_date = date("d.m.Y", strtotime($acreate)); 
            
            // var_dump($adetails);
            // die();

            $sql_webseiten = "select * from opt_webseiten where id = $fk_webseiten";
            $resWBS = mysqli_query($connect,$sql_webseiten);
            $rowWBS = mysqli_fetch_assoc($resWBS);
            $webseiten = $rowWBS['wb_option'];

            $sql_login = "select * from opt_login where id = $fk_login";
            $resLOG = mysqli_query($connect,$sql_login);
            $rowLOG = mysqli_fetch_assoc($resLOG);
            $login = $rowLOG['l_option'];

            $sql_backend = "select * from opt_backend where id = $fk_backend";
            $resBaE = mysqli_query($connect,$sql_backend);
            $rowBaE = mysqli_fetch_assoc($resBaE);
            $backend = $rowBaE['b_option'];

            $sql_content = "select * from opt_content where id = $fk_content";
            $resCOU = mysqli_query($connect,$sql_content);
            $rowCOU = mysqli_fetch_assoc($resCOU);
            $content = $rowCOU['ct_otpion'];

            $sql_art = "select * from opt_art where id = $fk_art";
            $resART = mysqli_query($connect,$sql_art);
            $rowART = mysqli_fetch_assoc($resART);
            $art = $rowART['art_option'];

            $sql_profil = "select * from opt_profile where id = $fk_profile";
            $resPRO = mysqli_query($connect,$sql_profil);
            $rowPRO = mysqli_fetch_assoc($resPRO);
            $profile = $rowPRO['pr_otpion'];
           
            $tbodyPRP .= "
            <div class='col g-3'>
            <div class='angebot_card box-shadow_black'>
        <div class='ang_header'>
            <img src='components/media/logo/D&S_Logo_200x115.jpg' width='300' alt='ai'>
        </div>
        <div class='ang_card-body'>
        <span class='tag1'>$art</span>
        <h4 class='ang_title'>$aname</h4>
            <p class='ang_description'>
              $adetails
                <table class='table table-striped'>
                  <tr>
                    <td>Anzahl der Webseiten</td>
                    <td>$webseiten</td>
                  </tr>
                  <tr>
                    <td>Login</td>
                    <td class='option'>$login</td>
                  </tr>
                  <tr>
                    <td>Backend</td>
                    <td class='option'>$backend</td>
                  </tr>
                  <tr>
                    <td>Content-Upload</td>
                    <td class='option'>$content</td>
                  </tr>
                  <tr>
                    <td>Userprofil</td>
                    <td class='option'>$profile</td>
                  </tr>
                </table>
                <a class='price'>$apreis €</a>
            </p>
            <div class='user hidden'>$my_session</div>
           </div>
    </div>
    </div>    
            ";
        }
    }else {
            $tbodyPRP =  "<tr><td colspan='9' class='noitem'><center>Derzeit keine Basis-Pakete vorhanden</center></td></tr>";
    }

    //ADDON Pakete
    $sql_angebote_addon = "select * from angebote where fk_art=3 and fk_status = 1";
    $resAD = mysqli_query($connect,$sql_angebote_addon);
    
    if(mysqli_num_rows($resAD)  > 0) {
        while($rowADD = mysqli_fetch_array($resAD, MYSQLI_ASSOC)){
            $aid = $rowADD['id'];
            $aname = $rowADD['name'];
            $adetails = $rowADD['details'];
            $apreis = $rowADD['preis'];
            $aangebotnr = $rowADD['angebotNr.'];
            $acreate = $rowADD['create_date'];
            $apreis = $rowADD['preis'];
            $fk_webseiten = $rowADD['fk_webseiten'];
            $fk_login = $rowADD['fk_login'];
            $fk_backend = $rowADD['fk_backend'];
            $fk_art = $rowADD['fk_art'];
            $fk_content = $rowADD['fk_content'];
            $fk_status = $rowADD['fk_status'];
            $fk_profile = $rowADD['fk_profile'];

            $apreis = number_format($apreis, 2, ',', '.');
            $create_date = date("d.m.Y", strtotime($acreate)); 
            
            // var_dump($adetails);
            // die();

            $sql_webseiten = "select * from opt_webseiten where id = $fk_webseiten";
            $resWBS = mysqli_query($connect,$sql_webseiten);
            $rowWBS = mysqli_fetch_assoc($resWBS);
            $webseiten = $rowWBS['wb_option'];

            $sql_login = "select * from opt_login where id = $fk_login";
            $resLOG = mysqli_query($connect,$sql_login);
            $rowLOG = mysqli_fetch_assoc($resLOG);
            $login = $rowLOG['l_option'];

            $sql_backend = "select * from opt_backend where id = $fk_backend";
            $resBaE = mysqli_query($connect,$sql_backend);
            $rowBaE = mysqli_fetch_assoc($resBaE);
            $backend = $rowBaE['b_option'];

            $sql_content = "select * from opt_content where id = $fk_content";
            $resCOU = mysqli_query($connect,$sql_content);
            $rowCOU = mysqli_fetch_assoc($resCOU);
            $content = $rowCOU['ct_otpion'];

            $sql_art = "select * from opt_art where id = $fk_art";
            $resART = mysqli_query($connect,$sql_art);
            $rowART = mysqli_fetch_assoc($resART);
            $art = $rowART['art_option'];

            $sql_profil = "select * from opt_profile where id = $fk_profile";
            $resPRO = mysqli_query($connect,$sql_profil);
            $rowPRO = mysqli_fetch_assoc($resPRO);
            $profile = $rowPRO['pr_otpion'];
           
            $tbodyADD .= "
            <div class='col g-3'>
            <div class='angebot_card box-shadow_white'>
        <div class='ang_header'>
            <img src='components/media/logo/D&S_Logo_200x115.jpg'' width='300' alt='ai'>
        </div>
        <div class='ang_card-body'>
            <span class='tag'>$art</span>
            <h4 class='ang_title'>$aname</h4>
            <p class='ang_description'>
              $adetails
                <table class='table table-striped'>
                  <tr>
                    <td>Anzahl der Webseiten</td>
                    <td>$webseiten</td>
                  </tr>
                  <tr>
                    <td>Login</td>
                    <td class='option'>$login</td>
                  </tr>
                  <tr>
                    <td>Backend</td>
                    <td class='option'>$backend</td>
                  </tr>
                  <tr>
                    <td>Content-Upload</td>
                    <td class='option'>$content</td>
                  </tr>
                  <tr>
                    <td>Userprofil</td>
                    <td class='option'>$profile</td>
                  </tr>
                </table>
                <a class='price'>$apreis €</a>
            </p>
            <div class='user hidden'>$my_session</div>
           </div>
    </div>
    </div>    
            ";
        }
    }else {
            $tbodyADD =  "<tr><td colspan='9' class='noitem'><center>Derzeit keine Basis-Pakete vorhanden</center></td></tr>";
    }
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
<section id = "UnsereAngebote">
    <div class="angebote_titel">
        <h1 class="ang_titel">Unser Angebot für Kunden</h1>
    </div>
    <div class="angebote_text">
        <p class="ang_text_start">
            Wir legen großen Wert darauf, dass unsere Pakete skalierbar sind und mit dem Wachstum und den sich ändernden Anforderungen unserer Kunden mitwachsen können. Unsere Kunden können jederzeit von einem Paket zum nächsten wechseln, um sicherzustellen, dass ihre Website stets ihren Bedürfnissen entspricht.
        </p>
    </div>
    <div class="container angebote_basis">
        <div class="basisangebote"></div>
        <div class="basisangebote_text">
            <p class="ang_text">
                Unsere <span class="bold_mark">Basispakete</span> umfassen die Erstellung einer benutzerfreundlichen Website mit einem ansprechenden Design und grundlegenden Funktionen, die perfekt für Start-ups und kleinere Unternehmen geeignet sind. Diese Pakete bieten eine kostengünstige Lösung für Unternehmen, die online präsent sein möchten.
            </p>
        </div>
        <div>
            <div class="container mb-4">
                <div class="row row-cols-lg-4 row-cols-md-3 space justify-content-around">
                    <?php 
                        echo $tbodyAB;
                    ?>        
                </div>
            </div>
        </div>
    </div>
    <div class="angebote_standard">
        <div class="standardangebote"></div>
        <div class="container standardangebote_text">
            <p class="ang_text white_text">
                Für Unternehmen, bzw. KMU's, die etwas mehr Funktionalität und Anpassung benötigen, bieten wir <span class="bold_mark">erweiterte Pakete</span> an, die zusätzliche Funktionen wie Kontaktformulare, Galerien, Blogintegration und Social-Media-Integrationen enthalten. Diese Pakete eignen sich ideal für Unternehmen, die ihre Online-Präsenz ausbauen und mit ihren Kunden interagieren möchten.
            </p>
        </div>
        <div>
            <div class="container mb-4">
                <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 space justify-content-start">
                    <?php 
                        echo $tbodyPerw;
                    ?>        
                </div>
            </div>
        </div>
    </div>
    <div class="container angebote_premium">
        <div class="premiumangebote"></div>
        <div class="premiumangebote_text">
            <p class="ang_text">
                Unsere <span class="bold_mark">Premium</span>-Pakete bieten eine vollständig maßgeschneiderte Lösung mit allen Funktionen, die ein Unternehmen benötigt, um online erfolgreich zu sein. Diese Pakete umfassen individuelles Design, erweiterte Funktionen wie E-Commerce-Integration, Kundenportale und individuelle Entwicklungen nach den spezifischen Anforderungen des Kunden.
            </p>
        </div>
        <div>
            <div class="container mb-4">
                <div class="row row-cols-lg-4 row-cols-md-3 space justify-content-around">
                    <?php 
                        echo $tbodyPRP;
                    ?>        
                </div>
            </div>
        </div>
    </div>
    <div class="angebote_addons">
        <div class="addonangebote"></div>
        <div class="container addonangebote_text">
            <p class="ang_text white_text">
                Unsere Pakete bei Webdesign Digitale Seele bieten eine solide Grundlage für Ihre Webdesign-Bedürfnisse, und darüber hinaus können Sie auch aus einer Vielzahl von Erweiterungen und <span class="bold_mark">Addons</span> wählen, um die Funktionalität Ihrer Website weiter zu verbessern und anzupassen.            
            </p>
        </div>
        <div>
            <div class="container mb-2">
                <div class="row row-cols-lg-3 row-cols-sm-3 space justify-content-start">
                    <?php 
                        echo $tbodyADD;
                    ?>        
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="components/scripts/option.js"></script>
<script src="components/scripts/art.js"></script>

</body>
</html>