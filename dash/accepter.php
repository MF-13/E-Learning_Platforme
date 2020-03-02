<?php

include('connecteDB.php');

$id = $_GET['code_massar'];

$query1="UPDATE demande set etat='1' where code_massar=".$id.";";
$result1= mysqli_query($conn,$query1);



$query2 = "SELECT * FROM demande where code_massar=".$id." AND etat=\"1\";";


$result2 = mysqli_query($conn,$query2);
$res = mysqli_num_rows($result2);

if ($res) {
	while($row = mysqli_fetch_array($result2))
            {
            	
              
              	if ($row['type_user']==="etudiant") {
              		$query3 = 'INSERT INTO etudiant(nom,prenom,date_naiss,filiere,num_tele,adresse,email,mdps,type) values("'.$row['nom'].'","'.$row['prenom'].'","'.$row['date_naiss'].'","'.$row['filiere'].'"
              		,'.$row['num_tele'].',"'.$row['adresse'].'","'.$row['email'].'","'.$row['mdps'].'","etudiant");';
              	}

              	if ($row['type_user']==="professeur") {
              		
              	$query3 = 'INSERT INTO professeur(nom,prenom,date_naiss,filiere,num_tele,email,mdps,type)
              			 values("'.$row['nom'].'","'.$row['prenom'].'","'.$row['date_naiss'].'","'.$row['filiere'].'"
              		,'.$row['num_tele'].',"'.$row['email'].'","'.$row['mdps'].'","professeur");';
              	}

              	$result3 = mysqli_query($conn,$query3);
              	if ($result3) {
              			header("location: index.php");
              	}else{
              		echo $row['type_user']." erreur dans le traitement! ";
              	}
            }
}

?>