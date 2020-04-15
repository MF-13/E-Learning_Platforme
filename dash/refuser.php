<?php

include('traitement/function.php');

$id = $_GET['id'];

$query1="UPDATE demande set etat='0' where id=?;";
$value = array($id);

$result1= PDO($query1,$value);

if ($result1) {
  header("location: index.php");
}else{
  echo "erreur est produit";
}


?>