<?php
$path="../".$_GET['dir']."/".$_GET['file']; 
unlink($path);
header("location: ../cours-espace.php")
?>