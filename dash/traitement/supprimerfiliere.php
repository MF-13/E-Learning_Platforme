<?php

          $sql = "DELETE FROM `filiere` WHERE filiere_id=?" ;
          $value = array($id);
          $result = PDO($sql,$value);
          
          if($result)  {
            echo '<script language="Javascript"> document.location.replace("filiere.php?etat=true"); </script>';
          }
          else{
             echo '<script language="Javascript"> document.location.replace("filiere.php?etat=false"); </script>';
          }
?>