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

    <link rel="stylesheet" href="static/css/index.css">

    <link rel="stylesheet" href="static/css/cours-espace.css">

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

   if (!isset($_POST['dir']) || !isset($_POST['file'])) {
     echo '<script language="Javascript"> document.location.replace("cours-espace.php"); </script>';
   }

   /*Construire le path du fichier */

    $dir = $_POST['dir'];

    $file = $_POST['file'];



    $path = $dir."/".$file;



    $query2 = "SELECT commantaire,date_ajoute,nom_pdf,titre from file where  nom_pdf= ?;";

    $values2 = array($file);

    $res2 = PDO($query2,$values2);

    if($res2->rowCount()!=0){

           while ($row = $res2->fetch()) {

            $comm = test_input($row['commantaire']);

            $date_ajoute = $row['date_ajoute'];

            $nom = test_input($row['titre']);

            }

        }



    echo '<div class="pmedia center">

          <iframe src="'.$path.'" class="frame" ></iframe>

          <br><br>'; 

     echo "

                <ul class=\"pmedia mylist center \">

                  <li><b>Publier le :</b> ".$date_ajoute."</li>

                      <li><b>Commentaire : </b>".$comm."</li>

                </ul><br><br>";



      echo '<a href="'.$path.'" download><button class="btn btn-danger center">telecharger</button></a></div><br>';



  



    ?>



    

   <!--Fotter,script and Contact form-->

   

  <?php

  include("traitement/footer.php");

  ?> 

  <style>

    /* .frame{

      width: 800px;

      height: 800px;

    }

    .pmedia{

      margin-top: 50px;

    }

    @media (max-width: 575px) { 

    .frame{

      width: 300px;

      height: 500px;

    }

 } */

  </style>                                        

      </body>

      </html>