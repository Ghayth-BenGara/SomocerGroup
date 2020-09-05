<?php
   require_once 'connexion_db.php';
   $cin = $_POST['cin'];
   
   $requete = "SELECT * FROM client WHERE cin = '$cin'";
   $result = mysqli_query($cnx,$requete) or die("Erreur : Requéte erroné.");

   if (mysqli_num_rows($result) >0){
     echo "client existe";
   }

   else {
     echo "client existe pas";
   }
 ?>
