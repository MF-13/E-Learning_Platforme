<?php

session_start();

include("traitement/function.php")



  ?>

<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Contactez-Nous</title>

    

      <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="static/css/bootstrap.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="static/css/contact-us.css">



  </head>

  <body>

      <!--Begin of NavBar-->
<?php
if (isset($_GET['etat'])) {

        if($_GET['etat']=="true"){

          echo '

            <div class="alert alert-success"  style="margin-left: 20px; margin-right: 20px;">

              <i class="far fa-check-square"></i> Message envoyer avec succes

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'contact-us.php\';

               }, 2000);

            </script>

            ';





          }else{

            echo '<div class="alert alert-danger" style="margin-left: 20px; margin-right: 20px;">

                      <i class="fas fa-times"></i> Error ! l\'hors de l\'opération ! .

                  </div>

                  <script>

                     setTimeout(function(){

                        window.location.href = \'contact-us.php\';

                     }, 2000);

                  </script>

                  ';



          }

      }

?>


  <!--END Nav bar-->

  <div class="contact-form">

    <form action="#" method="POST">

      <h1>Contactez Nous</h1>

      <?php if(!isset($_SESSION['id_user'])){

          

          echo '<div class="txtb">

            <label>Nom Complet :</label>

            <input type="text" name="nom" required placeholder="Enter Votre Nom"';

             if(isset($_SESSION['id_user'])) { echo 'disabled="disabled" value='.$_SESSION['nom'].'';}

          echo '></div>';

          echo '<div class="txtb">

              <label>Telephone : </label>

              <input type="number" name="telephone" required placeholder="Enter Votre Numero"';

              if(isset($_SESSION['id_user'])) { echo 'disabled="disabled" value='.$_SESSION['nom'].'';}

          echo '></div>';



          echo '<div class="txtb">

            <label>Email :</label>

            <input type="email" name="email" required placeholder="Enter Votre Email" ';

             if(isset($_SESSION['id_user'])) { echo 'disabled="disabled" value='.$_SESSION['email'].'';}

          echo '></div>';

      }

      ?>

        <div class="txtb">

          <label>Message :</label>

          <textarea class="txttb" name="message" required placeholder="Enter Votre Message"></textarea>

        </div>

        <input type="submit" name="submit" class="btn" value="Envoyer">

  </form>

    <a class="retourn" href="index.php">Retourner a l'acceuil</a>

  </div>



   <?php

        if (filter_has_var(INPUT_POST,"submit")) {



          if(!(isset($_SESSION['id_user'])))

            {

              $nom=test_input($_POST['nom']);

              $email=test_input($_POST['email']);

              $telephone=$_POST['telephone'];

              $message=test_input($_POST['message']);

              $type="visiteur";

              $id_user=-1;

            }else{

                  

                  $query1="select num_tele_user from user where id_user=? ;";

                  $values1 = array($_SESSION['id_user']);

                  $res = PDO($query1,$values1);



                  if($res->rowCount()!=0){

                  while ($row = $res->fetch()) {

                    $telephone=$row['num_tele_user'];

                  }

                }

                  $id_user=$_SESSION['id_user'];

                  $nom=$_SESSION['nom'];

                  $email=$_SESSION['email'];

                  $message=$_POST['message'];

                  $type=$_SESSION['type'];

            }



            $admin_id = "100";

            $admin_email = 'aiman.elbou@gmail.com';

            $admin_type = "admin";

            //traitement d insertion a la base de donnees

            $query2 = "INSERT INTO message(emetteur_id,emetteur_nom,emetteur_email,emetteur_telephone,emetteur_type,message,

            recepteur_id,recepteur_email,recepteur_type) values(?,?,?,?,?,?,?,?,?);";

            $values2 = array($id_user,$nom,$email,$telephone,$type,$message,$admin_id,$admin_email,$admin_type);

            $stm2 = PDO($query2,$values2);

            if ($stm2) {

                  echo '<script language="Javascript"> document.location.replace("contact-us.php?etat=true"); </script>';

              }else{

              

                echo '<script language="Javascript"> document.location.replace("contact-us.php?etat=false"); </script>';

              

                }

        }

   ?>



  </body>

</html>