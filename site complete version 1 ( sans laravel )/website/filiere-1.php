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

    <link rel="stylesheet" href="static/css/filiere-1.css">

    

    <title>Filiere</title>

</head>

<body>

  <!--Begin of NavBar-->

 <?php

 include("traitement/navbar.php");

 include("traitement/function.php");

 ?>

 

  <!--END Nav bar-->

    <div class="container" >

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <!-- card -->

                  

<?php

$query2 = "select distinct departement from filiere";

$values2 = array();

$result2 = PDO($query2,$values2);



if($result2->rowCount()!=0){

  while ($row =  $result2->fetch()) {





    echo '<div class="card">';

    echo '<button class="accordion"><h3 class="titre">'.strtoupper(test_input($row['departement'])).'</h3> </button>

            <div class="panel">';

    echo '<img src="static/img/index/filiere/'.test_input($row['departement']).'.png" class="card-img-top" alt="...">';



    $query3 = "select distinct * from filiere where departement = ?";

    $values3 = array(test_input($row['departement']));

    $result3 = PDO($query3,$values3);

    

    if($result3->rowCount()!=0){

      while ($row1 = $result3->fetch()) {

          echo '<div class="card-body">';

          echo'<h5 class="card-title">'.test_input($row1['filiere']).'</h5>';

          echo '<p class="card-text">'.test_input($row1['filiere_description']).'</p>

               <p class="card-text"><strong>Cours de la filiere : </strong></p>';



          $query = "select nom from cours where id_filiere = ?";

          $values = array(test_input($row1['filiere_id']));

          $result = PDO($query,$values);

          if($result->rowCount()!=0){

            echo "<ul>";

              while ($row = $result->fetch()) {

                  echo "<li>".test_input($row['nom'])."</li>";

              }

            echo "</ul><br><hr>";

          }else{

            echo "Aucun cours pour Cette filiere est disponible pour le moment";

          }

          echo "</div>";

      }

    }

                

    echo "</div>";

    echo "</div>";

  }

}

?>

<!-- end card -->

              

         

          </div>

          </div>

        </div>     

</body>

<footer>

  <?php

    include("traitement/footer.php");

    ?>  

</footer>


<script src="static/js/filiere.js"></script>
<!-- <script>

          var acc = document.getElementsByClassName("accordion");

          var i;



          for (i = 0; i < acc.length; i++) {

            acc[i].addEventListener("click", function() {

              this.classList.toggle("active");

              var panel = this.nextElementSibling;

              if (panel.style.display === "block") {

                panel.style.display = "none";

              } else {

                panel.style.display = "block";

              }

            });

          }

          </script> -->

</html>