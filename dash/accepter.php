<?php

include('traitement/function.php');

$id = $_GET['id'];

/*update de l'etat et la remettre en 1*/
$etat = "1" ;
$query1="UPDATE demande set etat=? where id=?;";
$value1 = array($etat,$id);
$result1= PDO($query1,$value1);



$query2 = "SELECT * FROM demande where id=? AND etat=?;";
$values2= array($id,$etat);

$result2 = PDO($query2,$values2);

if ($result2->rowCount()!=0) {
	while($row = $result2->fetch())
            {
            	
              		$query3 = 'INSERT INTO user(nom_user,prenom_user,date_naiss_user,num_tele_user,filiere_user,email_user,mdps_user,adresse_user,type_user) 
                  values(?,?,?,?,?,?,?,?,?);';
              	   
                  $values3 = array($row['nom'],$row['prenom'],$row['date_naiss'],$row['num_tele'],$row['filiere'],$row['email'],$row['mdps'],$row['adresse'],$row['type_user']);
              	

              	$result3 = PDO($query3,$values3);
              	if ($result3) {
              			header("location: index.php");
              	}else{
              		echo $row['type_user']." erreur dans le traitement! ";
              	}
            }
}

?>