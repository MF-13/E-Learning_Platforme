<?php
	$sql = "DELETE FROM `user` WHERE id_user=?";
   $value = array($id);
   $result = PDO($sql,$value);
    if ($result) {
			if($tab[count($tab)-1]=="etudiant.php"){
            header("location: ../etudiant.php?etat=true");
			}else{
            header("location: ../prof.php?etat=true");
			}
    
}else{
      if($tab[count($tab)-1]=="etudtrait.php"){
      header("location: ../etudiant.php?etat=false");
    }else{
      header("location: ../etudiant.php?etat=false");
     }
}
?>