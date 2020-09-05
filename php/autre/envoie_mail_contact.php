<?php
  require_once '../phpmailer/PHPMailer.php';
  require_once '../phpmailer/Exception.php';
  require_once '../phpmailer/OAuth.php';
  require_once '../phpmailer/POP3.php';
  require_once '../phpmailer/SMTP.php';
  
  $nomPrenom = $_POST['nom'];
  $email = $_POST['email'];
  $sujet = $_POST['sujet'];
  $message = $_POST['message'];

  $mail = new PHPMailer\PHPMailer\PHPMailer();
  $mail ->IsSmtp();
  $mail ->SMTPDebug = 0;
  $mail ->SMTPAuth = true;
  $mail ->SMTPSecure = 'ssl';
  $mail ->Host = 'smtp.gmail.com';
  $mail ->Port = 465;
  $mail ->Timeout = 5;
  $mail ->IsHTML(true);
  $mail ->Username = 'chaimabenahmed11@gmail.com';
  $mail ->Password = '123456789Ch123';
  $mail ->SetFrom($email,$nomPrenom);
  $mail ->Subject = $sujet;
  $mail ->Sender = ($email);
  $mail ->Body = "<p>$message </p>
                  <br>
                  <p><b>De :<b/> $email </p>
                  <hr>
                  <b>Somocer Group</b>";
  $mail ->AddAddress('chaimabenahmed11@gmail.com');
  $mail ->CharSet = 'UTF-8';
  $mail->send();
?>
