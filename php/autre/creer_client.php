<?php
  require_once 'connexion_db.php';

  $cin = $_POST['cin'];
  $email = $_POST['email'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $adresse = $_POST['adresse'];
  $com = $_POST['com'];

  $sql = "INSERT INTO client (cin, email, nom, prenom, adresse, email_commerciaux)
      VALUES ('$cin', '$email', '$nom', '$prenom', '$adresse', '$com')";

  if (mysqli_query($cnx, $sql)) {
    echo "client creer";
  }

  else{
    echo "client non creer";
  }
 ?>
