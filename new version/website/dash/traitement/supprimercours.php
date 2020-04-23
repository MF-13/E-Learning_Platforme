<?php
		
		$sql = "DELETE FROM `cours` WHERE id_cour=?";
    $value = array($id);
    $result = PDO($sql,$value);

          if($result)  {
            echo '<script language="Javascript"> document.location.replace("cours.php?etat=true"); </script>';
          }
          else{
            echo '<script language="Javascript"> document.location.replace("cours.php?etat=false"); </script>';
          }
?>