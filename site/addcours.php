<?php
session_start();
include("traitement/connectedb.php");
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
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Cours Espace / Ajouter cours</b></p>
    </section>
    <!-- Path Section -->
      <?php 
    /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/
    if (!(isset($_SESSION['code_massar'])) || $_SESSION['type']!="professeur" ){
      echo "
      <script>
     if(window.confirm(\"vous ne pouvez pas accedez a cette page \")){
        window.location.href = 'index.php';
      }else{
        window.location.href = 'index.php';
      }
      </script>";
    }
    ?>
    <!-- Posts Section -->     
      <p align="center">
      <form method = "post" action = "traitement/upload.php" enctype = "multipart/form-data">
       <table border= "1">
        <tr>
          <td width="547" required="required"><b>Nom du fichier</b> (au format <strong>texte</strong> ou <strong>HTML</strong> ) : 
          <input name = "userfile" type = "file"></td>

          <td><textarea name="commentaire" required="required" placeholder="commentaire"></textarea></td>        
          
          <td><select name="type_cours" required="required">
                <option>cours</option>
                <option>TP</option>
              </select>
          </td>
          
            <!--specifier le cour dans le quelle on va importer ce fichier-->
          <td><select name="cours">
                <?php
                    $query1 = "SELECT filiere from professeur where code_massar_prof=".$_SESSION['code_massar'] .";";
                    $res1 = mysqli_query($conn,$query1);
                    while($row = mysqli_fetch_assoc($res1)) {
                     $filiere = $row['filiere'];
                       } 

                      $query2 = "SELECT nom from cours where id_filiere=\"".$filiere."\";";
                      $res2 = mysqli_query($conn,$query2);
                      while ($row = mysqli_fetch_assoc($res2)) {
                        echo "<option>".$row['nom']."</option>";
                      }
            ?>
          
               </select>
          </td>
          <td width="74"><input type = "submit" value = "Envoyer" class="btn btn-danger"></td>
        </tr>
       </table>
      </form>
    </p>                           
    <!--Fotter,script and Contact form-->
  <?php
  include("traitement/footer.php");
  ?> 
</body>
</html>