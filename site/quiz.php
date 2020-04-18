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
    <link rel="stylesheet" href="static/css/Index.css">
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
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
 	<br>
<!---------------------------------------------------------------------------------------------------->

<?php

$id_quiz = '1';


echo '<form action="traitement/quiztrait.php?id='.$id_quiz.'" method="post">';
  
  
  
$q=1;
echo "Nom quiz : test ";
while($q<=10){
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
      echo '<div>
          <p>Question '.$q.' : '.$question.' : </p>';
      foreach ($rep as $r) {
        echo '<input type="radio" value="'.$r.'"  name="'.$q.'"  >'.$r.'<br>';
        
      }
      echo '</div>
      <br><hr>';

    }
  }

$q++;
}
  
  
  ?>
  
    <input type="submit" name="submit">
</form>







<!---------------------------------------------------------------------------------------------------->
 	<?php
	  include("traitement/footer.php");
	?> 

</body>
</html>