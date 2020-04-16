<?php
session_start();
  ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/Cours-espace.css">
    <link rel="stylesheet" href="static/css/Index.css">
    <title>Cours Espace</title>
</head>
<body>
  <!--Begin of NavBar-->
 <?php
 include("traitement/navbar.php");
 include("traitement/function.php");
 ?>
  <!--END Nav bar-->
    
    
    
   <?php
   /*Construire le path du fichier */
    $dir = $_GET['dir'];
    $file = $_GET['file'];

    $path = $dir."/".$file;

    $query2 = "SELECT commantaire,nbr_telechargement,date_ajoute,nom_pdf,titre from file where  nom_pdf= ?;";
    $values2 = array($file);
    $res2 = PDO($query2,$values2);
    if($res2->rowCount()!=0){
           while ($row = $res2->fetch()) {
            $comm = $row['commantaire'];
            $nbr_telechargement= $row['nbr_telechargement'];
            $date_ajoute = $row['date_ajoute'];
            $nom = $row['titre'];
            }
        }

    echo '<div class="pmedia" style=" text-align: center; ">
          <iframe src="'.$path.'" width="400" height="400"></iframe>
          <br><br>'; 
     echo "
                <ul class=\"pmedia mylist\">
                  <li><b>Publier le :</b> ".$date_ajoute."</li>
                    <li><b>Nbr de telechargement :</b>".$nbr_telechargement."</li>
                      <li><b>Commentaire : </b>".$comm."</li>
                </ul><br><br>";

      echo '<a href="'.$path.'" download><button class="btn btn-danger">telecharger</button></a></div><br>';
    ?>


   <!--Fotter,script and Contact form-->

  <?php
  include("traitement/footer.php");
  ?>                                           
      </body>
      </html>