<?php
   require_once 'connexion_db.php';
   $email = $_POST['email'];
   $matricule = $_POST['matricule'];

   $requete = "SELECT * FROM commerciaux WHERE email = '$email' AND matricule = '$matricule'";
   $result = mysqli_query($cnx,$requete) or die("Erreur : Requéte erroné.");

   if (mysqli_num_rows($result) >0){
     echo "commerciaux trouve";
   }

   else {
     echo "pas commerciaux";
   }
 ?>
