<?php
/*Ajouter la connexion a lbase de donnes*/
include("function.php");

if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mdps']) AND isset($_POST['date_naiss'])
	 AND isset($_POST['filiere']) AND isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email']))
	  {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date_naiss = $_POST['date_naiss'];
	$filiere = $_POST['filiere'];
	$telephone = $_POST['telephone'];
	$adresse = $_POST['adresse'];
	$email = $_POST['email'];
	$mdps = $_POST['mdps'];
	
	$url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	//print_r($tab);
    if($tab[count($tab)-1]=="etudtrait.php"){
		$type='etudiant';
    }else{
    		$type='professeur';
    }
	
	

	$query = "INSERT into user(nom_user,prenom_user,date_naiss_user,num_tele_user,filiere_user,email_user,mdps_user,adresse_user,type_user) 
				VALUES(?,?,?,?,?,?,?,?,?);";

	$value = array($nom,$prenom,$date_naiss,$telephone,$filiere,$email,$mdps,$adresse,$type);
	$result = PDO($query,$value);

if ($result) {
		if($tab[count($tab)-1]=="etudtrait.php"){
			header("location: ../etudtrait.php?etat=true");
		}else{
		  header("location: ../proftrait.php?etat=true");
	}
}else{

    if($tab[count($tab)-1]=="etudtrait.php"){
      header("location: ../etudtrait.php?etat=false");
    }else{
      header("location: ../proftrait.php?etat=false");
     }

	}



}
else
{

  if($tab[count($tab)-1]=="etudtrait.php"){
      header("location: ../etudtrait.php?etat=false");
    }else{
      header("location: ../proftrait.php?etat=false");
     }
}
?>