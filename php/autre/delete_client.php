<?php
  require_once 'connexion_db.php';

  $cin = $_POST['cin'];

  $query = "DELETE FROM client WHERE cin = '".$cin."'";
  $result = $cnx->query($query);
  ?>
