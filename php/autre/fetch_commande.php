<?php
  require_once 'connexion_db.php';
  session_start();
  $com = $_SESSION['commerciaux'];
  $output = '';
  if(isset($_POST["query"])){
   $search = mysqli_real_escape_string($cnx, $_POST["query"]);
   $query = "SELECT * FROM commande WHERE email_commerciaux = '$com' ";
 }
 else{
   $query = "SELECT * FROM commande WHERE email_commerciaux = '$com' ORDER BY num_commande";
 }

 $result = mysqli_query($cnx, $query);

 $output = '<table class = "table table-striped table-hover table-responsive">
 <tr>
   <th>Numéro de commande</th>
   <th>Nom</th>
   <th>Quantité</th>
   <th>Prix</th>
   <th>Montant</th>
   <th>Adresse</th>
   <th>CIN du client</th>
   <th>Modifier</th>
   <th>Supprimer</th>
 </tr>';

 if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
    $output .= '<tr>
    <td>'.$row['num_commande'].'</td>
    <td>'.$row['nom'].'</td>
    <td>'.$row['quantite'].'</td>
    <td>'.$row['prix'].'</td>
    <td>'.$row['montant'].'</td>
    <td>'.$row['adresse'].'</td>
    <td>'.$row['cin_client'].'</td>
    <td><a href = "#" onclick = "modifierCommande(`'.$row['num_commande'].'`, `'.$row['nom'].'`, `'.$row['quantite'].'`, `'.$row['prix'].'`,  `'.$row['montant'].'`, `'.$row['adresse'].'`, `'.$row['cin_client'].'`)"><i class = "fa fa-pencil" aria-hidden = "true" id = "icon_update" ></i></a></td>
    <td><a href = "#" onclick = "deleteCommande(`'.$row['num_commande'].'`)"><i class = "fa fa-remove" aria-hidden = "true" id = "icon_remove" ></i></a></td>
    </tr>';
      }
      echo $output;
    }
    else{
      echo 'Aucun commande trouvé..';
    }
 ?>
