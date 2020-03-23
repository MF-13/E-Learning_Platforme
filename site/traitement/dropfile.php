<?php
include("function.php");
$path="../".$_GET['dir']."/".$_GET['file']; 
unlink($path);
/*drop file from database*/
INSERT("DELETE from file where nom_pdf=\"".$_GET['file']."\";");
header("location: ../cours-espace.php");
?>