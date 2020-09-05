<?php
  require_once 'connexion_db.php';

  $num_commande = $_POST['num_commande'];
  $nom = $_POST['nom'];
  $quantite = $_POST['quantite'];
  $prix = $_POST['prix'];
  $montant = $_POST['montant'];
  $adresse = $_POST['adresse'];
  $cl = $_POST['cl'];
  $email = $_POST['email'];

  $sql = "INSERT INTO commande (num_commande, nom, quantite, prix, montant, adresse, cin_client, email_commerciaux)
      VALUES ('$num_commande', '$nom', '$quantite', '$prix', '$montant', '$adresse', '$cl', '$email')";

  if (mysqli_query($cnx, $sql)) {
    echo "commande creer";
  }

  else{
    echo "commande non creer";
  }
 ?>
