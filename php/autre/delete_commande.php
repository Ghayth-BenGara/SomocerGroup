<?php
  require_once 'connexion_db.php';

  $num_commande = $_POST['num_commande'];

  $query = "DELETE FROM commande WHERE num_commande = '".$num_commande."'";
  $result = $cnx->query($query);
  ?>
