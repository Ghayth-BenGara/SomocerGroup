<?php
  session_start();
  if ((isset($_SESSION['admin'])) || (!empty($_SESSION['admin']))){
    header('Location:php/page_not_found_admin.php');
    return false;
  }
  else if ((isset($_SESSION['commerciaux'])) || (!empty($_SESSION['commerciaux']))){
    header('Location:php/page_not_found_commerciaux.php');
    return false;
  }
  ?>
<!DOCTYPE html>
  <html lang = "en">
  <head>
    <meta charset = "utf-8">
    <meta name = "keywords" content = "Somocer">
    <meta name =  "author" contet = "Chaima Ben Mbarek">
    <meta http-equiv = "refresh" content = "600">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Société | Somocer Group</title>
    <link href = "images/favicon.png" rel = "icon"  type = "image/x-icon" />
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link href = "vendors/animate/animate.css" rel = "stylesheet">
	  <link href = "vendors/font-awesome/css/font-awesome.min.css" rel = "stylesheet" >
    <link href = "vendors/camera-slider/camera.css"rel = "stylesheet" >
    <link href = "vendors/owl_carousel/owl.carousel.css" rel = "stylesheet" type = "text/css"  media = "all">
    <link href = "css/style.css" rel = "stylesheet" type = "text/css"  media = "all" />
    <link href = "css/sweetalert2.css" rel = "stylesheet" >
  </head>
  <body>
    <div class = "preloader"></div>
	   <section class = "top_header_area">
	      <div class = "container">
          <ul class = "nav navbar-nav top_nav">
            <li><a href = "#"><i class = "fa fa-phone"></i>73410469</a></li>
            <li><a href = "#"><i class = "fa fa-envelope-o"></i>contact@somocergroup.com</a></li>
            <li><a href = "#"><i class = "fa fa-home"></i>Route de Sfax , MENZEL HAYET 5033 Monastir</a></li>
            <li><a href = "#"><i class = "fa fa-clock-o"></i>Lundi - Samedi 08:00 - 18:00</a></li>
            <li><a href = "#"><i class = "fa fa-fax"></i>73410401</a></li>
          </ul>
          <ul class = "nav navbar-nav navbar-right social_nav">
            <li><a href = "https://www.facebook.com/somocer"><i class = "fa fa-facebook" aria-hidden = "true"></i></a></li>
            <li><a href = "https://www.instagram.com/explore/tags/somocer/top/?hl=fr"><i class = "fa fa-instagram" aria-hidden = "true"></i></a></li>
          </ul>
	       </div>
	     </section>
         <nav class = "navbar navbar-default header_aera" id = "main_navbar">
            <div class = "container">
              <div class = "col-md-2 p0">
                <div class = "navbar-header">
                  <button type = "button" class = "navbar-toggle collapsed" data-toggle = "collapse" data-target = "#min_navbar">
                    <span class = "sr-only">Toggle navigation</span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                    <span class = "icon-bar"></span>
                   </button>
                   <a class = "navbar-brand" href = "index.php"><img src = "images/logo.png" alt = ""></a>
                 </div>
               </div>
               <div class = "col-md-10 p0">
                <div class = "collapse navbar-collapse" id = "min_navbar">
                    <ul class = "nav navbar-nav navbar-right">
                    <?php
                        require_once 'php/autre/menu_site.php';
                     ?>
                    </ul>
                </div>
            </div>
          </div>
        </nav>
        <section class = "banner_area" data-stellar-background-ratio = "0.5">
        <h2>Société</h2>
        <ol class = "breadcrumb">
            <li><a href = "index.php">Accueil</a></li>
            <li><a href = "societe.php" class = "active">Société</a></li>
        </ol>
    </section>
    <section class = "building_construction_area">
        <div class = "container">
            <div class = "row building_construction_row">
                <div class = "col-sm-8 constructing_laft">
                    <h2>Somocer Group</h2>
                    <img src = "images/construction.jpg" alt = "">
                    <a href = "#">Présentation</a>
                    <p>Les produits SOMOCER group, une fabrication tunisienne, du tas de terre au chef-d'œuvre singulier.
                        Depuis sa création depuis une trentaine d'année, SOMOCER group, pionnière sur le marché local, incarne l'art du raffinement et le savoir-faire.
                        Grâce à la qualité de ses services adaptés aux besoins de ses clients, elle a fait sa renommée en fabriquant des carreaux de faïence en bi-cuisson, du Grès et des baignoires en acrylique. Mêlant les techniques archaïques à celle des nouvelles technologies, SOMOCER group maîtrise divinement tout le processus de fabrication de céramique allant de la faïence et passant par le Grès.
                        Chaque année, de nouveaux décors, de nouvelles sélections naissent et de nouvelles formes se développent. C'est au sein de SOMOCER group que les idées novatrices voient le jour. Avoir un résultat optimal demande un certain savoir-faire scrupuleux car les tâches et les choix doivent être effectués avec précision. Nos normes propres de production sont bien souvent plus exigeantes que les normes internationales auxquelles nous nous référons car notre système répond aux normes ISO 9001-2008. C'est votre première garantie!
                        Nos conseillers et nos experts sont à votre disposition pour vous apporter des précisions sur tous les produits et les services de SOMOCER group , votre partenaire qui sublime votre quotidien!</p>
                </div>
                <div class = "col-sm-4 constructing_right">
                    <h2>Liens rapides</h2>
                    <ul class = "painting">
                        <li onclick = "loadText1()"><a href = "#"><i class = "fa fa-building-o" aria-hidden = "true"></i>REVÊTEMENT MURAL</a></li>
                        <li onclick = "loadText2()"><a href = "#"><i class = "fa fa-globe" aria-hidden = "true"></i>REVÊTEMENT SOL</a></li>
                        <li onclick = "loadText3()"><a href = "#"><i class = "fa fa-heart" aria-hidden="true"></i>SANITAIRE</a></li>
                    </ul>
                    <div class = "contact_us">
                        <h4>Contacter-nous</h4>
                        <a href = "#" class = "contac_namber">73 410 469</a>
                        <a href = "#" class = "contac_namber">73 410 043</a>
                        <p>Ou envoyer nous un message içi :</p>
                        <a href = "contact.php" class = "button_all">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class = "footer_area">
        <div class = "container">
          <div class = "footer_row row">
            <div class = "col-md-3 col-sm-6 footer_about">
              <h2>Somocer Group</h2>
              <img src = "images/logo.png" alt = "">
                <p>La société SOMOCER GROUP vous propose un service clientèle disponible pour répondre à toutes vos questions. Contactez-nous ou retrouvez-nous dans notre locale.</p>
                <ul class = "socail_icon">
                  <li><a href = "https://www.facebook.com/somocer"><i class = "fa fa-facebook" aria-hidden = "true"></i></a></li>
                  <li><a href = "https://www.instagram.com/explore/tags/somocer/top/?hl=fr"><i class = "fa fa-instagram" aria-hidden = "true"></i></a></li>
                </ul>
              </div>
              <div class = "col-md-3 col-sm-6 footer_about quick">
                <h2>Plan d'accés</h2>
                <ul class = "quick_link">
                 <li><a href = "#"><i class = "fa fa-info"></i>Société</a></li>
                 <li><a href = "#"><i class = "fa fa-sign-in"></i>Authentification</a></li>
                 <li><a href = "#"><i class = "fa fa-envelope-o"></i>Contacter-nous</a></li>
               </ul>
             </div>
             <div class = "col-md-3 col-sm-6 footer_about">
               <h2>Notre vision</h2>
               <a href = "#" class = "twitter">SOMOCER group est une marque haut de gamme qui fait rêver grâce à ses services sur mesure, ses produits uniques et sa collection contemporaine qui s'adapte à tous les goûts et à tous les choix.</a>
             </div>
             <div class = "col-md-3 col-sm-6 footer_about">
               <h2>Contacter nous</h2>
               <address>
                 <p>Vous avez des questions, des commentaires ou vous voulez tout simplement dire bonjour :</p>
                 <ul class = "my_address">
                   <li><a href = "#"><i class = "fa fa-envelope" aria-hidden = "true"></i>miniprojet.groupec@gmail.com</a></li>
                   <li><a href = "#"><i class = "fa fa-phone" aria-hidden = "true"></i>70 686 486</a></li>
                   <li><a href = "#"><i class = "fa fa-map-marker" aria-hidden = "true"></i>Parc Technologique El Ghazela, Ariana</a></li>
                </ul>
              </address>
            </div>
          </div>
        </div>
        <div class = "copyright_area">
          &copy; Tous les droits sont réservés 2020 <a href = "https://www.somocergroup.com/">SOMOCER GROUP</a>
        </div>
      </footer>
    <script src = "js/jquery-1.12.0.min.js"></script>
      <script src = "js/bootstrap.min.js"></script>
      <script src = "vendors/animate/wow.min.js"></script>
      <script src = "vendors/camera-slider/jquery.easing.1.3.js"></script>
      <script src = "vendors/camera-slider/camera.min.js"></script>
      <script src = "vendors/isotope/imagesloaded.pkgd.min.js"></script>
      <script src = "vendors/isotope/isotope.pkgd.min.js"></script>
      <script src = "vendors/Counter-Up/jquery.counterup.min.js"></script>
      <script src = "vendors/Counter-Up/waypoints.min.js"></script>
      <script src = "vendors/owl_carousel/owl.carousel.min.js"></script>
      <script src = "vendors/stellar/jquery.stellar.js"></script>
      <script src = "js/theme.js"></script>
      <script src = "js/fonction.js"></script>
      <script src = "js/sweetalert2.all.min.js"></script>
</body>
</html>
