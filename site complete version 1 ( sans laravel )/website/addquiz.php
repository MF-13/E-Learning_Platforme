<?php

session_start();

?>

<!DOCTYPE html>

<html>

<head>

	<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="static/css/bootstrap.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="static/css/quiz.css">

	<title>Ajouter Quiz</title>

</head>

<body>

	<?php

      include("traitement/navbar.php");

      include("traitement/function.php");

 	?>

<!---------------------------------------------------------------------------------------------------->  

<?php

      if (isset($_GET['etat'])) {

        if($_GET['etat']=="true"){

          echo '

            <div class="alert alert-success" >

              <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'addquiz.php\';

               }, 2000);

            </script>

            ';





          }else{

            echo '<div class="alert alert-danger" >

                      <i class="fas fa-times"></i> <strong>Error !<strong> l\'hors de l\'opération ! .

                  </div>

                  <script>

                     setTimeout(function(){

                        window.location.href = \'addquiz.php\';

                     }, 2000);

                  </script>

                  ';



          }

      }

?>

<?php

echo '

    <div class="container">

        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card">

                    <h5 class="card-header">Ajouter le Quiz</h5>

                    <div class="card-body">

    ';
if (isset($_POST['number'])) {

    if (empty($_POST['number'])) {

        header("location: addQuiz.php");

    }

    $n = $_POST['number'];

    

    echo'<form action="traitement/insertqst.php" method="post">
          <input type="hidden" name="qst" value="'.$n.'">

          ';

    echo'<div class="form-group row">

                        <label for="inputTitre" class="col-sm-2 col-form-label">Titre Quiz</label>

                        <div class="col-sm-8">

                        <input type="text" name="titre" class="form-control" id="inputtitre">

                        </div>

         </div>

         <div class="form-group row">

                        <label for="inputTitre" class="col-sm-2 col-form-label">Dérnier délai <br>(vide si il n\'ya pas de limit)</label>

                        <div class="col-sm-8">

                        <input type="datetime-local" name="delai" class="form-control" id="inputtitre">

                        </div>

         </div>';

         /*Question area*/

    echo '<div class="col-lg-12 col-md-12 col-sm-12">

          

          ';



    for ($i=1; $i <=$n ; $i++) { 

        

        echo'<div class="card">

                <div class="card-body">

                    Question '.$i.' :

                </div>

                 <input type="text" style="margin: 10px;" name="question'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Question">

                  <input type="text" style="margin: 10px;" name="repcorrques'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Reponse correcte">

                  <input type="text" style="margin: 10px;" name="rep2ques'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 2">

                  <input type="text" style="margin: 10px;" name="rep3ques'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 3">

            </div>

        ';



    }

        echo ' 

                </div>';

        /*End Question area*/



     echo '<input type="submit" value="Ajouter" class="btn btn-info float-right" >';

echo '</form>';





}else{

echo '

<form method="POST"> 

<div class="form-group row">

                        <label for="inputTitre" class="col-sm-2 col-form-label">Nombre des questions : </label>

                        <div class="col-sm-8">

                        <input type="number" class="form-control"  id="number" name="number" placeholder="ex: 4">

                        </div>

         </div> 



<input type="submit" value="Suivant" class="btn btn-info float-right" onclick="numberquestion()"/>  

</form> 

';

// Enter No:<input type="text" id="number" name="number"/> 



}

echo '              </div>

                </div>

            </div>

        </div>

    </div>



';





?>

<!---------------------------------------------------------------------------------------------------->  



 

<!---------------------------------------------------------------------------------------------------->

 	<script type="text/javascript">  

        function numberquestion(){  



        var number=document.getElementById("number").value; 



        document.location.replace("random.php?"+number);



        }  

    </script> 

    <?php

	  include("traitement/footer.php");

	?> 



</body>

</html>

