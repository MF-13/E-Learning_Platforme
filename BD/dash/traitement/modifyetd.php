<?php

/*Ajouter la connexion a lbase de donnes*/
include("../connecteDB.php");

$_POST['code_massar']=$_GET['code_massar'];


  if (isset($_POST['code_massar']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND
    isset($_POST['mdps']) AND isset($_POST['date_naiss']) AND isset($_POST['filiere']) AND 
    isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email'])) {

              if (!(empty($_POST['code_massar'])) AND !(empty($_POST['nom'])) AND !(empty($_POST['prenom'])) 
              	AND !(empty($_POST['mdps'])) AND !(empty($_POST['date_naiss'])) AND !(empty($_POST['filiere'])) AND 
               !(empty($_POST['telephone'])) AND !(empty($_POST['adresse'])) AND !(empty($_POST['email']))) {
              		
              	$query = 'UPDATE etudiant
              				set nom="'.$_POST['nom'].'",
              				prenom="'.$_POST['prenom'].'",
              				date_naiss="'.$_POST['date_naiss'].'",
              				filiere="'.$_POST['filiere'].'",
              				num_tele='.$_POST['telephone'].',
              				adresse="'.$_POST['adresse'].'",
              				email="'.$_POST['email'].'",
              				mdps="'.$_POST['mdps'].'" 
              				WHERE code_massar="'.$_POST['code_massar'].'" ;';
              				
              				
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