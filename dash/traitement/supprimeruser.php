<?php
		
		$sql = "DELETE FROM `user` WHERE id_user=?";
    $value = array($id);
    $result = PDO($sql,$value);

          if($result)  {
          	echo '
          	<div class="alert alert-success">
  				<strong>Success!</strong> supprimer!
			</div>
          	<script>
         setTimeout(function(){
            window.location.href = \'etudiant.php\';
         }, 2000);
      </script>';
          }
          else{
          	echo "ERROR lors de la suppression !";
          }
?>