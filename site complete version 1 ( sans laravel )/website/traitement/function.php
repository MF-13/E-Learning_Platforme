<?php

	function is_admin($type){
		if($type==="admin"){

		         return 1;

		}

		return 0;
	}

	function is_professeur($type){
		if($type==="professeur"){

		         return 1;

		}

		return 0;
	}

	function is_etudiant($type){
		if($type==="etudiant"){

		         return 1;

		}

		return 0;
	}

	

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

			/*On donne en parametre le code massar : $_SESSION['id_user']*/

		  /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/

		    if (!(isset($code)))

		    {

		    	header("Location: index.php");  

		    }else{

		    	return 1;

		    }

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





				/*Traitement avec PDO*/

	function connecte(){

					try{

						$db = new PDO('mysql:host=localhost:3306;dbname=elearning;charset=utf8','root','');

						$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

						$db->query("SET NAMES utf8mb4");

					}catch(PDOException $e){		

					}

					return $db;

				}

	/*function connecte(){

					try{

						$db = new PDO('mysql:host=localhost;dbname=id13377668_elearning;charset=utf8','id13377668_root','Youyou-0619209779');

						$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

						$db->query("SET NAMES utf8mb4");

					}catch(PDOException $e){		

					}

					return $db;

				}*/




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





	function dislay_message($values){

			//array of values



		$query = "select * from message where  recepteur_id = ? and recepteur_type = ? order by id_msg desc";

		$stm=PDO($query,$values);

		

		if($stm->rowCount()!=0){

			

            return $stm;

        }else{

        	

        	return null;

        }

		



	}

 





	function searchimage($path,$code){



		$dir = opendir($path);

        $val = 0;

        while ($file = readdir($dir)){

            if ($file != "." && $file != ".."){

                $tab = explode(".", $file);

                    if ($tab[0]==$code) {



                            return 1;

                     }



                          

			}

		}

		return 0;

	}



	function test_input($data) {

  

		  $data = trim($data); // Supprime les espaces (ou d'autres caractères) en début et fin de chaîne

		  $data = stripslashes($data); // Supprime les antislashs d'une chaîne

		  $data = htmlspecialchars($data,ENT_QUOTES,'UTF-8'); //Convertit les caractères spéciaux en entités HTML

		  return $data;



    }

	



	function test_email($email) {



		if (filter_var($email, FILTER_VALIDATE_EMAIL)) { //verifie les emails
			//si il est correcte
		    return 1;

		} else {

		    return 0;

		}



	}



	function check_existe_email($email){



		$query = "SELECT email_user from user where email_user=?";

		$value = array($email);

		$res = PDO($query,$value);

		if ($res->rowCount()!=0) {

			/*s'il exist*/

			return 0;

		}else{

			$query1 = "SELECT email from demande where email=?";

		    $value1 = array($email);

		    $res1 = PDO($query1,$value1);

		    if ($res1->rowCount()!=0) {

			/*s'il exist*/

			return 0;

			}

		}

		/*s'il n'existe pas*/

		return 1;



	}



	function check_existe_phone($num){



		$query = "SELECT num_tele_user from user where num_tele_user=?";

		$value = array($num);

		$res = PDO($query,$value);

		if ($res->rowCount()!=0) {

			/*s'il exist*/

			return 0;

		}else{

			$query1 = "SELECT num_tele from demande where num_tele=?";

		    $value1 = array($num);

		    $res1 = PDO($query1,$value1);

		    if ($res1->rowCount()!=0) {

			/*s'il exist*/

			return 0;

			}

		}

		/*s'il n'existe pas*/

		return 1;



	}



	function check_existe_filiere_id($filiere_id){



		$query = "SELECT filiere_id from user where filiere_id=?";

		$value = array($filiere_id);

		$res = PDO($query,$value);

		if ($res->rowCount()!=0) {

			/*s'il exist*/

			return 0;

		}

		/*s'il n'existe pas*/

		return 1;



	}



	function check_existe_filiere_nom($filiere){



		$query = "SELECT filiere from user where filiere=?";

		$value = array($filiere);

		$res = PDO($query,$value);

		if ($res->rowCount()!=0) {

			/*s'il exist*/

			return 0;

		}

		/*s'il n'existe pas*/

		return 1;



	}





?>