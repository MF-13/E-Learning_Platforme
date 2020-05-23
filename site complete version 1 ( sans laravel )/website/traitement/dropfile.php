<?php

include("function.php");


if (!isset($_POST['dir']) || !isset($_POST['file'])) {
     echo '<script language="Javascript"> document.location.replace("../cours-espace.php"); </script>';
   }

if (isset($_POST['dir']) and isset($_POST['file'])) {

$path="../".$_POST['dir']."/".$_POST['file']; 

unlink($path);

/*drop file from database*/

$query1 = "DELETE from file where nom_pdf=?;";



$values1 = array($_GET['file']);

$stm = PDO($query1,$values1);

if ($stm) {
	echo '<script language="Javascript"> document.location.replace("../cours-espace.php?etat=true"); </script>';
else{
echo '<script language="Javascript"> document.location.replace("../cours-espace.php?etat=false"); </script>';
}



]

?>