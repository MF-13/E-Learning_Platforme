<?php
  /*****************************************
  *  Constantes et variables
  *****************************************/
session_start(); 
 $message = '';

include("function.php");
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
                
                $query1 = "SELECT code_massar_prof,nom_cmplt,type from login_prof where login=? and mdps= ?";

                $values1 = array($_POST['login'],$_POST['password']);   
                $result = PDO($query1,$values1);

                if($result->rowCount()!=0){
                    while ($row = $result->fetch()) {

                      
                        $_SESSION['email'] =  $_POST['login'];
                        $_SESSION['code_massar'] = $row['code_massar_prof'];
                        $_SESSION['nom'] = $row['nom_cmplt'];
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



          /*traitement pour le login des admin */

          if($_POST['type']=="admin"){
             
                $query2 = "SELECT id from admin where login=? and mdps=?";

                $values2 = array($_POST['login'],$_POST['password']);   
                $result = PDO($query2,$values2);
                
                if($result->rowCount()!=0){
                    while ($row = $result->fetch()) {
                      $_SESSION['email'] =  $_POST['login'];
                        $_SESSION['code_massar'] = $row['id'];
                        $_SESSION['type'] = "admin";
                        $_SESSION['nom'] = "admin";
                        $LOGIN = $_POST["login"];
                    }
                     header("Location: ../dash/index.php");
                }
                 else
                 {
                    $message = 'votre mot de passe ou username incorrect ';
                 }
          }


          /*traitement pour le login des etudiants */
          if($_POST['type']=="etudiant"){
                    $query3 = "SELECT code_massar,nom_complet,type from login_etd where email=? and  mdps=?";

                    $values3 = array($_POST['login'],$_POST['password']);   
                    $result = PDO($query3,$values3);

                    if($result->rowCount()!=0){
                        while ($row = $result->fetch()) {
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