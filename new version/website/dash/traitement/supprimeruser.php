<?php
	$sql = "DELETE FROM `user` WHERE id_user=?";
   $value = array($id);
   $result = PDO($sql,$value);
   
    if ($result) {
			if($tab[count($tab)-1]=="etudiant.php"){
            echo '<script language="Javascript"> document.location.replace("etudiant.php?etat=true"); </script>';
			}else{
            echo '<script language="Javascript"> document.location.replace("prof.php?etat=true"); </script>';
			}
    
}else{
      if($tab[count($tab)-1]=="etudtrait.php"){
      echo '<script language="Javascript"> document.location.replace("etudiant.php?etat=false"); </script>';
    }else{
      echo '<script language="Javascript"> document.location.replace("prof.php?etat=false"); </script>';
     }
}
?>