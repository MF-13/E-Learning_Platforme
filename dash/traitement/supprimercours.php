<?php
		
		$sql = "DELETE FROM `cours` WHERE id_cour=?";
    $value = array($id);
    $result = PDO($sql,$value);

          if($result)  {
          	header("location: ../cours.php?etat=true");
          }
          else{
          	header("location: ../cours.php?etat=false");
          }
?>