<?php
  session_start();
  $commerciaux= $_POST['email'];
  $_SESSION['commerciaux'] = $commerciaux;
?>
