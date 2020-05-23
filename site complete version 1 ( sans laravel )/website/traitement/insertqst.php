<?php

/*insertion du quiz a la base de donnes*/

session_start();

include("function.php");



/*Calculer l'id quiz suivant*/

$query1 = "SELECT id_quiz from quiz order by id_quiz desc limit 1;";

$value1 = array();

$stm1 = PDO($query1,$value1);

if ($stm1->rowCount()!=0) {

	while ($row1 = $stm1->fetch()) {

		$id_quiz = $row1['id_quiz']+1;

	}

}

/***************************/

/*la filier du proff*/

$query2 = "SELECT filiere_user from user where id_user =? ";

$value2 = array($_SESSION['id_user']);

$stm2 = PDO($query2,$value2);

if ($stm2->rowCount()!=0) {

	while ($row2 = $stm2->fetch()) {

		$id_filiere = test_input($row2['filiere_user']);

	}

}

/***************************/

/*dernier delai */

if (isset($_POST['delai'])) {

	$dernier_delai= new DateTime($_POST['delai']);

    $dernier_delai->format('Y-m-d h:i:s');

}else{

	$dernier_delai = null;

}

/*****************************/
if(!isset($_POST['qst'])){

	
}




for ($i=1; $i <=$_POST['qst'] ; $i++) { 

	

if (isset ($_POST['titre']) && isset($_POST['question'.$i]) && isset($_POST['repcorrques'.$i]) && isset($_POST['rep2ques'.$i]) && isset($_POST['rep3ques'.$i])) {

	

	if ( empty($_POST['titre']) || empty($_POST['question'.$i]) || empty($_POST['repcorrques'.$i]) || empty($_POST['rep2ques'.$i]) || empty($_POST['rep3ques'.$i])) {



			echo "remplisser tous les champs !";



        }else{

        	

			/*insertion des question*/

        	$query4 = "INSERT INTO question_quiz values(?,?,?,?,?,?) ";

        	$values4 = array($id_quiz,$i,test_input($_POST['question'.$i]),test_input($_POST['repcorrques'.$i]),
        				test_input($_POST['rep2ques'.$i]),test_input($_POST['rep3ques'.$i]));

			PDO($query4,$values4);

			/**********************/

        }





		}else {

			echo '<script language="Javascript"> document.location.replace("../addquiz.php?etat=false"); </script>';

		}







}			

			/***************************/

			/*dernier delai */

			if (isset($_POST['delai'])) {

				$dernier_delai = $_POST['delai'];

				$query3 = "INSERT into quiz(id_quiz,nom_quiz,id_prof,id_filiere,dernier_delai) values(?,?,?,?,?)";

				$values3 = array($id_quiz,test_input($_POST['titre'],)$_SESSION['id_user'],$id_filiere,$dernier_delai);

			}else{

				$query3 = "INSERT into quiz(id_quiz,nom_quiz,id_prof,id_filiere) values(?,?,?,?)";

				$values3 = array($id_quiz,test_input($_POST['titre']),$_SESSION['id_user'],$id_filiere);



			}

			/*****************************/

			/*insertion de quiz*/

			$result=PDO($query3,$values3);

			/***********************/

			if ($result) {

				echo '<script language="Javascript"> document.location.replace("../addquiz.php?etat=true"); </script>';

		}else{

		

			echo '<script language="Javascript"> document.location.replace("../addquiz.php?etat=false"); </script>';

		

			}

		





?>