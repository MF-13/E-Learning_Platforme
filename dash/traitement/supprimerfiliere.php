<?php

                      $sql = mysqli_query($conn,"DELETE FROM `filiere` WHERE filiere_id=\"$id\"");


          if($sql)  {
          	echo '
          	<div class="alert alert-success">
			  <strong>Success!</strong> filiere supprimer!
			</div>
          	<script>
         setTimeout(function(){
            window.location.href = \'filiere.php\';
         }, 2000);
      </script>';
          }
          else{
          	echo "ERROR lors de la suppression !";
          }
?>