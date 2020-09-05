<?php
   require_once 'connexion_db.php';
   $email = $_POST['email'];
   $matricule = $_POST['matricule'];

   $requete = "SELECT * FROM administrateur WHERE email = '$email' AND matricule = '$matricule'";
   $result = mysqli_query($cnx,$requete) or die("Erreur : Requéte erroné.");

   if (mysqli_num_rows($result) >0){
     echo "admin trouve";
   }

   else {
     echo "pas admin";
   }
 ?>
