<?php
include("../connecteDB.php");

if (isset($_POST['filiere_id']) AND isset($_POST['filiere']) AND isset($_POST['description']))
	  {

	$filiere_id = $_POST['filiere_id'];
	$filiere = $_POST['filiere'];
	$description = $_POST['description'];
	

	$query = "INSERT into filiere 
				VALUES('".$filiere_id."','".$filiere."','".$description."');";
	$result = mysqli_query($conn,$query);

	if ($result) {
		echo '		
          	<div class="alert alert-success" src="../">
  				<strong>Success!</strong> filiere ajouter!
			</div>
          	<script>
         setTimeout(function(){
            window.location.href = \'../addfiliere.php\';
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