<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
session_start(); 
 $message = '';

include("traitement/connectedb.php");



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

          $query = "SELECT code_massar_prof,nom_cmplt,type from login_prof where login='{$_POST['login']}' and  mdps= '{$_POST['password']}'";
          $result = mysqli_query($conn,$query);
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
else
{
  $message = "Enter votre cordonaie ";
}         
     
}
?>