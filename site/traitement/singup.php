<?php
include("connectedb.php");

if (isset($_POST['nom']) AND isset($_POST['prenom'])
     AND isset($_POST['date_naiss']) AND isset($_POST['telephone']) AND isset($_POST['pass'])
      AND isset($_POST['adresse']) AND isset($_POST['email']) AND isset($_POST['filiere']) AND isset($_POST['type'])) {

		$query = 'INSERT INTO demande(nom,prenom,date_naiss,filiere,num_tele,email,mdps,type_user,etat,adresse) values("'.$_POST['nom'].'","'.$_POST['prenom'].'","'.$_POST['date_naiss'].'","'.$_POST['filiere'].'",
			'.$_POST['telephone'].',"'.$_POST['email'].'","'.$_POST['pass'].'","'.$_POST['type'].'",
				"-1","'.$_POST['adresse'].'")';

				$res = query($query);
				if ($res) {
					echo "AEnregistrer avec succes ! atteder la confirmation du moderateur";
				}else{
					echo "Error hors de l ajoute !";
				}



    	}
    	else{
    		echo "Non Trouve !";
    	}

?>