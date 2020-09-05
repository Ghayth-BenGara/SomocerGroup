<?php
  require_once 'connexion_db.php';

  $output = '';
  if(isset($_POST["query"])){
   $search = mysqli_real_escape_string($cnx, $_POST["query"]);
   $query = "SELECT * FROM client  WHERE cin LIKE '%".$search."%' OR nom LIKE '%".$search."%' OR prenom LIKE '%".$search."%'";
 }
 else{
   $query = "SELECT * FROM client ORDER BY cin";
 }

 $result = mysqli_query($cnx, $query);

 $output = '<table class = "table table-striped table-hover table-responsive">
 <tr>
   <th>CIN</th>
   <th>Email</th>
   <th>Nom</th>
   <th>Prénom</th>
   <th>Adresse</th>
   <th>Commercial</th>
   <th>Modifier</th>
   <th>Supprimer</th>
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
    <td><a href = "#" onclick = "modifierClient(`'.$row['cin'].'`, `'.$row['email'].'`, `'.$row['prenom'].'`, `'.$row['nom'].'`, `'.$row['adresse'].'`, `'.$row['email_commerciaux'].'`)"><i class = "fa fa-pencil" aria-hidden = "true" id = "icon_update" ></i></a></td>
    <td><a href = "#" onclick = "deleteClient(`'.$row['cin'].'`)"><i class = "fa fa-remove" aria-hidden = "true" id = "icon_remove" ></i></a></td>
    </tr>';
      }
      echo $output;
    }
    else{
      echo 'Aucun client trouvé..';
    }
 ?>
