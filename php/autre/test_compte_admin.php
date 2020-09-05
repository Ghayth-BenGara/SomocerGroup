<?php
   require_once 'connexion_db.php';
   $email = $_POST['email'];
   
   $requete = "SELECT * FROM administrateur WHERE email = '$email'";
   $result = mysqli_query($cnx,$requete) or die("Erreur : Requéte erroné.");

   if (mysqli_num_rows($result) >0){
     echo "admin existe";
   }

   else {
     echo "admin existe pas";
   }
 ?>
