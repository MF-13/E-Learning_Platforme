<?php
include("function.php");


if (isset($_POST['nom']) AND isset($_POST['description'])  AND isset($_POST['filiere']))
	  {

	$nom = $_POST['nom'];
	$description = $_POST['description'];
	$filiere = $_POST['filiere'];
	

	$query = "INSERT into cours(nom,description,id_filiere) 
				VALUES(?,?,?);";

	$value = array($nom,$description,$filiere);
	$result = PDO($query,$value);

	if ($result) {
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
	else{
		echo "error hors de l insertion a la base de donnes";
	}



}
else
{
echo "error dans les information ! ";
	
	
}






?>