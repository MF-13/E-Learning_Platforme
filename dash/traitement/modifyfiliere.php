<?php

/*Ajouter la connexion a lbase de donnes*/
include("../connecteDB.php");

$_POST['id']=$_GET['id'];


  if (isset($_POST['filiere']) AND isset($_POST['description'])) 
              {

            if (!(empty($_POST['filiere'])) AND !(empty($_POST['description'])))
               {
              		
              	$query = 'UPDATE filiere
              				set filiere="'.$_POST['filiere'].'",
                      filiere_description="'.$_POST['description'].'"
                      WHERE filiere_id="'.$_POST['id'].'" ;';
              				
              				
              				
					$result = mysqli_query($conn,$query);
					if($result) {
		echo '		
          	<script>
          	alert("Modifier avec succes ! ");
         setTimeout(function(){
            window.location.href = \'../filiere.php\';
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
        	/*header("location: ../filiere.php");*/
        }
?>