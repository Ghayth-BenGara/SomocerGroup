<?php
  session_start();
  if ((!isset($_SESSION['admin'])) || (empty($_SESSION['admin']))){
    header('Location: ../page_not_found.html');
    return false;
  }
  require_once 'autre/connexion_db.php';
  $output = '';
  $output2 = '';
  ?>
<!DOCTYPE html>
  <html lang = "en">
  <head>
    <meta charset = "utf-8">
    <meta name = "keywords" content = "Somocer">
    <meta name =  "author" contet = "Chaima Ben Mbarek">
    <meta http-equiv = "refresh" content = "600">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <title>Gestion des clients | Somocer Group</title>
    <link href = "../images/favicon.png" rel = "icon"  type = "image/x-icon" />
    <link href = "../css/bootstrap.min.css" rel = "stylesheet">
    <link href = "../vendors/animate/animate.css" rel = "stylesheet">
	  <link href = "../vendors/font-awesome/css/font-awesome.min.css" rel = "stylesheet" >
    <link href = "../vendors/camera-slider/camera.css"rel = "stylesheet" >
    <link href = "../vendors/owl_carousel/owl.carousel.css" rel = "stylesheet" type = "text/css"  media = "all">
    <link href = "../css/style.css" rel = "stylesheet" type = "text/css"  media = "all" />
    <link href = "../login/vendor/animate/animate.css" rel = "stylesheet" type = "text/css" >
	  <link href = "../login/vendor/css-hamburgers/hamburgers.min.css" rel = "stylesheet" type = "text/css" >
	  <link href = "../login/vendor/select2/select2.min.css" rel = "stylesheet" type = "text/css">
	  <link href = "../login/css/util.css" rel = "stylesheet" type = "text/css" >
    <link href = "../login/css/main.css" rel = "stylesheet" type = "text/css" >
    <link href = "../css/jquery-confirm.min.css" rel = "stylesheet" type = "text/css" >
    <link href = "../css/sweetalert2.css" rel = "stylesheet" >
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
                <a class = "navbar-brand" href = "#"><img src = "../images/logo.png" alt = ""></a>
              </div>
            </div>
            <div class = "col-md-10 p0">
              <div class = "collapse navbar-collapse" id = "min_navbar">
                <ul class = "nav navbar-nav navbar-right">
                  <?php require_once 'autre/menu_admin.php' ?>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        <section class = "banner_area" data-stellar-background-ratio = "0.5">
          <h2>Liste des clients</h2>
          <ol class = "breadcrumb">
            <li><a href = "gestion_commerciaux.php" class = "active">Liste des clients</a></li>
          </ol>
        </section>
        <section class = "blog_tow_area">
          <div class = "container">
            <span class = "tittle tittle_ges">
              <h2>Gestion des clients</h2>
              <span class = "icon_plus" onclick = "ouvrirModalAjouterClient()"><i class = "fa fa-plus"></i></span>
            </span>
            <div class = "wrap-input100">
              <input class = "input100" type = "search" name = "search_text" id = "search_text" placeholder = "Chercher des clients.." required>
              <span class = "focus-input100"></span>
              <span class = "symbol-input100">
                <i class = "fa fa-search" aria-hidden = "true"></i>
              </span>
             </div>
            <div id = "result2"></div>
           </div>
          </section>
          <footer class = "footer_area">
            <div class = "container">
              <div class = "footer_row row">
                <div class = "col-md-3 col-sm-6 footer_about">
                  <h2>Somocer Group</h2>
                  <img src = "../images/logo.png" alt = "">
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
          <script>
            function ouvrirModalAjouterClient(){
              swal({
              type: 'info',
              title:'Ajouter un client',
              html:
                 '<form name = "f" id = "form_client" method = "POST" class = "login100-form" action = "#" onsubmit = "return verifClient();">' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "tel" name = "cin" id = "cin" placeholder = "CIN *" required maxlength = "8">' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-id-card" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "email" name = "email" id = "email" placeholder = "Email *" required>' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-envelope-o" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "text" name = "nom" id = "nom" placeholder = "Nom *" required>' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-user" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "text" name = "prenom" id = "prenom" placeholder = "Prénom *" required>' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-user" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<select class = "input100" name = "com" id = "com" onchange = "getNomPrenom();">'+
                     '<option selected>Commerciaux</option>'+
                     '<?php 
                      $query = "SELECT * FROM commerciaux";
                      $result = mysqli_query($cnx, $query);
                      while($row = mysqli_fetch_array($result)){
                        $output .= '<option value = "'.$row['email'].'">'.$row['email'].'</option>';
                      }
                      echo $output;
                     ?>'+
                     '</select>'+
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-envelope" aria-hidden = "true"></i>'+
                     '</span>'+
                  '</div>'+
                  '<p id = "text"></p>'+
                  '<br>'+
                  '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "text" name = "adresse" id = "adresse" placeholder = "Adresse *" required>' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-home" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "container-login100-form-btn">'+
                      '<button class = "login100-form-btn">'+
                        'Ajouter un client'+
                      '</button>'+
                  '</div'+
              '</form>',
              width: 480,
              padding: '3em',
              showCloseButton: true,
              showCancelButton: false,
              focusCancel: false,
              popup: 'animated fadeInDown faster',
              showConfirmButton: false,
              allowEscapeKey: false,
              allowEnterKey:false,
              scrollbarPadding: true,
              allowOutsideClick:false,
            })
            }
          </script>
          <script src = "../js/jquery-1.12.0.min.js"></script>
          <script src = "../js/bootstrap.min.js"></script>
          <script src = "../vendors/animate/wow.min.js"></script>
          <script src = "../vendors/camera-slider/jquery.easing.1.3.js"></script>
          <script src = "../vendors/camera-slider/camera.min.js"></script>
          <script src = "../vendors/isotope/imagesloaded.pkgd.min.js"></script>
          <script src = "../vendors/isotope/isotope.pkgd.min.js"></script>
          <script src = "../vendors/Counter-Up/jquery.counterup.min.js"></script>
          <script src = "../vendors/Counter-Up/waypoints.min.js"></script>
          <script src = "../vendors/owl_carousel/owl.carousel.min.js"></script>
          <script src = "../vendors/stellar/jquery.stellar.js"></script>
          <script src = "../js/theme.js"></script>
          <script src = "../js/fonction.js"></script>
          <script src = "../js/jquery-confirm.min.js"></script>
          <script src = "../js/sweetalert2.all.min.js"></script>
          <script>
             $(document).ready(function(){
              load_data();
              function load_data(query){
                $.ajax({
                  url:"autre/fetch_clients.php",
                  method:"POST",
                  data:{query:query},
                  success:function(data){
                    $('#result2').html(data);
                  }
                });
              }
              $('#search_text').keyup(function(){
                var search = $(this).val();
                if(search != ''){
                  load_data(search);
                }
                else{
                  load_data();
                }
              });
            });

            function deleteClient(cin){
              $.confirm({
                title: 'Supprimer un client',
                content: 'Supprimer ce client ?',
                autoClose: 'Annuler|10000',
                buttons: {
                  logoutUser: {
                    text: 'Supprimer',
                    action: function () {
                      $.ajax({
                        url:"autre/delete_client.php",
                        method:"POST",
                        data:{
                          cin:cin
                        },
                        success:function(data){
                          swal({
                            type: 'success',
                            title: 'Client supprimé',
                            width: 400,
                            padding: '3em',
                            showCloseButton: false,
                            showCancelButton: false,
                            focusCancel: false,
                            popup: 'animated fadeInDown faster',
                            showConfirmButton: false,
                            allowEscapeKey: false,
                            allowEnterKey:false,
                            scrollbarPadding: true,
                            allowOutsideClick:false,
                            timer:2000
                          })
                          .then(function() {
                            window.location = "gestion_client.php";
                          })
                        }
                      });
                    }
                  },
                  Annuler: function () {
                  }
                }
              });
            }
          </script>
          <script>
            function modifierClient(cin,email,prenom,nom,adresse,email_com){
              swal({
              type: 'info',
              title:'Modifier le client',
              html:
                 '<form name = "form_upd_cl" id = "form_upd_cl" method = "POST" class = "login100-form center_form" action = "#" onsubmit = "return updateClient();">' +
                 '<div class = "wrap-input100">' +
                     '<input class = "input100" type = "hidden" name = "cin" id = "cin" required value = "'+cin+'">' +
                     '<span class = "focus-input100"></span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "email" name = "email" id = "email" required value = "'+email+'">' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-envelope-o" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "text" name = "prenom" id = "prenom" required value = "'+prenom+'">' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-user" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "text" name = "nom" id = "nom" required value = "'+nom+'">' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-user" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<input class = "input100" type = "text" name = "adresse" id = "adresse" required value = "'+adresse+'">' +
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-home" aria-hidden = "true"></i>'+
                     '</span>'+
                 '</div>' +
                 '<div class = "wrap-input100 code_input">' +
                     '<select class = "input100" name = "com" id = "com" onchange = "getNomPrenom();">'+
                     '<option selected>Commerciaux</option>'+
                     '<?php 
                      $query = "SELECT DISTINCT email FROM commerciaux";
                      $result = mysqli_query($cnx, $query);
                      while($row = mysqli_fetch_array($result)){
                        $output2 .= '<option id = "'.$row['email'].'">'.$row['email'].'</ id = "">';
                      }
                      echo $output2;
                     ?>'+
                     '</select>'+
                     '<span class = "focus-input100"></span>'+
                     '<span class = "symbol-input100">'+
                              '<i class = "fa fa-user" aria-hidden = "true"></i>'+
                     '</span>'+
                  '</div>'+
                  '<p id = "text">Aucun</p>'+
                  '<br>'+
                 '<div class = "container-login100-form-btn code_btn">' +
                     '<input type = "submit" class = "login100-form-btn" name = "modifier" id = "modifier" value = "Modifier le client">	' +
                 ' </div>' +
              '</form>',
              width: 490,
              padding: '3em',
              showCloseButton: true,
              showCancelButton: false,
              focusCancel: false,
              popup: 'animated fadeInDown faster',
              showConfirmButton: false,
              allowEscapeKey: false,
              allowEnterKey:false,
              scrollbarPadding: true,
              allowOutsideClick:false
            })
            }

            function getNomPrenom(){
              var email_selected = document.getElementById("com").value;
              $.ajax({
                  url:"autre/get_nom_prenom_commerciaux.php",
                  method:"POST",
                  data:{
                    email:email_selected
                  },
                  success:function(data){
                    if (data == "Aucun commerciaux"){
                      var text = document.getElementById('text');
                      var nom = data;
                      text.innerHTML = '<span id = "icon_remove" class = "bolde">' + data + '</span>' + ' ' + '<span>sélectionné</span>' + ' ' + '<i class = "fa fa-remove" id = "icon_remove" aria-hidden = "true"></i>';
                      email_selected.required;
                    }
                    else{
                      var text = document.getElementById('text');
                      var nom = data;
                      text.innerHTML = '<span id = "icon_update" class = "bolde">' + data + '</span>' + ' ' + '<span>sélectionné</span>' + ' ' + '<i class = "fa fa-check" id = "icon_update" aria-hidden = "true"></i>';
                    }                  }
                });
            }
          </script>
        </body>
      </html>
