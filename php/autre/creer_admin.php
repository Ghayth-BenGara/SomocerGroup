<?php
  require_once 'connexion_db.php';

  $email = $_POST['email'];
  $matricule = $_POST['matricule'];
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $adresse = $_POST['adresse'];

  $sql = "INSERT INTO administrateur (email, matricule, nom, prenom, adresse)
      VALUES ('$email', '$matricule', '$nom', '$prenom', '$adresse')";

  if (mysqli_query($cnx, $sql)) {
    echo "admin creer";
  }

  else{
    echo "admin non creer";
  }
 ?>
