<?php
	$sql = "DELETE FROM `user` WHERE id_user=?";
   $value = array($id);
   $result = PDO($sql,$value);
    if ($result) {
			if($tab[count($tab)-1]=="etudiant.php"){
            echo '		
          	<div class="alert alert-success" <div style="margin-left: 20px; margin-right: 20px;">
             <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>    Etudiant <strong>Supprimer</strong> !
			   </div>';
			echo'	<script>
         		setTimeout(function(){
				window.location.href = \'./etudiant.php\';
				}, 2000);
				</script>
				';
			}else{
            echo '		
          	<div class="alert alert-success" <div style="margin-left: 20px; margin-right: 20px;">
             <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>    Professeur <strong>Supprimer</strong> !
			</div>';
				echo'	<script>
         		setTimeout(function(){
				window.location.href = \'./prof.php\';
				}, 2000);
				</script> ';
			}
    
	}
	else{
      echo '		
          	<div class="alert alert-danger" <div style="margin-left: 20px; margin-right: 20px;">
             <i class="fas fa-times"></i> <strong>Error !<strong> l\'hors de la suppression .
			   </div>';
          }
?>