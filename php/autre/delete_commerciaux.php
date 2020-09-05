<?php
  require_once 'connexion_db.php';

  $email = $_POST['email'];

  $query = "DELETE FROM commerciaux WHERE email = '".$email."'";
  $result = $cnx->query($query);
  ?>
