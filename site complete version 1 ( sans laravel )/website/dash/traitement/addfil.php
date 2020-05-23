<?php
 /*Ajouter le Dashboard*/
include("../dashboard.php");
/*Ajouter la connexion a lbase de donnes*/
include("function.php");
if (isset($_POST['filiere_id']) AND isset($_POST['filiere']) AND isset($_POST['description']) AND isset($_POST['departement']))
	  {

	$filiere_id = $_POST['filiere_id'];
	$filiere = $_POST['filiere'];
	$description = $_POST['description'];
	$departement = $_POST['departement'];
	

	$query = "INSERT into filiere VALUES(?,?,?,?);";
	$value = array($filiere_id,$filiere,$description,$departement);


	$result = PDO($query,$value);

	if ($result) {
		//header("location: ../filieretrait.php?etat=true");
		echo '<script language="Javascript"> document.location.replace("../filieretrait.php?etat=true"); </script>';
	}
	else{
		///header("location: ../filieretrait.php?etat=false");
		echo '<script language="Javascript"> document.location.replace("../filieretrait.php?etat=false"); </script>';
	}

}else{
// header("location: ../filieretrait.php?etat=false");
echo '<script language="Javascript"> document.location.replace("../filieretrait.php?etat=false"); </script>';
}
?>