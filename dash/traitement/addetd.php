<?php
include("../connecteDB.php");

if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mdps']) AND isset($_POST['date_naiss'])
	 AND isset($_POST['filiere']) AND isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email']))
	  {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date_naiss = $_POST['date_naiss'];
	$filiere = $_POST['filiere'];
	$telephone = $_POST['telephone'];
	$adresse = $_POST['adresse'];
	$email = $_POST['email'];
	$mdps = $_POST['mdps'];
	

	$query = "INSERT into etudiant(nom,prenom,date_naiss,filiere,num_tele,adresse,email,mdps,type) 
				VALUES('".$nom."','".$prenom."','".$date_naiss."','".$filiere."',
					".$telephone.",'".$adresse."','".$email."','".$mdps."',
					'etudiant');";
	$result = mysqli_query($conn,$query);

	if ($result) {
		
	}
	else{
		echo "error hors de l insertion a la base de donnes";
	}

echo '		
          	<div class="alert alert-success" src="../">
  				<strong>Success!</strong> Etudiant ajouter!
			</div>
          	<script>
         setTimeout(function(){
            window.location.href = \'../addetudiant.php\';
         }, 2000);
      </script>';

}
else
{
echo "error dans les information ! ";
	
	
}






?>