function envoyerMailContact(){
    var nom = document.getElementById('nom').value;
    var email = document.getElementById('email').value;
    var sujet = document.getElementById('sujet').value;
    var message = document.getElementById('message').value;

    chargementEnvoiMailContact().then(envoieMailContact(nom,email,sujet,message));
    return false;
  }

  async function chargementEnvoiMailContact(){
    swal({
      text: 'Envoi Email en cours..',
      title:'Notification ! ',
      allowEscapeKey: false,
      allowOutsideClick: false,
      padding:'4em',
      timer: 3000,
      onOpen: () => {
        swal.showLoading();
      }
    })
  }

   async function envoieMailContact(nom, email, sujet, message){
    $.ajax({
      url:"php/autre/envoie_mail_contact.php",
      method:"POST",
      data:{
        nom:nom,
        email:email,
        sujet:sujet,
        message:message
      },
      success:function(data){
        confirmationEnvoi();
      }
    })
  }

  function confirmationEnvoi(){
    swal({
      type: 'success',
      title:'Merci pour votre message',
      html:
      '<p>'+'Votre message a été envoyé avec succés. Notre service clientèle va répondre à votre message le plutôt possible.'+'</p>',
      width: 500,
      padding: '3em',
      showCloseButton: false,
      showCancelButton: false,
      focusCancel: false,
      popup: 'animated fadeInDown faster',
      showConfirmButton: false,
      allowEscapeKey: true,
      allowEnterKey:false,
      scrollbarPadding: true,
      timer: 3000,
      allowOutsideClick:false
    })
  }

  function loadText1(){
    swal({
      title: 'REVÊTEMENT MURAL ?',
      type: 'info',
      html:
          '<p>' + 'Somocer Group propose une large gamme de carreaux de céramique pour le revêtement mural de cuisine, de salle de bain ou de toutes autres pièces à vivre. Notre collection de faïence murale vous offre une multitude de possibilités pour une déco innovante et élégante, qui répond à tous les goûts, les ambiances et les envies. Faites votre choix parmi notre collection et affirmez votre style à des prix doux. ' + '</p>',
      width: 700,
      padding: '3em',
      showCloseButton: true,
      showCancelButton: true,
      focusCancel: false,
      cancelButtonText:'Fermer',
      cancelButtonColor: '#48cae4',
      popup: 'animated fadeInDown faster',
      popup: 'animated fadeOutUp',
      showConfirmButton: false,
      allowEscapeKey: true,
      allowEnterKey:false,
      scrollbarPadding: true,
      allowOutsideClick:false
    });
  }

  function loadText2(){
    swal({
      title: 'REVÊTEMENT SOL ?',
      type: 'info',
      html:
          '<p>' + 'Disponible en une variété immense de couleurs et de formes, la gamme de revêtement de sol SOMOCER group offre un grand choix exclusifs et innovants de carreaux céramique correspondant à tous les goûts et toutes les décorations. Résistant à l’usure et dont les couleurs sont pratiquement inaltérables, le carrelage sol en grès, un mélange d’argile et de feldspath, ne requiert pas un entretien régulier grâce à ses performances mécaniques élevées, sa résistance chimique et son absorption très basse d’eau. Les experts de SOMOCER group vous aideront à déterminer le type de sol qui sera le mieux adapté à votre projet de rénovation. ' + '</p>',
      width: 700,
      padding: '3em',
      showCloseButton: true,
      showCancelButton: true,
      focusCancel: false,
      cancelButtonText:'Fermer',
      cancelButtonColor: '#48cae4',
      popup: 'animated fadeInDown faster',
      popup: 'animated fadeOutUp',
      showConfirmButton: false,
      allowEscapeKey: true,
      allowEnterKey:false,
      scrollbarPadding: true,
      allowOutsideClick:false
    });
  }

  function loadText3(){
    swal({
      title: 'SANITAIRE ?',
      type: 'info',
      html:
          '<p>' + 'Bien que la céramique sanitaire soit réputée pour sa beauté et son charme, c’est souvent sa résistance qui nous impressionne. La gamme des baignoires et des équipements sanitaires de SOMOCER group sont dotées d’une grande durabilité qui leur permet de résister aux changements de température et à l’humidité grâce aux plaques teintées dans la masse et certifiées NF. Faites votre choix parmi notre collection de sanitaire pour une salle de bain moderne qui inspire luxe, élégance et sensualité. ' + '</p>',
      width: 700,
      padding: '3em',
      showCloseButton: true,
      showCancelButton: true,
      focusCancel: false,
      cancelButtonText:'Fermer',
      cancelButtonColor: '#48cae4',
      popup: 'animated fadeInDown faster',
      popup: 'animated fadeOutUp',
      showConfirmButton: false,
      allowEscapeKey: true,
      allowEnterKey:false,
      scrollbarPadding: true,
      allowOutsideClick:false
    });
  }

  function verificationForm(){
    var email = document.getElementById('email').value;
    var matricule = document.getElementById('matricule').value;
    testCompteAdmin(email, matricule);
     return false;
  }

  function testCompteAdmin(email, matricule){
    $.ajax({
      url:"php/autre/test_compte_admin.php",
      method:"POST",
      data:{
        email:email
      },
      success:function(data){
        if(data == 'admin existe pas'){
          swal({
            type: "error",
            title:'Oups !',
            html:
            '<p>'+' Désolé : Aucune compte trouvée avec ces informations. Vérifier votre Email et votre Matricule et ressayer ultérieurement..'+'</p>',
            width: 400,
            padding: '3em',
            showCloseButton: true,
            showCancelButton: false,
            focusCancel: false,
            popup: 'animated fadeInDown faster',
            showConfirmButton: false,
            allowEscapeKey: false,
            allowEnterKey:false,
            scrollbarPadding: true,
            timer:6000,
            allowOutsideClick:false
          })
        }
       else if (data == 'admin existe'){
         testInformations(email,matricule);
        }
      }
    })
  }

  function testInformations(email, matricule){
    $.ajax({
      url:"php/autre/test_information_administrateur.php",
      method:"POST",
      data:{
        email:email,
        matricule:matricule
      },
      success:function(data){
        if(data == 'pas admin'){
          swal({
            type: "error",
            title:'Oups !',
            html:
            '<p>'+' Désolé : Aucune admin trouvée avec ces informations. Vérifier votre Email et votre Matricule et ressayer une autre fois..'+'</p>',
            width: 400,
            padding: '3em',
            showCloseButton: true,
            showCancelButton: false,
            focusCancel: false,
            popup: 'animated fadeInDown faster',
            showConfirmButton: false,
            allowEscapeKey: false,
            allowEnterKey:false,
            scrollbarPadding: true,
            timer:6000,
            allowOutsideClick:false
          })
        }
        else if(data == 'admin trouve'){
            chargementLoginAdmin(email);
        }
      }
    })
  }

  function chargementLoginAdmin(email){
    swal({
      text: 'Connexion en cours..',
      title:'Connexion',
      allowEscapeKey: false,
      allowOutsideClick: false,
      padding:'3em',
      timer: 3000,
      onOpen: () => {
        swal.showLoading();
      }
    })
    .then(function() {
      swal({
        type: 'success',
        title:'Connecté',
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
        creerSessionAdmin(email);
      })
    })
  }

  function creerSessionAdmin(email){
    $.ajax({
      url:"php/autre/creer_session_admin.php",
      method:"POST",
      data:{
        email:email
      },
      success:function(data){
        window.location = "php/gestion_commerciaux.php";
      }
    })
  }

  function logoutUtilisateur(){
    $.confirm({
      title: 'Déconnexion',
      content: 'Vous étes sur de fermer votre compte?',
      autoClose: 'Annuler|10000',
      buttons: {
        logoutUser: {
          text: 'Déconnexion',
          action: function () {
            location.href = "autre/deconnexion.php";
          }
        },
        Annuler: function () {
        }
      }
    });
  }

  function verifCommerciaux(){
    var email = document.getElementById('email').value;
    var matricule = document.getElementById('matricule').value;
    var nom = document.getElementById('nom').value;
    var prenom = document.getElementById('prenom').value;
    var adresse = document.getElementById('adresse').value;

    testCompteCommerciaux(email, matricule, nom, prenom, adresse);
    return false;
  }

  function testCompteCommerciaux(email, matricule, nom, prenom, adresse){
    $.ajax({
      url:"autre/test_compte_commerciaux.php",
      method:"POST",
      data:{
        email:email
      },
      success:function(data){
        if(data == 'commerciaux existe'){
          swal({
            type: "error",
            title:'Oups !',
            html:
            '<p>'+' Désolé : Cette Email est associé à un autre commerciaux. Vérifier votre Email et ressayer une autre fois..'+'</p>',
            width: 400,
            padding: '3em',
            showCloseButton: true,
            showCancelButton: false,
            focusCancel: false,
            popup: 'animated fadeInDown faster',
            showConfirmButton: false,
            allowEscapeKey: false,
            allowEnterKey:false,
            scrollbarPadding: true,
            timer:6000,
            allowOutsideClick:false
          })
        }
        else if (data == 'commerciaux existe pas'){
          creerCompteCommerciaux(email, matricule, nom, prenom, adresse);
        }
      }
    })
  }

  function creerCompteCommerciaux(email, matricule, nom, prenom, adresse){
      $.ajax({
        url:"autre/creer_commerciaux.php",
        method:"POST",
        data:{
          email:email,
          matricule:matricule,
          nom:nom,
          prenom:prenom,
          adresse:adresse
        },
        success:function(data){
          if(data == "compte creer"){
            alertCompteCreer(nom,prenom);
          }
    
          else if(data == "compte non creer"){
            alertCompteNonCreer();
          }
        }
      })
    }
  
    function alertCompteCreer(nom,prenom){
      swal({
          type: 'success',
          title:'Commerciaux créer',
          html:
          '<p>'+' Trés bien <b>' +prenom +' '+ nom +'</b> Votre nouveau commerciaux a été crée avec succé.. '+'</p>',
          width: 400,
          padding: '3em',
          showCloseButton: false,
          showCancelButton: false,
          focusCancel: false,
          popup: 'animated fadeInDown faster',
          showConfirmButton: true,
          confirmButtonColor: '#48cae4',
          confirmButtonText:'Je confirme',
          allowEscapeKey: false,
          allowEnterKey:false,
          scrollbarPadding: true,
          allowOutsideClick:false
        })
        .then((result) => {
          location.href = "gestion_commerciaux.php";
          })
      }

      function alertCompteNonCreer(){
        swal({
          type: 'error',
          title:'Oups !',
          html:
          "<p>"+" Désolé : Cette fonction n'est pas disponible pour le moment. Ressayer ultérieurement.."+"</p>",
          width: 400,
          padding: '3em',
          showCloseButton: true,
          showCancelButton: false,
          focusCancel: false,
          popup: 'animated fadeInDown faster',
          showConfirmButton: true,
          allowEscapeKey: false,
          allowEnterKey:false,
          scrollbarPadding: true,
          timer:4000,
          allowOutsideClick:false
        })
      }

      function updateCommerciaux(){
        var email = document.getElementById('email').value;
        var matricule = document.getElementById('matricule').value;
        var prenom = document.getElementById('prenom').value;
        var nom = document.getElementById('nom').value;
        var adresse = document.getElementById('adresse').value;

        chargementUpdateCompte(email,matricule,prenom,nom,adresse);
        return false;
      }

      function chargementUpdateCompte(email,matricule,prenom,nom,adresse){
        swal({
          text: 'Modifier le commerciaux en cours..',
          title:'Modifier commerciaux',
          allowEscapeKey: false,
          allowOutsideClick: false,
          padding:'3em',
          timer: 4000,
          onOpen: () => {
            swal.showLoading();
          }
        })
          .then(function() {
            updateCompteUtilisateur(email,matricule,prenom,nom,adresse);
          })
        }

        function updateCompteUtilisateur(email,matricule,prenom,nom,adresse){
          $.ajax({
            url:"autre/update_commerciaux.php",
            method:"POST",
            data:{
              email:email,
              matricule:matricule,
              nom:nom,
              prenom:prenom,
              adresse:adresse
            },
            success:function(data){
              confirmationUpdateCompte();
            }
          })
        }

        function confirmationUpdateCompte(){
          swal({
            type: 'success',
            title:'Modification du commerciaux',
            html:
            '<p>'+'Le commerciaux a été modifié avec succés..'+'</p>',
            width: 500,
            padding: '3em',
            showCloseButton: false,
            showCancelButton: false,
            focusCancel: false,
            popup: 'animated fadeInDown faster',
            showConfirmButton: false,
            allowEscapeKey: true,
            allowEnterKey:false,
            scrollbarPadding: true,
            timer: 3000,
            allowOutsideClick:false
          })
          .then(function() {
            window.location = "gestion_commerciaux.php";
          })
        }

        function verifClient(){
          var cin = document.getElementById('cin').value;
          var email = document.getElementById('email').value;
          var nom = document.getElementById('nom').value;
          var prenom = document.getElementById('prenom').value;
          var com = document.getElementById("com").value;
          var adresse = document.getElementById("adresse").value;
          testCompteClient(cin, email, nom, prenom, com, adresse);
          return false;
        }

        function testCompteClient(cin, email, nom, prenom, com, adresse){
          $.ajax({
            url:"autre/test_compte_client.php",
            method:"POST",
            data:{
              cin:cin
            },
            success:function(data){
              if(data == 'client existe'){
                swal({
                  type: "error",
                  title:'Oups !',
                  html:
                  '<p>'+' Désolé : Cette CIN est associé à un autre compte. Vérifier votre CIN et ressayer une autre fois..'+'</p>',
                  width: 400,
                  padding: '3em',
                  showCloseButton: true,
                  showCancelButton: false,
                  focusCancel: false,
                  popup: 'animated fadeInDown faster',
                  showConfirmButton: false,
                  allowEscapeKey: false,
                  allowEnterKey:false,
                  scrollbarPadding: true,
                  timer:6000,
                  allowOutsideClick:false
                })
              }
              else if (data == 'client existe pas'){
                creerCompteClient(cin, email, nom, prenom, com, adresse);
              }
            }
          })
        }

        function creerCompteClient(cin, email, nom, prenom, com, adresse){
          $.ajax({
            url:"autre/creer_client.php",
            method:"POST",
            data:{
              cin:cin,
              email:email,
              nom:nom,
              prenom:prenom,
              com:com,
              adresse:adresse
            },
            success:function(data){
              if(data == "client creer"){
                alertClientCreer(nom,prenom);
              }
        
              else if(data == "client non creer"){
                alertClientNonCreer();
              }
            }
          })
        }
      
        function alertClientCreer(nom,prenom){
          swal({
              type: 'success',
              title:'Client créer',
              html:
              '<p>'+' Trés bien ! Votre nouveau client a été crée avec succée.. '+'</p>',
              width: 400,
              padding: '3em',
              showCloseButton: false,
              showCancelButton: false,
              focusCancel: false,
              popup: 'animated fadeInDown faster',
              showConfirmButton: true,
              confirmButtonColor: '#48cae4',
              confirmButtonText:'Je confirme',
              allowEscapeKey: false,
              allowEnterKey:false,
              scrollbarPadding: true,
              allowOutsideClick:false
            })
            .then((result) => {
              location.href = "gestion_client.php";
              })
          }
    
          function alertClientNonCreer(){
            swal({
              type: 'error',
              title:'Oups !',
              html:
              "<p>"+" Désolé : Cette fonction n'est pas disponible pour le moment. Ressayer ultérieurement.."+"</p>",
              width: 400,
              padding: '3em',
              showCloseButton: true,
              showCancelButton: false,
              focusCancel: false,
              popup: 'animated fadeInDown faster',
              showConfirmButton: true,
              allowEscapeKey: false,
              allowEnterKey:false,
              scrollbarPadding: true,
              timer:4000,
              allowOutsideClick:false
            })
          }

          function updateClient(){
            var cin = document.getElementById('cin').value;
            var email = document.getElementById('email').value;
            var prenom = document.getElementById('prenom').value;
            var nom = document.getElementById('nom').value;
            var adresse = document.getElementById('adresse').value;
            var com = document.getElementById('com').value;
            chargementUpdateClient(cin,email,prenom,nom,adresse,com);
            return false;
          }
    
          function chargementUpdateClient(cin,email,prenom,nom,adresse,com){
            swal({
              text: 'Modifier le client en cours..',
              title:'Modifier compte client',
              allowEscapeKey: false,
              allowOutsideClick: false,
              padding:'3em',
              timer: 4000,
              onOpen: () => {
                swal.showLoading();
              }
            })
              .then(function() {
                updateCompteClient(cin,email,prenom,nom,adresse,com);
              })
            }
    
            function updateCompteClient(cin,email,prenom,nom,adresse,com){
              $.ajax({
                url:"autre/update_client.php",
                method:"POST",
                data:{
                  cin:cin,
                  email:email,
                  nom:nom,
                  prenom:prenom,
                  adresse:adresse,
                  com:com
                },
                success:function(data){
                  confirmationUpdateClient();
                }
              })
            }
    
            function confirmationUpdateClient(){
              swal({
                type: 'success',
                title:'Modification du client',
                html:
                '<p>'+'Le client a été modifié avec succés..'+'</p>',
                width: 500,
                padding: '3em',
                showCloseButton: false,
                showCancelButton: false,
                focusCancel: false,
                popup: 'animated fadeInDown faster',
                showConfirmButton: false,
                allowEscapeKey: true,
                allowEnterKey:false,
                scrollbarPadding: true,
                timer: 3000,
                allowOutsideClick:false
              })
              .then(function() {
                window.location = "gestion_client.php";
              })
            }

            function verificationFormLogin(){
              var email = document.getElementById('email_com').value;
              var matricule = document.getElementById('matricule_com').value;
              testInformationsCommerciaux(email, matricule);
               return false;
            }

            function testInformationsCommerciaux(email, matricule){
              $.ajax({
                url:"php/autre/test_information_commerciaux.php",
                method:"POST",
                data:{
                  email:email,
                  matricule:matricule
                },
                success:function(data){
                  if(data == 'pas commerciaux'){
                    swal({
                      type: "error",
                      title:'Oups !',
                      html:
                      '<p>'+' Désolé : Aucun commerciaux trouvée avec ces informations. Vérifier votre Email et votre Matricule et ressayer une autre fois..'+'</p>',
                      width: 400,
                      padding: '3em',
                      showCloseButton: true,
                      showCancelButton: false,
                      focusCancel: false,
                      popup: 'animated fadeInDown faster',
                      showConfirmButton: false,
                      allowEscapeKey: false,
                      allowEnterKey:false,
                      scrollbarPadding: true,
                      timer:6000,
                      allowOutsideClick:false
                    })
                  }
                  else if(data == 'commerciaux trouve'){
                      chargementLoginCommerciaux(email);
                  }
                }
              })
            }
          
            function chargementLoginCommerciaux(email){
              swal({
                text: 'Connexion en cours..',
                title:'Connexion',
                allowEscapeKey: false,
                allowOutsideClick: false,
                padding:'3em',
                timer: 3000,
                onOpen: () => {
                  swal.showLoading();
                }
              })
              .then(function() {
                swal({
                  type: 'success',
                  title:'Connecté',
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
                  creerSessionCommerciaux(email);
                })
              })
            }
          
            function creerSessionCommerciaux(email){
              $.ajax({
                url:"php/autre/creer_session_commerciaux.php",
                method:"POST",
                data:{
                  email:email
                },
                success:function(data){
                  window.location = "php/consult_client.php";
                }
              })
            }

            function verificationFormCreation(){
              var email = document.getElementById('email').value;
              var matricule = document.getElementById('matricule').value;
              var nom = document.getElementById('nom').value;
              var prenom = document.getElementById('prenom').value;
              var adresse = document.getElementById('adresse').value;
              testCompteAdminCreer(email, matricule,nom,prenom,adresse);
              return false;
            }

            function testCompteAdminCreer(email, matricule,nom,prenom,adresse){
              $.ajax({
                url:"php/autre/test_compte_admin.php",
                method:"POST",
                data:{
                  email:email
                },
                success:function(data){
                  if(data == 'admin existe'){
                    swal({
                      type: "error",
                      title:'Oups !',
                      html:
                      '<p>'+' Désolé : Cette Email est associé à un autre ADMIN. Vérifier votre Email et ressayer ultérieurement..'+'</p>',
                      width: 400,
                      padding: '3em',
                      showCloseButton: true,
                      showCancelButton: false,
                      focusCancel: false,
                      popup: 'animated fadeInDown faster',
                      showConfirmButton: false,
                      allowEscapeKey: false,
                      allowEnterKey:false,
                      scrollbarPadding: true,
                      timer:6000,
                      allowOutsideClick:false
                    })
                  }
                 else if (data == 'admin existe pas'){
                   creerAdmin(email,matricule,nom,prenom,adresse);
                  }
                }
              })
            }
          
            function creerAdmin(email,matricule,nom,prenom,adresse){
              $.ajax({
                url:"php/autre/creer_admin.php",
                method:"POST",
                data:{
                  email:email,
                  matricule:matricule,
                  nom:nom,
                  prenom:prenom,
                  adresse:adresse
                },
                success:function(data){
                  if(data == 'admin non creer'){
                    swal({
                      type: "error",
                      title:'Oups !',
                      html:
                      '<p>'+' Désolé : Une erreur inattendue est survenue lors du création du ADMIN..'+'</p>',
                      width: 400,
                      padding: '3em',
                      showCloseButton: true,
                      showCancelButton: false,
                      focusCancel: false,
                      popup: 'animated fadeInDown faster',
                      showConfirmButton: false,
                      allowEscapeKey: false,
                      allowEnterKey:false,
                      scrollbarPadding: true,
                      timer:6000,
                      allowOutsideClick:false
                    })
                  }
                  else if(data == 'admin creer'){
                      chargementCreerAdmin(email);
                  }
                }
              })
            }
          
            function chargementCreerAdmin(email){
              swal({
                text: 'Création en cours..',
                title:'Création du compte ADMIN',
                allowEscapeKey: false,
                allowOutsideClick: false,
                padding:'3em',
                timer: 3000,
                onOpen: () => {
                  swal.showLoading();
                }
              })
              .then(function() {
                swal({
                  type: 'success',
                  title:'Connecté',
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
                  creerSessionAdmin(email);
                })
              })
            }
          
            function creerSessionAdmin(email){
              $.ajax({
                url:"php/autre/creer_session_admin.php",
                method:"POST",
                data:{
                  email:email
                },
                success:function(data){
                  window.location = "php/gestion_commerciaux.php";
                }
              })
            }

            function verifCommande(){
              var num_commande = document.getElementById('num_commande').value;
              var nom = document.getElementById('nom').value;
              var quantite = document.getElementById('quantite').value;
              var prix = document.getElementById('prix').value;
              var montant = document.getElementById("montant").value;
              var adresse = document.getElementById("adresse").value;
              var cl = document.getElementById("cl").value;
              var email = document.getElementById("email").value;
              PasserCommande(num_commande, nom, quantite, prix, montant, adresse, cl, email);
              return false;
            }

            function PasserCommande(num_commande, nom, quantite, prix, montant, adresse, cl, email){
              $.ajax({
                url:"autre/creer_commande.php",
                method:"POST",
                data:{
                  num_commande:num_commande,
                  nom:nom,
                  quantite:quantite,
                  prix:prix,
                  montant:montant,
                  adresse:adresse,
                  cl:cl,
                  email:email
                },
                success:function(data){
                  if(data == "commande creer"){
                    alertCommandeCreer();
                  }
            
                  else{
                    alertCommandeNonCreer();
                  }
                }
              })
            }
        
          function alertCommandeCreer(){
            swal({
                type: 'success',
                title:'Commande passé',
                html:
                '<p>'+' Trés bien ! Votre commande a été passé avec succé.. '+'</p>',
                width: 400,
                padding: '3em',
                showCloseButton: false,
                showCancelButton: false,
                focusCancel: false,
                popup: 'animated fadeInDown faster',
                showConfirmButton: true,
                confirmButtonColor: '#48cae4',
                confirmButtonText:'Je confirme',
                allowEscapeKey: false,
                allowEnterKey:false,
                scrollbarPadding: true,
                allowOutsideClick:false
              })
              .then((result) => {
                location.href = "gestion_commande.php";
              })
            }
      
            function alertCommandeNonCreer(){
              swal({
                type: 'error',
                title:'Oups !',
                html:
                '<p>'+'Désolé : Une erreur inattendue est survenue lors du création de la commande..'+'</p>',
                width: 400,
                padding: '3em',
                showCloseButton: false,
                showCancelButton: false,
                focusCancel: false,
                popup: 'animated fadeInDown faster',
                showConfirmButton: true,
                confirmButtonColor: '#ff0000',
                confirmButtonText:'Annuler',
                allowEscapeKey: false,
                allowEnterKey:false,
                scrollbarPadding: true,
                allowOutsideClick:false
              })
              .then((result) => {
                location.href = "gestion_commande.php";
                })
            }

            function calculMontant(){
              var montant = document.getElementById("montant");
              var prix = document.getElementById("prix").value;
              var quantite = document.getElementById("quantite").value;

              x = prix*quantite;
              montant.value = x;
            }

            function verifCommandeUpdate(){
              var num_commande = document.getElementById('num_commande').value;
              var nom = document.getElementById('nom').value;
              var quantite = document.getElementById('quantite').value;
              var prix = document.getElementById('prix').value;
              var montant = document.getElementById('montant').value;
              var adresse = document.getElementById('adresse').value;
              var cin = document.getElementById('cin').value;
              chargementUpdateCommande(num_commande,nom,quantite,prix,montant,adresse,cin);
              return false;
            }
      
            function chargementUpdateCommande(num_commande,nom,quantite,prix,montant,adresse,cin){
              swal({
                text: 'Modifier la commande en cours..',
                title:'Modifier commande',
                allowEscapeKey: false,
                allowOutsideClick: false,
                padding:'3em',
                timer: 4000,
                onOpen: () => {
                  swal.showLoading();
                }
              })
                .then(function() {
                  updateCommande(num_commande,nom,quantite,prix,montant,adresse,cin);
                })
              }
      
              function updateCommande(num_commande,nom,quantite,prix,montant,adresse,cin){
                $.ajax({
                  url:"autre/update_commande.php",
                  method:"POST",
                  data:{
                    num_commande:num_commande,
                    nom:nom,
                    quantite:quantite,
                    prix:prix,
                    montant:montant,
                    adresse:adresse,
                    cin:cin
                  },
                  success:function(data){
                    confirmationUpdateCommande();
                  }
                })
              }
      
              function confirmationUpdateCommande(){
                swal({
                  type: 'success',
                  title:'Modification de la commande',
                  html:
                  '<p>'+'Le commande a été modifié avec succés..'+'</p>',
                  width: 500,
                  padding: '3em',
                  showCloseButton: false,
                  showCancelButton: false,
                  focusCancel: false,
                  popup: 'animated fadeInDown faster',
                  showConfirmButton: false,
                  allowEscapeKey: true,
                  allowEnterKey:false,
                  scrollbarPadding: true,
                  timer: 3000,
                  allowOutsideClick:false
                })
                .then(function() {
                  window.location = "gestion_commande.php";
                })
              }
      

  