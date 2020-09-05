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
<html lang="en">
    <head>
        <meta charset = "utf-8">
        <meta name = "keywords" content = "Somocer">
        <meta name =  "author" contet = "Chaima Ben Mbarek">
        <meta http-equiv = "refresh" content = "600">
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
        <title>Creer un compte | Somocer Group</title>
        <link href = "images/favicon.png" rel = "icon"  type = "image/x-icon" />
        <link href = "css/bootstrap.min.css" rel = "stylesheet">
        <link href = "images/favicon.png" rel = "icon"  type = "image/x-icon" />
        <link rel = "stylesheet" type = "text/css" href = "login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
        <link rel = "stylesheet" type = "text/css" href = "login/vendor/animate/animate.css">	
        <link rel = "stylesheet" type = "text/css" href = "login/vendor/css-hamburgers/hamburgers.min.css">
        <link rel = "stylesheet" type = "text/css" href = "login/vendor/select2/select2.min.css">
        <link rel = "stylesheet" type = "text/css" href = "login/css/util.css">
        <link rel = "stylesheet" type = "text/css" href = "login/css/main.css">
        <link href = "vendors/animate/animate.css" rel = "stylesheet">
        <link href = "vendors/font-awesome/css/font-awesome.min.css" rel = "stylesheet" >
        <link href = "vendors/camera-slider/camera.css"rel = "stylesheet" >
        <link href = "vendors/owl_carousel/owl.carousel.css" rel = "stylesheet" type = "text/css"  media = "all">
        <link href = "css/style.css" rel = "stylesheet" type = "text/css"  media = "all" />
        <link href = "css/sweetalert2.css" rel = "stylesheet" />
      </head>
    <body>
        <div class = "preloader"></div>
        <header class = "all_header navbar-fixed-top">
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
            </header>
            <div class = "limiter">
              <div class = "container-login100">
                <div class = "wrap-login100">
                  <div class = "login100-pic js-tilt" data-tilt>
                    <img src = "images/logo.png" alt = "Somocer Group">
                  </div>
                  <form class = "login100-form" name = "form" id = "form" method = "POST" action = "#" onsubmit = "return verificationFormCreation();">
                    <span class = "login100-form-title">
                      Créer un compte
                    </span>
                    <div class = "wrap-input100">
                      <input class = "input100" type = "email" name = "email" id = "email" placeholder = "Email *" required>
                      <span class = "focus-input100"></span>
                      <span class = "symbol-input100">
                        <i class = "fa fa-envelope-o" aria-hidden = "true"></i>
                      </span>
                    </div>
                    <div class = "wrap-input100">
                      <input class = "input100" type = "password" name = "matricule" id = "matricule" placeholder = "Matricule *" maxlength = "4" required>
                      <span class = "focus-input100"></span>
                      <span class = "symbol-input100">
                        <i class = "fa fa-id-card" aria-hidden = "true"></i>
                      </span>
                      <span toggle = "#matricule" class = "fa fa-eye field-icon toggle-password" ></span>
                    </div>
                    <div class = "wrap-input100">
                        <input class = "input100" type = "text" name = "nom" id = "nom" placeholder = "Nom *" required>
                        <span class = "focus-input100"></span>
                        <span class = "symbol-input100">
                          <i class = "fa fa-user" aria-hidden = "true"></i>
                        </span>
                    </div>
                    <div class = "wrap-input100">
                        <input class = "input100" type = "text" name = "prenom" id = "prenom" placeholder = "Prénom *" required>
                        <span class = "focus-input100"></span>
                        <span class = "symbol-input100">
                          <i class = "fa fa-user" aria-hidden = "true"></i>
                        </span>
                      </div>
                      <div class = "wrap-input100">
                        <input class = "input100" type = "text" name = "adresse" id = "adresse" placeholder = "Adresse *" required>
                        <span class = "focus-input100"></span>
                        <span class = "symbol-input100">
                          <i class = "fa fa-home" aria-hidden = "true"></i>
                        </span>
                      </div>
                    
                    <div class = "container-login100-form-btn">
                      <button class = "login100-form-btn">
                        Creer un compte
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>   
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
	              <script src = "login/vendor/bootstrap/js/popper.js"></script>
	              <script src = "login/vendor/select2/select2.min.js"></script>
	              <script src = "login/vendor/tilt/tilt.jquery.min.js"></script>
                <script >
                  $('.js-tilt').tilt({
                    scale: 1.1
                  })
                </script>
                <script src = "login/js/main.js"></script>
                <script>
                  $(".toggle-password").click(function() {
                    $(this).toggleClass("fa-eye fa-eye-slash");
                      var input = $($(this).attr("toggle"));
                      if (input.attr("type") == "password") {
                        input.attr("type", "tel");
                      }
                      else {
                      input.attr("type", "password");
                    }
                  })
                </script>
                 <script src = "js/sweetalert2.all.min.js"></script>
           
    