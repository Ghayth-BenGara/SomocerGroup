<?php
   require_once 'connexion_db.php';
   $email = $_POST['email'];
   $complet = "";

   $requete = "SELECT * FROM commerciaux WHERE email = '$email'";
   $result = mysqli_query($cnx,$requete) or die("Erreur : Requéte erroné.");

   if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $nom = $row['nom'];
            $prenom = $row['prenom'];
            $complet = $prenom.' '.$nom;
        }
        else{
            $complet = "Aucun commerciaux";
        }
        echo $complet;
 ?>
