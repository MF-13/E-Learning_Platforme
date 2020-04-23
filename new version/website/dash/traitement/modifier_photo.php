<?php
session_start();
    include("function.php");
    capterConnexion($_SESSION['id_user']);
  ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../static/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="../static/css/Cours-espace.css">
    <link rel="stylesheet" href="../static/css/Index.css">
    <title>Cours Espace</title>
</head>
<body>
   <!--Begin of NavBar-->
 
  <!--END Nav bar-->
    <!-- Path Section -->
    <section class="sectionpath">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Cours Espace / Upload</b></p>
    </section>
      
    <style>
      section.sectionpath{
        margin-top: 100px;
      }
    </style>


    <?php

       //Récupération de l'emplacement temporaire de stockage du fichier sur le serveur
       $tmp_name = $_FILES['userfile']['tmp_name'];
       // none est la valeur attribuée par PHP quand aucun fichier n'a été téléchargé
       if($tmp_name == null){
         echo "Problème de téléchargement : aucun fichier téléchargé !";
         exit;
       }
     // on vérifie maintenant l'extension
     $tmp_type= $_FILES['userfile']['type'];
     if(!strstr($tmp_type,'image/png') && !strstr($tmp_type,'image/jpg') && !strstr($tmp_type,'image/jpeg'))
     {
     echo "Votre format $tmp_type <br>";
     echo "Le fichier n'est pas en format <strong> .png </strong>";
     exit;
     }

       //Récupération de la taille du fichier en octet
       $userfile_size = $_FILES['userfile']['size'];
       if($userfile_size == 0){
         echo "Problème de téléchargement : taille du fichier nulle !";
         exit;
       }

       
       //test si le fichier $userfile a réellement été téléchargé et n'est pas
       // un fichier local comme /etc/passwd par exemple
       if(!is_uploaded_file($tmp_name)){
          echo "Problème de téléchargement : Vérifier le fichier !";
          exit;
       }

       /*construction du path */
       $dept= $_POST['dept']; 
        
       $tab = explode("/",$tmp_type);
       $ex = $tab[count($tab)-1];

       $path ="../../static/img/index/filiére/".$dept.".".$ex;
       
       if(!move_uploaded_file($tmp_name,$path)){
              echo "Impossible de copier le fichier !";
              exit;
       }

       
       echo '<center><H3>Fichier <font color="red">' . $_FILES['userfile']['name'] . '</font> déposé avec succes</H4></center>';
        
        
            
    ?>

  <center><A href="../cours-espace.php">Retour vers la page des cours</A></center>
</body>
</html>