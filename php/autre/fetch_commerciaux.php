<?php
  require_once 'connexion_db.php';

  $output = '';
  if(isset($_POST["query"])){
   $search = mysqli_real_escape_string($cnx, $_POST["query"]);
   $query = "SELECT * FROM commerciaux WHERE email LIKE '%".$search."%' OR nom LIKE '%".$search."%' OR prenom LIKE '%".$search."%'";
 }
 else{
   $query = "SELECT * FROM commerciaux ORDER BY prenom";
 }

 $result = mysqli_query($cnx, $query);
 if(mysqli_num_rows($result) > 0){
   while($row = mysqli_fetch_array($result)){
     $output .= '<div class = "blog_tow_row">
                  <div class = "col-md-4 col-sm-6">
                    <div class = "renovation">
                      <img src = "../images/logo.png" alt = "" style = "width:70%;">
                      <div class = "renovation_content">
                        <a class = "clipboard" href = "#" onclick = "ouvriModalModifierCommerciaux(`'.$row['email'].'`, `'.$row['matricule'].'`, `'.$row['prenom'].'`, `'.$row['nom'].'`, `'.$row['adresse'].'`)"><i class = "fa fa-edit" aria-hidden = "true"></i></a>
                        <a href = "#" class = "clipboard clipboard_del" href = "#" onclick = "deleteCommerciaux(`'.$row['email'].'`)"><i  class = "fa fa-trash" aria-hidden = "true"></i></a>
                        <a class = "tittle" href = "#">'.$row["prenom"].' '.$row["nom"].'</a>
                        <div class = "date_comment">
                        <a href = "#"><i class = "fa fa-envelope-o" aria-hidden = "true"></i>'.$row["email"].'</a>
                        <br>
                        <br>
                        <a href = "#"><i class = "fa fa-home" aria-hidden = "true"></i>'.$row["adresse"].'</a>
                        </div>
                      </div>
                    </div>
                </div>
              </div>';
      }
      echo $output;
    }
    else{
      echo 'Aucun commerciaux trouvé..';
    }
 ?>
