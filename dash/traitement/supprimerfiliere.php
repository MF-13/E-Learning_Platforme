<?php

          $sql = "DELETE FROM `filiere` WHERE filiere_id=?" ;
          $value = array($id);
          $result = PDO($sql,$value);

          if($result)  {
          header("location: ../filiere.php?etat=true");
          }
          else{
             header("location: ../filiere.php?etat=false");
          }
?>