<?php

  /*****************************************

  *  Constantes et variables

  *****************************************/

session_start(); 

 $message = '';



include("function.php");





$LOGIN = '';

$PASSWORD = '';



  /*****************************************

  *  Vérification du formulaire

  *****************************************/

  // Si le tableau $_POST existe alors le formulaire a été envoyé

  if(!empty($_POST))

  {

    // Le login est-il rempli ?

    if(empty($_POST['login']))

    {

      $message = 'Veuillez indiquer votre login svp !';

    }

      // Le mot de passe est-il rempli ?

    elseif(empty($_POST['password']))

    {

      $message = 'Veuillez indiquer votre mot de passe svp !';

    }

  

  elseif((!empty($_POST['login'])) AND (!empty($_POST['password']))) 

  {

            /*traitement pour le login*/

          

                

                $query1 = "SELECT id_user,nom_user,prenom_user,type_user from user where email_user=? and mdps_user= ?";



                $values1 = array($_POST['login'],$_POST['password']);   

                $result = PDO($query1,$values1);



                if($result->rowCount()!=0){

                    while ($row = $result->fetch()) {



                      

                        $_SESSION['email'] =  test_input($_POST['login']);

                        $_SESSION['id_user'] = $row['id_user'];

                        $_SESSION['nom'] = test_input($row['nom_user'].' '.$row['prenom_user']);

                        $_SESSION['type'] = test_input($row['type_user']);

                    }



                    

                      header("Location: profile.php");

                   



                 }

                 else

                 {

                    $message = 'votre mot de passe ou username incorrect ';

                 }

          









    

}

else

{

  $message = "Enter votre cordonaie ";

}

}         



?>