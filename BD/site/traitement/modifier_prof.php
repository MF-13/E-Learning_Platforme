<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");
    $conn = connectedb();

$_POST['code_massar']=$_GET['id'];


  if (isset($_POST['nom']) AND isset($_POST['prenom'])
     AND isset($_POST['date_naiss']) AND 
    isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email'])) {

              if (!(empty($_POST['nom'])) AND !(empty($_POST['prenom'])) 
                  AND !(empty($_POST['date_naiss'])) AND 
                  !(empty($_POST['telephone'])) AND !(empty($_POST['adresse'])) AND !(empty($_POST['email']))) {
              if(isset($_POST['pass1']) AND isset($_POST['pass2'])){


              		if((!(empty($_POST['pass1'])) AND !(empty($_POST['pass2']))) AND ($_POST['pass1']==$_POST['pass2'])){
              	$query = 'UPDATE professeur
              				set nom="'.$_POST['nom'].'",
              				prenom="'.$_POST['prenom'].'",
              				date_naiss="'.$_POST['date_naiss'].'",
              				num_tele='.$_POST['telephone'].',
              				adresse="'.$_POST['adresse'].'",
              				email="'.$_POST['email'].'",
              				mdps="'.$_POST['pass1'].'" 
              				WHERE code_massar_prof="'.$_POST['code_massar'].'" ;';
              				}else{
                        $query = 'UPDATE professeur
                      set nom="'.$_POST['nom'].'",
                      prenom="'.$_POST['prenom'].'",
                      date_naiss="'.$_POST['date_naiss'].'",
                      num_tele='.$_POST['telephone'].',
                      adresse="'.$_POST['adresse'].'",
                      email="'.$_POST['email'].'" 
                      WHERE code_massar_prof="'.$_POST['code_massar'].'" ;';
                      }
              				
					$result = query($query);
					if($result) {
		echo '		
          	<script>
          	alert("Modifier avec succes ! ");
         setTimeout(function(){
            window.location.href = \'../profile.php\';
         }, 1000);
      </script>';}
      else{
        echo "les deux pass ne sont pas les memes ! ";
      }
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
        	header("location: ../profile.php");
        }
?>