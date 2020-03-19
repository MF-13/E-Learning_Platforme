<?php

/*
$query = "SELECT nom from etudiant where code_massar=? 	AND prenom = ?";
		$values = array("number"=>"9","string"=>"AYMAN");
		PDO($query,$values);*/

function connecte(){
	try{
		$db = new PDO('mysql:host=localhost:3308;dbname=elearning;charset=utf8','root','');
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	}catch(PDOException $e){		
	}
	return $db;
}


function PDO($query,$array){
	$db = connecte();
	$stm = $db->prepare($query);

	$i=1;
	reset($array);
	while($frt = current($array)){
	
			/*echo "string stm->bindValue(".$i.",".$frt.")<br>";*/
			
			$stm->bindValue($i,$frt);
			next($array);
			$i++;
		}

	$stm->execute();
	//Fermer la connexion 
	$db=null;

	//Retourner le resultat 
	return $stm;	
}

?>