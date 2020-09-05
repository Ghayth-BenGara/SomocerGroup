<?php
   require_once 'connexion_db.php';
   $email = $_POST['email'];
   
   $requete = "SELECT * FROM commerciaux WHERE email = '$email'";
   $result = mysqli_query($cnx,$requete) or die("Erreur : Requéte erroné.");

   if (mysqli_num_rows($result) >0){
     echo "commerciaux existe";
   }

   else {
     echo "commerciaux existe pas";
   }
 ?>
