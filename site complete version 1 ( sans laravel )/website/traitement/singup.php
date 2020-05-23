<?php

  /*****************************************

  *  Constantes et variables

  *****************************************/

session_start(); 

 $message = '';



include("function.php");



  /*****************************************

  *  Vérification du formulaire

  *****************************************/

  // Si le tableau $_POST existe alors le formulaire a été envoyé

  if(!empty($_POST))

  {
      

      
    // Le login est-il rempli ?

    if(empty($_POST['nom']))

    {

      $message = 'Veuillez indiquer votre nom ';

    }

    elseif(empty($_POST['prenom']))

    {

      $message = 'Veuillez indiquer votre prenom';

    }

    elseif(empty($_POST['date_naiss']))

    {

      $message = 'Veuillez indiquer votre date de naissance';

    }
    elseif(empty($_POST['filiere']))

    {

      $message = 'Veuillez indiquer votre filiere';

    }
    elseif(empty($_POST['type']))

    {

      $message = 'Veuillez indiquer votre type ';

    }
    elseif(empty($_POST['email']))

    {

      $message = 'Veuillez indiquer votre email';

    }
    elseif(empty($_POST['adresse']))

        {

          $message = 'Veuillez indiquer votre adresse';

        }
    elseif(empty($_POST['telephone']))

    {

      $message = 'Veuillez indiquer votre numero de telephone';

    }
    elseif(empty($_POST['pass']))

    {

      $message = 'Veuillez indiquer votre mot de passe';

    }
    
    

    
  

  elseif((!empty($_POST['nom'])) AND (!empty($_POST['prenom'])) AND (!empty($_POST['date_naiss'])) AND (!empty($_POST['filiere'])) 
        AND (!empty($_POST['telephone'])) AND (!empty($_POST['email'])) AND (!empty($_POST['pass'])) AND (!empty($_POST['type'])) 
        AND (!empty($_POST['adresse'])) ) 

  {

            /*traitement pour ajout a la base*/

              
    $_POST['nom']= test_input( $_POST['nom']);
    $_POST['prenom']= test_input( $_POST['prenom']);
    $_POST['pass']= test_input($_POST['pass'] );
    $_POST['telephone']= test_input( $_POST['telephone']);
    $_POST['adresse']= test_input($_POST['adresse'] );
    $_POST['email']= test_input( $_POST['email']);
    $_POST['filiere']= test_input($_POST['filiere'] );
    $_POST['type']= test_input($_POST['type'] );



    if (check_existe_email($_POST['email'])!=1 || check_existe_phone($_POST['telephone'])!=1 ) {
      

        if (check_existe_email($_POST['email'])!=1) {
          $message = 'Email deja exist ! ';
        }

        if (check_existe_phone($_POST['telephone'])!=1) {
          $message =  " Numero telephone deja exist ! ";
        }

    }else{

      if(test_email($_POST['email'])==1){
            $query1 = 'INSERT INTO demande(nom,prenom,date_naiss,filiere,num_tele,email,mdps,type_user,etat,adresse) values(?,?,?,?,?,?,?,?,?,?)';

            $etat="-1";

            $values1 = array($_POST['nom'],$_POST['prenom'],$_POST['date_naiss'],$_POST['filiere'],

            $_POST['telephone'],$_POST['email'],$_POST['pass'],$_POST['type'],$etat,$_POST['adresse']);

            $stm = PDO($query1,$values1);


            if ($stm) {

              echo '<script language="Javascript"> document.location.replace("../index.php?etat=true"); </script>';

              

            }else{

              echo '<script language="Javascript"> document.location.replace("../index.php?etat=false"); </script>';

            }

      }else{

        $message = 'Format de l\'email est invalide';
      }
                    
    

  }

  

  }  
  else
  {

    $message = "Enter votre cordonaie ";

  }       

}

?>