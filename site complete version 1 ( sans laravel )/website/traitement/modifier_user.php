<?php



/*Ajouter la connexion a lbase de donnes*/



include("function.php");


$_POST['id_user']=$_POST['id'];





  if (isset($_POST['nom']) AND isset($_POST['prenom'])

     AND isset($_POST['date_naiss']) AND 

    isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email'])) {



              if (!(empty($_POST['nom'])) AND !(empty($_POST['prenom'])) 

                  AND !(empty($_POST['date_naiss'])) AND 

                  !(empty($_POST['telephone'])) AND !(empty($_POST['adresse'])) AND !(empty($_POST['email']))) {

              if(isset($_POST['pass1']) AND isset($_POST['pass2'])){





              		if((!(empty($_POST['pass1'])) AND !(empty($_POST['pass2']))) AND ($_POST['pass1']==$_POST['pass2'])){

                      	     $query1 = 'UPDATE user

                      				set nom_user=?,

                      				prenom_user=?,

                      				date_naiss_user=?,

                      				num_tele_user=?,

                              email_user=?,

                              mdps_user=?,

                      				adresse_user=?

                      				WHERE id_user=? ;';

                              $values1 = array(test_input($_POST['nom']),test_input($_POST['prenom']),$_POST['date_naiss'],

                                        $_POST['telephone'],$_POST['email'],test_input($_POST['pass1'])

                                        , test_input($_POST['adresse']),$_POST['id_user']);

              				}else{

                                $query1 = 'UPDATE user

                              set nom_user=?,

                              prenom_user=?,

                              date_naiss_user=?,

                              num_tele_user=?,

                              email_user=?,

                              adresse_user=?

                              WHERE id_user=? ;';

                              $values1 = array(test_input($_POST['nom']),test_input($_POST['prenom']),$_POST['date_naiss'],

                                  $_POST['telephone'],$_POST['email'],test_input($_POST['adresse']),$_POST['id_user']);

                      }

              				

                      $result = PDO($query1,$values1);

					

					if($result) {

		           echo '<script language="Javascript"> document.location.replace("../profile.php?etat=true"); </script>';
          }else{

              echo '<script language="Javascript"> document.location.replace("../profile.php?etat=false"); </script>';
          }

	}



	else{
      echo '<script language="Javascript"> document.location.replace("../profile.php?etat=false"); </script>';
	}



              }

          else{

          	echo '<script language="Javascript"> document.location.replace("../addquiz.php?etat=false"); </script>';
            

          }



            }

        else{

        	header("location: ../profile.php");

        }

?>