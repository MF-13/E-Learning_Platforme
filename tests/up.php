<?php
	
	

		$name = $_FILES['userfile']['name'];
		$tmp= $_FILES['userfile']['tmp_name'];

		if($name == null){
         echo "Problème de téléchargement : aucun fichier téléchargé !";
         exit;
       }

		
		$path = "video/".$name ;

		if(!move_uploaded_file($tmp,$path)){
              echo "Impossible de copier le fichier !";
              exit;
       }


	

?>