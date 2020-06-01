<?php

session_start();



include("function.php");

$score=0;

$q = 1;
if (!isset($_POST['id'])) {
	echo '<script language="Javascript"> document.location.replace("../cours-espace.php"); </script>';
}
else{
$id_quiz =  $_POST['id'];

}



$rep_correcte = " ";

$rep_incorrecte = " ";





$query3 = "select count(id_quiz) as nbr from question_quiz where id_quiz = ?";

$values3 = array($id_quiz);

$stm = PDO($query3,$values3);



if ($stm->rowCount()!=0) {

  while ($row = $stm->fetch()) {

    $nbr_qst = $row['nbr'];

  }

}







while ($q<= $nbr_qst) {





	if (isset($_POST[$q])) {

	$query = "SELECT * from question_quiz where id_quiz = ? and n_question = ?" ;



	$value = array($id_quiz,$q);

	$res = PDO($query,$value);	



	

	if ($res->rowCount()!=0) {

		while($row = $res->fetch()){

			$reponse = test_input($row['rep_correcte']);

		}



		if ($reponse==$_POST[$q]) {

			/*reponse correcte*/

			$rep_correcte.=$q;

			$rep_correcte.= " ";

			$score++;

		}else{

			/*reponse incorrecte*/

			$rep_incorrecte.=$q;

			$rep_incorrecte.=" ";

			$score = $score;

		}

	}







	}else{

		/*si la reponse n'est pas selectioner le score reste le meme */

		$score=$score;

	}



$q++;	

}



//insertion a la base

$query2 = "INSERT into resultat_quiz values(?,?,?,?,?)";

$values2 = array($id_quiz,$_SESSION['id_user'],$score,$rep_correcte,$rep_incorrecte);

$result = PDO($query2,$values2);



if ($result) {

				echo '<script language="Javascript"> document.location.replace("../cours-espace.php?etat=true"); </script>';

		}else{

		

			echo '<script language="Javascript"> document.location.replace("../cours-espace.php?etat=false"); </script>';

		

			}

?>