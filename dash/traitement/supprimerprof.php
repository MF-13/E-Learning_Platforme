<?php

                      $sql = mysqli_query($conn,"DELETE FROM `professeur` WHERE code_massar_prof=$id");


          if($sql)  {
          	echo '
          	<div class="alert alert-success">
			  <strong>Success!</strong> Professseur supprimer
			</div>
          	<script>

         setTimeout(function(){
            window.location.href = \'prof.php\';
         }, 2000);
      </script>';
          }
          else{
          	echo "ERROR lors de la suppression !<br><br>";
          	echo '<a href="'.$dernier.'">Retourner a '.$dernier.'</a>';
          }
?>