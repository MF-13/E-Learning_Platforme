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
            <input type="text" name="nom" required placeholder="Enter Your Name"';
             if(isset($_SESSION['code_massar'])) { echo 'disabled="disabled" value='.$_SESSION['nom'].'';}
          echo '></div>';
          echo '<div class="txtb">
              <label>Telephone : </label>
              <input type="number" name="telephone" required placeholder="Enter you Phone number(without 0)"';
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
        if (filter_has_var(INPUT_POST,"submit")) {

          if(!(isset($_SESSION['code_massar'])))
            {
              $nom=$_POST['nom'];
              $email=$_POST['email'];
              $telephone=$_POST['telephone'];
              $message=$_POST['message'];
              $type="visiteur";
              $code_massar=-1;
            }else{
                  if(TypeUser($_SESSION['type'])==0){
                    $query1="select num_tele from professeur where code_massar_prof=? ;";
                  }else{
                    $query1="select num_tele from etudiant where code_massar =? ;";
                  }
                  
                  $values1 = array($_SESSION['code_massar']);
                  $res = PDO($query1,$values1);

                  if($res->rowCount()!=0){
                  while ($row = $res->fetch()) {
                    $telephone=$row['num_tele'];
                  }
                }
                  $code_massar=$_SESSION['code_massar'];
                  $nom=$_SESSION['nom'];
                  $email=$_SESSION['email'];
                  $message=$_POST['message'];
                  $type=$_SESSION['type'];
            }

            //traitement d insertion a la base de donnees
            $query2 = "INSERT INTO message(name,message,email,telephone,type,code_user) values(?,?,?,?,?,?);";
            $values2 = array($nom,$message,$email,$telephone,$type,$code_massar);
            PDO($query2,$values2);
        }
   ?>

  </body>
</html>
