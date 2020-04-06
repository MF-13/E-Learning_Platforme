<?php 
try{
	$db = new PDO('mysql:host=localhost:3308;dbname=elearning;charset=utf8','root','');
	$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
}catch(PDOException $e){
die('Error! '.$e->getMessage());
}

$stm = $db->prepare('SELECT prenom FROM etudiant where nom= ?');
$num = "OMARI";
//$stm->bindValue(':code',$num);
$stm->bindValue(1,$num);

//$stm->bindParam(1,$num);
//$stm->bindParam(':code',$num);


$stm->execute();
while ($row = $stm->fetch()) {
	echo $row['prenom']."<br>";
}




function PDO($query,$array){
	$db = connecte();
	$stm = $db->prepare($query);

	$i=1;
	reset($array);
	while($frt = current($array)){
			
			if( !(key($array)=="number") ){
				/*si la valeur est un string on doit utiliser les ""*/
				echo "string stm->bindValue(".$i.",".$frt.")<br>";
				$stm->bindValue($i,"\"".$frt."\"");
			}else{

				/*s il est un number on va utiliser les ""*/
				echo "int stm->bindValue(".$i.",".$frt.")<br>";
				$stm->bindValue($i,$frt);
			}

			next($array);
			$i++;
		}

	$stm->execute();

	return $stm;	
}


/*PDO::PARAM_INT*/
/*pour verifier que c est un entier*/
/*PDO::PARAM_STR*/
/*pour verifier que c est une STRING*/

/*deconnexion*/
$db = null;
?>