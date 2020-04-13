<?php

/*Ajouter la connexion a lbase de donnes*/
include("../connecteDB.php");

$_POST['id']=$_GET['id'];


  if (isset($_POST['id']) AND isset($_POST['nom']) AND isset($_POST['description']) AND
    isset($_POST['filiere'])) {

              if (!(empty($_POST['id'])) AND !(empty($_POST['nom'])) AND !(empty($_POST['description'])) 
              	AND !(empty($_POST['filiere']))) {
              		
              	$query = 'UPDATE cours
              				set nom="'.$_POST['nom'].'",
              				description="'.$_POST['description'].'",
              				id_filiere="'.$_POST['filiere'].'"
              				WHERE id_cour="'.$_POST['id'].'" ;';
              				
              				
					$result = mysqli_query($conn,$query);
					if($result) {
		echo '		
          	<script>
          	alert("Modifier avec succes ! ");
         setTimeout(function(){
            window.location.href = \'../etudiant.php\';
         }, 1000);
      </script>';
	}
	else{
		echo "error hors de l insertion a la base de donnes";
	}

              }
          else{
          	echo "Un champ est vide";
          }

            }
        else{
        	header("location: ../etudiant.php");
        }
?>