<?php
   require_once 'connexion_db.php';
   $cin = $_POST['cin'];
   $complet = "";

   $requete = "SELECT * FROM client WHERE cin = '$cin'";
   $result = mysqli_query($cnx,$requete) or die("Erreur : Requéte erroné.");

       if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $complet = $prenom.' '.$nom;
        }
        else{
            $complet = "Aucun client";
        }
        echo $complet;
 ?>
