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
 ?>
  <!--END Nav bar-->
    <!-- Path Section -->
    <section class="sectionpath">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Cours Espace / Nom Filiére / Nom de Cours</b></p>
    </section>
    <!-- Path Section -->
    
   <?php
   /*Construire le path du fichier */
    $dir = $_GET['dir'];
    $file = "../".$dir."/".$_GET['file'];

    echo ((!$file)? "": "<center><h2> Informations utiles sur le fichier ".$_GET['file']." </h2></center>");
    echo "<B>Date dernier accès : </B>". date ("j F Y H:i", fileatime($file))."<br>";
    echo "<B>Date dernière modification : </B>". date ("j F Y H:i", filemtime($file))."<br>";

    echo "<B>Droits d'accès : </B>" . decoct(fileperms($file))."<br>";
    echo "Type du fichier : " . filetype($file)."<br>";
    echo "<B>Taille du fichier : </B>" . filesize($file)."<br>";

    //Pour telecharger le fichier
    echo '<p><a href="telecharger.php?file='.$file.'">telecharger</a></p>';
    ?>


   <!--Fotter,script and Contact form-->

  <?php
  include("traitement/footer.php");
  ?>                                           
      </body>
      </html>