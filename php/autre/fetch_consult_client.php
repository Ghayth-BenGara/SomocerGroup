<?php
  require_once 'connexion_db.php';
  session_start();
  $com = $_SESSION['commerciaux'];
  $output = '';
  if(isset($_POST["query"])){
   $search = mysqli_real_escape_string($cnx, $_POST["query"]);
   $query = "SELECT * FROM client WHERE email_commerciaux = '$com' ";
 }
 else{
   $query = "SELECT * FROM client WHERE email_commerciaux = '$com' ORDER BY cin";
 }

 $result = mysqli_query($cnx, $query);

 $output = '<table class = "table table-striped table-hover table-responsive">
 <tr>
   <th>CIN</th>
   <th>Email</th>
   <th>Nom</th>
   <th>Prénom</th>
   <th>Adresse</th>
   <th>Email du commerciaux</th>
 </tr>';

 if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
    $output .= '<tr>
    <td>'.$row['cin'].'</td>
    <td>'.$row['email'].'</td>
    <td>'.$row['nom'].'</td>
    <td>'.$row['prenom'].'</td>
    <td>'.$row['adresse'].'</td>
    <td>'.$row['email_commerciaux'].'</td>
    </tr>';
      }
      echo $output;
    }
    else{
      echo 'Aucun client trouvé..';
    }
 ?>
