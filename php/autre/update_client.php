<?php
  require_once 'connexion_db.php';

  $cin = $_POST['cin'];
  $email = $_POST['email'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $adresse = $_POST['adresse'];
  $com = $_POST['com'];

  $sql = "UPDATE client SET email = '$email', prenom = '$prenom', nom = '$nom' , adresse = '$adresse' , email_commerciaux = '$com' WHERE cin = '$cin'";
  
  if (mysqli_query($cnx, $sql)) {
    echo "client modifié";
  }

  else{
    echo "client non modifié";
  }
 ?>
