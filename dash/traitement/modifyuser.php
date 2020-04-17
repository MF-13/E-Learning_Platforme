<?php

/*Ajouter la connexion a lbase de donnes*/
include("function.php");

$_POST['id_user']=$_GET['id'];


  if (isset($_POST['id_user']) AND isset($_POST['nom']) AND isset($_POST['prenom']) AND
    isset($_POST['mdps']) AND isset($_POST['date_naiss']) AND isset($_POST['filiere']) AND 
    isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email'])) {

              if (!(empty($_POST['id_user'])) AND !(empty($_POST['nom'])) AND !(empty($_POST['prenom'])) 
              	AND !(empty($_POST['mdps'])) AND !(empty($_POST['date_naiss'])) AND !(empty($_POST['filiere'])) AND 
               !(empty($_POST['telephone'])) AND !(empty($_POST['adresse'])) AND !(empty($_POST['email']))) {
              		
              	$query = 'UPDATE user
              				set nom_user=?,
              				prenom_user=?,
              				date_naiss_user=?,
                      num_tele_user='..',
              				filiere_user=?,
              				email_user=?,
                      mdps_user=?,
              				adresse_user=?
              				WHERE id_user=? ;';
                      
              	$value = array($_POST['nom'],$_POST['prenom'],$_POST['date_naiss'],$_POST['telephone'],$_POST['filiere'],$_POST['email'],$_POST['mdps'],$_POST['adresse'],$_POST['id_user']);			
              				
					     $result = PDO($query,$value);

					if($result) {

		       echo '<script language="Javascript"> document.location.replace("filiere.php?etat=true"); </script>';
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