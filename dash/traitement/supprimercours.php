<?php
		
		$sql = "DELETE FROM `cours` WHERE id_cour=?";
    $value = array($id);
    $result = PDO($sql,$value);

          if($result)  {
          	echo '
          	<div class="alert alert-success" <div style="margin-left: 20px; margin-right: 20px;">
             <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>    Le cour est <strong>Supprimer</strong> !
			   </div>
          	<script>
         setTimeout(function(){
            window.location.href = \'cours.php\';
         }, 2000);
      </script>';
          }
          else{
          	echo '<div class="alert alert-danger" <div style="margin-left: 20px; margin-right: 20px;">
             <i class="fas fa-times"></i> <strong>Error !<strong> l\'hors de la suppression ! .
			   </div>';
          }
?>