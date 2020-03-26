<?php

	function TypeUser($type){
		/*On donne en parametre le type : $_SESSION['type']*/
		/*si le USER est un admin en retourn 1 , professeur 0, etudiant -1*/
			$type = strtolower($type);
			if($type==="admin"){
		          return 1;
		        }
		    elseif($type==="professeur"){
		          return 0;
		        }
		    elseif($type==="etudiant"){
		          return -1;
		        }
		    else{
		    	return null;
		    }
	}


	function capterConnexion($code){
			/*On donne en parametre le code massar : $_SESSION['code_massar']*/
		  /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/
		    if (!(isset($code)))
		    {
		    	header("Location: index.php");  
		    }else{
		    	return 1;
		    }
	}


	function connectedb(){
		$conn = mysqli_connect('localhost:3308','root','','elearning') or die();
		  if (!$conn) {
		     $message = "error de la connexion a la base de donnes ! ";
		  }

		  return $conn;
	}

		/*Cette funtion permet d'afficher la dernier page visite*/
	function lastpage($array){
 			$url = (string)$_SERVER['HTTP_REFERER'];
			$tab = explode("/", $url);
			/*ce tableau affiche tous les composant de URL*/
			//print_r($tab);
			$last=$tab[count($tab)-1];
			
			reset($array);
			while($frt = current($array)){
				if($last==$frt){
						echo "<script> alert(\"you can t see this page if you are not login in\");</script>";
				}
				next($array);
			}
			/*exemeple de fonctionnement dans la page : */
 			/*
				 $visite =  array("filiere.php","contact-us.php");
				 lastpage($visite);
 			*/
	}


	function query($query){
		//cette fonction sert a faire des query depuis la base de donnees 
		//il retourne result qui contient le resultat de la requete
		$conn = connectedb();
		mysqli_query($conn,"SET NAMES UTF8"); 
		$result = mysqli_query($conn,$query);
		return $result;
	}

				/*Traitement avec PDO*/
	function connecte(){
					try{
						$db = new PDO('mysql:host=localhost:3308;dbname=elearning;charset=utf8','root','');
						$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
						$db->query("SET NAMES utf8mb4");
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