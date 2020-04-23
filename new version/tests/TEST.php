<!DOCTYPE html>
<html>
<head>
	<title>Quiz</title>
</head>
<body>
<?php
include("fun.php");

$id_quiz = '1';


echo '<form action="affiche.php?id='.$id_quiz.'" method="post">';
	
	/*affichage du quiz*/
/
$q=1;

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
			echo '</div><br><hr>';

		}
	}

$q++;
}
	





	

	
	
	
	
	?>
<form action="affiche.php" method="post">
		<input type="datetime-local" name="delai">
		<input type="submit" name="submit">
</form>

</body>
</html>