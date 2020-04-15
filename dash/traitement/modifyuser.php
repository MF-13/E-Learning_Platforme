<?php

/*Ajouter la connexion a lbase de donnes*/
include("../connecteDB.php");

$_POST['id_user']=$_GET['id'];


  if (isset($_POST['id_user']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND
    isset($_POST['mdps']) AND isset($_POST['date_naiss']) AND isset($_POST['filiere']) AND 
    isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email'])) {

              if (!(empty($_POST['id_user'])) AND !(empty($_POST['nom'])) AND !(empty($_POST['prenom'])) 
              	AND !(empty($_POST['mdps'])) AND !(empty($_POST['date_naiss'])) AND !(empty($_POST['filiere'])) AND 
               !(empty($_POST['telephone'])) AND !(empty($_POST['adresse'])) AND !(empty($_POST['email']))) {
              		
              	$query = 'UPDATE user
              				set nom_user="'.$_POST['nom'].'",
              				prenom_user="'.$_POST['prenom'].'",
              				date_naiss_user="'.$_POST['date_naiss'].'",
                      num_tele_user='.$_POST['telephone'].',
              				filiere_user="'.$_POST['filiere'].'",
              				email_user="'.$_POST['email'].'",
                      mdps_user="'.$_POST['mdps'].'",
              				adresse_user="'.$_POST['adresse'].'"
              				WHERE id_user="'.$_POST['id_user'].'" ;';
              				
              				
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