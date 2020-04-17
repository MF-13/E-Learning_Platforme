<?php
include("function.php");
$path="../".$_GET['dir']."/".$_GET['file']; 
unlink($path);
/*drop file from database*/
$query1 = "DELETE from file where nom_pdf=?;";

$values1 = array($_GET['file']);
$stm = PDO($query1,$values1);

header("location: ../".$_GET['pre'].".php");
?>