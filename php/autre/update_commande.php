<?php
  require_once 'connexion_db.php';

  $num_commande = $_POST['num_commande'];
  $nom = $_POST['nom'];
  $quantite = $_POST['quantite'];
  $prix = $_POST['prix'];
  $montant = $_POST['montant'];
  $adresse = $_POST['adresse'];
  $cin = $_POST['cin'];

  $sql = "UPDATE commande SET nom = '$nom', quantite = '$quantite', prix = '$prix', montant = '$montant', adresse = '$adresse', cin_client = '$cin' WHERE num_commande = '$num_commande'";
  
  if (mysqli_query($cnx, $sql)) {
    echo "commande modifié";
  }

  else{
    echo "commande non modifié";
  }
 ?>
