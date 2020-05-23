<?php

session_start();

    include("function.php");

    capterConnexion($_SESSION['id_user']);

    $typeresult = TypeUser($_SESSION['type']);



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

    <link rel="stylesheet" href="../static/css/cours-espace.css">

    <link rel="stylesheet" href="../static/css/index.css">

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

    if ($typeresult!=0 || $typeresult!=1){

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

    <!-- <style>

      section.sectionpath{

        margin-top: 100px;

      }

    </style> -->





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

       

       $query1 = "SELECT filiere_user from user where id_user=?;";



       $values1 = array($_SESSION['id_user']);

       $res = PDO($query1,$values1);



        if($res->rowCount()!=0){

              while ($row = $res->fetch()) {

                $filiere = test_input($row['filiere_user']);

              }

          }



       //  nom du fichier dans le système de l'utilisateur

          $tab = explode("/",$tmp_type);

          $ex = $tab[count($tab)-1];

          echo $ex;

       $userfile_name = $_FILES['userfile']['name'];

       $path ="../profileimage/".$_SESSION['type']."/".$_SESSION['id_user'].".".$ex;



       if(!move_uploaded_file($tmp_name,$path)){

              echo "Impossible de copier le fichier !";

              exit;

       }



       

       echo '<center><H3>Fichier <font color="red">' . $_FILES['userfile']['name'] . '</font> déposé avec succes</H4></center>';

        

        

            

    ?>



  <center><A href="../cours-espace.php">Retour vers la page des cours</A></center>

</body>

</html>