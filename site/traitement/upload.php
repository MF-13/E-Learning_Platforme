<?php
session_start();
include("connectedb.php");
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
 <?php
 include("navbar.php");
 ?>
  <!--END Nav bar-->
    <!-- Path Section -->
    <section class="sectionpath">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Cours Espace / Upload</b></p>
    </section>
    <!-- Path Section -->
      <?php 
    /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/
    if (!(isset($_SESSION['code_massar'])) || $_SESSION['type']!="professeur" ){
      echo "
      <script>
     if(window.confirm(\"vous ne pouvez pas accedez a cette page \")){
        window.location.href = '../index.php';
      }else{
        window.location.href = '../index.php';
      }
      </script>";
    }
    ?>
    <!-- Posts Section -->  



    <?php

       //Récupération de l'emplacement temporaire de stockage du fichier sur le serveur
       $tmp_name = $_FILES['userfile']['tmp_name'];
        /*echo $tmp_name;*/
       // none est la valeur attribuée par PHP quand aucun fichier n'a été téléchargé
       if($tmp_name == "none"){
         echo "Problème de téléchargement : aucun fichier téléchargé !";
         exit;
       }
     // on vérifie maintenant l'extension
     $tmp_type= $_FILES['userfile']['type'];
     if(!strstr($tmp_type,'text/plain') && !strstr($tmp_type,'text/html') && !strstr($tmp_type,'pdf'))
     {
     echo "Votre format $tmp_type <br>";
     echo "Le fichier n'est pas en format <strong> .txt </strong> ni <strong>.html</strong>";
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
       
       $query = "SELECT filiere from professeur where code_massar_prof=".$_SESSION['code_massar'] .";";
       $res = mysqli_query($conn,$query);

      while($row = mysqli_fetch_assoc($res)) {
       $filiere = $row['filiere'];
        }
       //  nom du fichier dans le système de l'utilisateur
       $userfile_name = $_FILES['userfile']['name'];
       $path ="../file/".$filiere."/$userfile_name";

       if(!move_uploaded_file($tmp_name,$path)){
              echo "Impossible de copier le fichier !";
              exit;
       }


       echo '<center><H3>Fichier <font color="red">' . $_FILES['userfile']['name'] . '</font> déposé avec succes</H4></center>';
        
        /*traitement pour tirer l'id du cour depuis la base de donnees*/
        $query2 ="SELECT id_cour from cours where nom=\"".$_POST['cours']."\";";
        $res2 = mysqli_query($conn,$query2);
        while($row = mysqli_fetch_assoc($res2)){
          $id_cour = $row['id_cour'];
        } 
        
        /*Traitement pour ajouter le fichier a la base de donnes*/
        $query3 = 'INSERT INTO file(pdf_lien,id_filiere,code_prof,commantaire,id_cour,type_cour) 
        VALUES("'.$path.'","'.$filiere.'",'.$_SESSION['code_massar'].',
                "'.$_POST['commentaire'].'",'.$id_cour.',"'.$_POST['type_cours'].'");';
        $res3 = mysqli_query($conn,$query3);   
            
    ?>

  <center><A href="../cours-espace.php">Retour vers la page des cours</A></center>
</body>
</html>