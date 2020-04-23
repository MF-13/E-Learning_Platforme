<?php
 /*Ajouter le Dashboard*/
// include("../dashboard.php");
/*Ajouter la connexion a lbase de donnes*/
include("function.php");

if (isset($_POST['nom']) AND isset($_POST['description'])  AND isset($_POST['filiere'])){
	$nom = $_POST['nom'];
	$description = $_POST['description'];
	$filiere = $_POST['filiere'];
	$query = "INSERT into cours(nom,description,id_filiere) 
				VALUES(?,?,?);";
	$value = array($nom,$description,$filiere);
	$result = PDO($query,$value);

	if ($result){
		// header("location: ../courtrait.php?etat=true");
		echo '<script language="Javascript"> document.location.replace("../courtrait.php?etat=true"); </script>';
	}
	else{
		// header("location: ../courtrait.php?etat=false");
		echo '<script language="Javascript"> document.location.replace("../courtrait.php?etat=false"); </script>';
	}
}
else{
	echo '<script language="Javascript"> document.location.replace("../courtrait.php?etat=false"); </script>';	
}
?>