<?php
include("function.php");

if (isset($_POST['nom']) AND isset($_POST['prenom'])
     AND isset($_POST['date_naiss']) AND isset($_POST['telephone']) AND isset($_POST['pass'])
      AND isset($_POST['adresse']) AND isset($_POST['email']) AND isset($_POST['filiere']) AND isset($_POST['type'])) {

		$query1 = 'INSERT INTO demande(nom,prenom,date_naiss,filiere,num_tele,email,mdps,type_user,etat,adresse) values(?,?,?,?,?,?,?,?,?,?)';
				$etat="-1";
				$values1 = array($_POST['nom'],$_POST['prenom'],$_POST['date_naiss'],$_POST['filiere'],
					$_POST['telephone'],$_POST['email'],$_POST['pass'],$_POST['type'],$etat,$_POST['adresse']);
				
        		$stm = PDO($query1,$values1);

				
				if ($stm) {
					echo "<script>alert(\"Enregistrer avec succes ! atteder la confirmation du moderateur\");</script>";
					
				}else{
					echo "<script>alert(\"Error hors de l ajoute !\");</script>";
				}



    	}
    	else{
    		echo "Non Trouve !";
    	}

?>