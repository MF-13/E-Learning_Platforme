<?php
session_start();
    include("function.php");
    capterConnexion($_SESSION['id_user']);
    $typeresult = TypeUser($_SESSION['type']);
  ?>

   
    <?php

       //Récupération de l'emplacement temporaire de stockage du fichier sur le serveur
       $tmp_name = $_FILES['userfile']['tmp_name'];
       // none est la valeur attribuée par PHP quand aucun fichier n'a été téléchargé
       if($tmp_name == null){
         echo "Problème de téléchargement : aucun fichier téléchargé !";
         exit;
       }
     // on vérifie maintenant l'extension
     $tmp_type= $_FILES['userfile']['type'];
     if(!strstr($tmp_type,'text/plain') && !strstr($tmp_type,'text/html') && !strstr($tmp_type,'pdf') && !strstr($tmp_type,'png')
      && !strstr($tmp_type,'jpg') && !strstr($tmp_type,'jpeg') && !strstr($tmp_type,'mp4') && !strstr($tmp_type,'mp3'))
     {
     echo "Votre format $tmp_type <br>";
     echo "Le fichier n'est pas en format <strong> .txt </strong> ni <strong>.html</strong>";
     exit;
     }

       //Récupération de la taille du fichier en octet
       $userfile_size = $_FILES['userfile']['size'];
       if($userfile_size == 0){
         echo "Problème de téléchargement : taille du fichier nulle !";
         exit;
       }

       


       
       //test si le fichier $userfile a réellement été téléchargé et n'est pas
       // un fichier local comme /etc/passwd par exemple
       if(!is_uploaded_file($tmp_name)){
          echo "Problème de téléchargement : Vérifier le fichier !";
          exit;
       }

       /*construction du path */
       
       $query1 = "SELECT filiere_user from user where id_user=?;";

       $values1 = array($_SESSION['id_user']);
       $res = PDO($query1,$values1);

        if($res->rowCount()!=0){
              while ($row = $res->fetch()) {
                $filiere = $row['filiere_user'];
              }
          }

       //  nom du fichier dans le système de l'utilisateur
       $userfile_name = $_FILES['userfile']['name'];
       if ($_POST['type_cours'] == "bibliotheque") {
         $path ="../file/bibliotheque/$userfile_name";
         $filiere = 'bibl';
       }else{
         $path ="../file/".$filiere."/$userfile_name";
        }


       if(!move_uploaded_file($tmp_name,$path)){
              echo "Impossible de copier le fichier !";
              exit;
       }


       
        
        /*traitement pour tirer l'id du cour depuis la base de donnees*/
        if ($_POST['type_cours'] == "bibliotheque") {
         $id_cour=-1;
       }else{
        $query2 = "SELECT id_cour from cours where nom=? ;";
        
        $values2 = array($_POST['cours']);
        $res2 = PDO($query2,$values2);
        
         if($res2->rowCount()!=0){
              while ($row = $res2->fetch()) {
                 $id_cour = $row['id_cour'];
              }
          }
        }

          $nom_file = $_FILES['userfile']['name'];
        /*Traitement pour ajouter le fichier a la base de donnes*/

        $query3 = "INSERT INTO file(id_filiere,code_prof,commantaire,id_cour,type_cour,nom_pdf,pdf_lien,titre) 
                       VALUES(?,?,?,?,?,?,?,?);";   

        $values3 = array($filiere,$_SESSION['id_user'],$_POST['commentaire'],$id_cour,$_POST['type_cours'],$nom_file,$path,$_POST['titre_cour']);
        $res3 = PDO($query3,$values3);
            
        if ($res3) {
          header("location: ../addcours-1.php?etat=true");
        }else{
          header("location: ../addcours-1.php?etat=false");
        }
        
    ?>
