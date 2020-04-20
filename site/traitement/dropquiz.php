<?php

include("function.php");

if (isset($_GET['id'])){
	echo $_GET['id'];
	$query1 = "DELETE FROM quiz where id_quiz= ?";
	$query2 = "DELETE FROM question_quiz where id_quiz = ?";
	$query3 = "DELETE FROM resultat_quiz where id_quiz = ?";
	$values = array($_GET['id']);

	PDO($query1,$values);
	PDO($query2,$values);
	PDO($query3,$values);
	header("location: ../cours-espace.php");



}else{

	header("location: ../profile.php");
}

?>