<?php
include("../connecteDB.php");

if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mdps']) AND isset($_POST['date_naiss'])
	 AND isset($_POST['filiere']) AND isset($_POST['telephone']) AND isset($_POST['email']))
	  {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date_naiss = $_POST['date_naiss'];
	$filiere = $_POST['filiere'];
	$telephone = $_POST['telephone'];
	$email = $_POST['email'];
	$mdps = $_POST['mdps'];
	

	$query = "INSERT into professeur(nom,prenom,date_naiss,filiere,num_tele,email,mdps,type) 
				VALUES('".$nom."','".$prenom."','".$date_naiss."','".$filiere."',
					".$telephone.",'".$email."','".$mdps."',
					'professeur');";
	$result = mysqli_query($conn,$query);

	if ($result) {
		echo '		
          	<div class="alert alert-success" src="../">
  				<strong>Success!</strong> Professeur ajouter!
			</div>
          	<script>
         setTimeout(function(){
            window.location.href = \'../addprofesseur.php\';
         }, 2000);
      </script>';
	}
	else{
		echo "error hors de l insertion a la base de donnes";
	}



}
else
{
echo "error dans les information ! ";
	
	
}






?>