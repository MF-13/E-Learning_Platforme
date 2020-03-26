<?php

/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");

$_POST['code_massar']=$_GET['id'];


  if (isset($_POST['nom']) AND isset($_POST['prenom'])
     AND isset($_POST['date_naiss']) AND 
    isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email'])) {

              if (!(empty($_POST['nom'])) AND !(empty($_POST['prenom'])) 
                  AND !(empty($_POST['date_naiss'])) AND 
                  !(empty($_POST['telephone'])) AND !(empty($_POST['adresse'])) AND !(empty($_POST['email']))) {
              if(isset($_POST['pass1']) AND isset($_POST['pass2'])){


              		if((!(empty($_POST['pass1'])) AND !(empty($_POST['pass2']))) AND ($_POST['pass1']==$_POST['pass2'])){
                      	     $query1 = 'UPDATE professeur
                      				set nom=?,
                      				prenom=?,
                      				date_naiss=?,
                      				num_tele=?,
                      				adresse=?,
                      				email=?,
                      				mdps=? 
                      				WHERE code_massar_prof=? ;';
                              $values1 = array($_POST['nom'],$_POST['prenom'],$_POST['date_naiss'],
                                        $_POST['telephone'],$_POST['adresse'],$_POST['email'],$_POST['pass1']
                                        ,$_POST['code_massar']);
              				}else{
                                $query1 = 'UPDATE professeur
                              set nom=?,
                              prenom=?,
                              date_naiss=?,
                              num_tele=?,
                              adresse=?,
                              email=? 
                              WHERE code_massar_prof=? ;';
                              $values1 = array($_POST['nom'],$_POST['prenom'],$_POST['date_naiss'],
                                  $_POST['telephone'],$_POST['adresse'],$_POST['email'],$_POST['code_massar']);
                      }
              				
                      $result = PDO($query1,$values1);
					
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