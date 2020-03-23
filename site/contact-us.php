<?php
session_start();
include("traitement/function.php")
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    
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

  <!--END Nav bar-->
  <div class="contact-form">
    <form action="#" method="POST">
      <h1>Contact Us</h1>
      <?php if(!isset($_SESSION['code_massar'])){
          
          echo '<div class="txtb">
            <label>Full Name :</label>
            <input type="text" name="name" required placeholder="Enter Your Name"';
             if(isset($_SESSION['code_massar'])) { echo 'disabled="disabled" value='.$_SESSION['nom'].'';}
          echo '></div>';
          

          echo '<div class="txtb">
            <label>Email :</label>
            <input type="email" name="email" required placeholder="Enter Your Email" ';
             if(isset($_SESSION['code_massar'])) { echo 'disabled="disabled" value='.$_SESSION['email'].'';}
          echo '></div>';
      }
      ?>
        <div class="txtb">
          <label>Message :</label>
          <textarea class="txttb" name="message" required placeholder="Enter your text here"></textarea>
        </div>
        <input type="submit" name="submit" class="btn" value="SEND">
  </form>
    <a class="retourn" href="Index.php">Retourner a l'acceuil</a>
  </div>

   <?php
        if (!(isset($_SESSION['login']))) {
          
               } 
//else on fait une redirection a la page de connexion
        else{
              
    
              

        if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['message'])) {    
          $name = $_POST['login'];
      $visitor_email = $_POST['email'];
      
        }
       else{
              $name = $_SESSION['name'];
            /*  $visitor_email = $_SESSION['email'];*/
      
              }/*
      $contacte_message = $_POST['message'];

      $email_from= $visitor_email;
      $email_objet = $_POST['objet'];
      $email_body = "NOM : $name.\n".
              "E-mail : $visitor_email.\n".
              "Message : $contacte_message.\n";

      $to = "ayman.binou@gmail.com";

      $headers = "From : $email_from \r\n";
      $haeders .= "Reply To : $email_from";

      mail($to,$email_objet,$email_body,$headers);

      header("Location: index.html");*/
      }
        ?>

  </body>
</html>
