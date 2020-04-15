<?php
		
		$sql = mysqli_query($conn,"DELETE FROM `user` WHERE id_user=$id");


          if($sql)  {
          	echo '
          	<div class="alert alert-success">
  				<strong>Success!</strong> Etudiant supprimer!
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