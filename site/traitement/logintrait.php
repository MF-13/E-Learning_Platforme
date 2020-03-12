<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
session_start(); 
 $message = '';

include("traitement/function.php");
    $conn = connectedb();



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
    elseif (empty($_POST['type'])) {
      $message = "indiquer votre type ! ";
    }
  
  elseif((!empty($_POST['login'])) AND (!empty($_POST['password'])) AND (!empty($_POST['type']))) 
  {
            /*traitement pour le login des professeur */
          if($_POST['type']=="professeur"){
                
                $result = query("SELECT code_massar_prof,nom_cmplt,type from login_prof where login='{$_POST['login'                ]}' and     mdps= '{$_POST['password']}'");
                $cpt = mysqli_num_rows($result);
            
                if ( $cpt > 0 )
                 {
                         
                         while($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['email'] =  $_POST['login'];
                        $_SESSION['code_massar'] = $row['code_massar_prof'];
                        $_SESSION['nom'] = $row['nom_cmplt'];
                        $_SESSION['type'] = $row['type'];
                        $LOGIN = $_POST["login"];
                }

                 
                  //sleep(2);    
                  header("Location: index.php");

                 }

                 else
                 {
                    $message = 'votre mot de passe ou username incorrect ';
                 }
          }



          /*traitement pour le login des admin */

          if($_POST['type']=="admin"){
             
                $result = query("SELECT id from admin where login='{$_POST['login']}' and mdps= '{$_POST['password']              }'");
                $cpt = mysqli_num_rows($result);
            
                if ( $cpt > 0 )
                 {
                         
                         while($row = mysqli_fetch_assoc($result)) {
                        $_SESSION['email'] =  $_POST['login'];
                        $_SESSION['code_massar'] = $row['id'];
                        $_SESSION['type'] = "admin";
                        $_SESSION['nom'] = "admin";
                        $LOGIN = $_POST["login"];
                }

                 
                  //sleep(2);    
                  header("Location: ../dash/index.php");

                 }

                 else
                 {
                    $message = 'votre mot de passe ou username incorrect ';
                 }
          }


          /*traitement pour le login des etudiants */
          if($_POST['type']=="etudiant"){
                    $result = query("SELECT code_massar,nom_complet,type from login_etd where email='{$_POST['login']}' and  mdps= '{$_POST['password']}'");
                    $cpt = mysqli_num_rows( $result);
              
                    if ( $cpt > 0 )
                     {
                             
                             while($row = mysqli_fetch_assoc($result)) {
                            $_SESSION['email'] =  $_POST['login'];
                            $_SESSION['code_massar'] = $row['code_massar'];
                            $_SESSION['nom'] = $row['nom_complet'];
                            $_SESSION['type'] = $row['type'];
                            $LOGIN = $_POST["login"];
                    }

                          
                      header("Location: index.php");

                     }

                     else
                     {
                        $message = 'votre mot de passe ou username incorrect ';
                     }
          } 


    
}
else
{
  $message = "Enter votre cordonaie ";
}
}         

?>