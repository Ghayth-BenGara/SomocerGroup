<?php
  require_once 'connexion_db.php';

  $email = $_POST['email'];
  $matricule = $_POST['matricule'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $adresse = $_POST['adresse'];

  $sql = "UPDATE commerciaux SET matricule = '$matricule', nom = '$nom', prenom = '$prenom' , adresse = '$adresse' WHERE email = '$email'";
  
  if (mysqli_query($cnx, $sql)) {
    echo "commerciaux modifié";
  }

  else{
    echo "commerciaux non modifié";
  }
 ?>
