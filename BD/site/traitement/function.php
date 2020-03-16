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
		    }
	}


	function connectedb(){
		$conn = mysqli_connect('localhost:3308','root','','elearning') or die();
		  if (!$conn) {
		     $message = "error de la connexion a la base de donnes ! ";
		  }

		  return $conn;
	}

	/*this function need some work*/
	function deconnexion(){
		session_start();
		session_unset();
		session_destroy();
		header("location: ../index.php");
		return "Deconnexion avec succes !";
	}


	function query($query){
		//cette fonction sert a faire des query depuis la base de donnees 
		//il retourne result qui contient le resultat de la requete
		$conn = connectedb();
		$result = mysqli_query($conn,$query);
		return $result;
	}
?>