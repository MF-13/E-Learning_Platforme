<?php

/*Ajouter la connexion a lbase de donnes*/
include("function.php");

$_POST['id']=$_GET['id'];


  if (isset($_POST['id']) AND isset($_POST['nom']) AND isset($_POST['description']) AND
    isset($_POST['filiere'])) {

              if (!(empty($_POST['id'])) AND !(empty($_POST['nom'])) AND !(empty($_POST['description'])) 
              	AND !(empty($_POST['filiere']))) {
              		
              	$query = 'UPDATE cours set nom= ? , description = ? , id_filiere = ? 	WHERE id_cour=? ;';
                $value = array($_POST['nom'],$_POST['description'],$_POST['filiere'],$_POST['id']);
              				
              				
					      $result = PDO($query,$value);
                
					if($result) {
            echo '<script language="Javascript"> document.location.replace("../cours.php?etat=true"); </script>';
	 }
	else{
    echo '<script language="Javascript"> document.location.replace("../cours.php?etat=false"); </script>';
		//echo "error hors de l insertion a la base de donnes";
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