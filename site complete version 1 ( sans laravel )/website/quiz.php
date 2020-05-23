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

	<title>Quiz</title>

</head>

<body>

	<?php

      include("traitement/navbar.php");

      include("traitement/function.php");

 	?>

 	<br>

 	<br>

 	<br>

 	<!-- <br>

 	<br>

 	<br>

 	<br>

 	<br>

 	<br> -->

<!---------------------------------------------------------------------------------------------------->

  <div class="container">

    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="card">

          <div class="card-body">

<?php

if (!isset($_POST['id'])) {
  
  echo '<script language="Javascript"> document.location.replace("cours-espace.php"); </script>';
}else{

$id_quiz = $_POST['id'];
}




$query = "select count(id_quiz) as nbr from question_quiz where id_quiz = ?";

$values = array($id_quiz);

$stm = PDO($query,$values);



if ($stm->rowCount()!=0) {

  while ($row = $stm->fetch()) {

    $nbr_qst = $row['nbr'];

  }

}



echo '<form action="traitement/quiztrait.php" method="post">';

  
echo '<input type="hidden"  name="id" value="'.$id_quiz.'" >';
  

  

$q=1;

echo '<h5 class="card-title">Nom quiz : test </h5>';

while($q<=$nbr_qst){

  $query = "SELECT * from question_quiz where id_quiz = ? and n_question = ?" ;

    

  $value = array($id_quiz,$q);

  $res = PDO($query,$value);



  $rep = array();

  if ($res->rowCount()!=0) {

    while($row = $res->fetch()){

      $question  = $row['question'];

      array_push($rep, $row['rep_correcte']);

      array_push($rep, $row['rep_2']);

      array_push($rep, $row['rep_3']);



      shuffle($rep);

      echo'

          <p class="card-text">Question '.$q.' : '.$question.' : </p>';

      foreach ($rep as $r) {

        echo '<input type="radio" value="'.$r.'"  name="'.$q.'" class="quizs">'.$r.'<br>';

      }

      echo '

      <br><hr>';



    }

  }



$q++;

}

  

  

  ?>

    <br>

    <input type="submit" name="submit" class="btn btn-success float-right">

</form>



</div>

</div>

</div>

</div>

</div>







<br>





<!---------------------------------------------------------------------------------------------------->

 	<?php

	  include("traitement/footer.php");

	?> 



</body>

</html>

