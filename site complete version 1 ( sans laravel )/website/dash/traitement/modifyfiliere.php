<?php

/*Ajouter la connexion a lbase de donnes*/
include("function.php");

$_POST['id']=$_GET['id'];


  if (isset($_POST['filiere']) AND isset($_POST['description']) AND isset($_POST['departement'])) 
              {

            if (!(empty($_POST['filiere'])) AND !(empty($_POST['description'])) AND !(empty($_POST['departement'])))
               {
              		
              	$query = 'UPDATE filiere set filiere = ? , filiere_description = ? ,  departement = ?   WHERE filiere_id=? ;';
              	$value = array($_POST['filiere'],$_POST['description'],$_POST['departement'],$_POST['id']);		
              				
              				
					      $result = PDO($query,$value);
                
					if($result) {
                  echo '<script language="Javascript"> document.location.replace("../filiere.php?etat=true"); </script>';
		// echo '		
      //     	<script>
      //     	alert("Modifier avec succes ! ");
      //    setTimeout(function(){
      //       window.location.href = \'../filiere.php\';
      //    }, 1000);
      // </script>';
	}
	else{
      echo '<script language="Javascript"> document.location.replace("../filiere.php?etat=false"); </script>';
		//echo "error hors de l insertion a la base de donnes";
	}

              }
          else{
          	echo "Un champ est vide";
          }

            }
        else{
        	/*header("location: ../filiere.php");*/
        }
?>