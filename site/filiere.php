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
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/Index.css">
    <title>E - Learning</title>
</head>
<body>
  <!--Begin of NavBar-->
 <?php
 include("traitement/navbar.php");
 include("traitement/connectedb.php");
 ?>
  <!--END Nav bar-->
 
  <!-- Département Section -->

  <section class="Departement">
    <div>
      <h4 class="myText" style="margin-top: 70px;">ESTM Départements</h4>
      <br>
      <br>
    </div>
  <?php
    $query = "SELECT * from filiere;";
    $result = mysqli_query($conn,$query);
    $cpt = mysqli_num_rows( $result);
     if ( $cpt > 0 )
     {
             
         while($row = mysqli_fetch_assoc($result)) {
             echo' <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <img class="card-img-top" src="static/img/Index/Filiére/communication.png" alt="TCC" height="70">
            <div class="card-body">

              <h5 class="card-title">'.$row["filiere"].'&nbsp('.$row["filiere_id"].')</h5>
              <p class="card-text">Filiére :<br>
                <ul>
                  <li>'.$row["filiere_description"].'</li>
                  
                </ul> 
            </div>
          </div>
        </div>  
      </div>
    </div> ';        

          }

    } else{
      echo "<strong font-position=\"center\">Aucune filiere trouvé</stron>!";
    }
  ?>
  <style>
    .container{
      /*Il rest un probleme dans le positionnement*/
          margin-left: 40%;
          position: center;
    }
  </style>

  </section>
  <!-- End Département section -->
  <!--Fotter,script and Contact form-->

  <?php
  include("traitement/footer.php");
  ?>                                                                                      
  </body>
</html>