<?php

include('connecteDB.php');

$id = $_GET['code_massar'];

$query1="UPDATE demande set etat='0' where code_massar=".$id.";";
$result1= mysqli_query($conn,$query1);

if ($result1) {
  header("location: index.php");
}else{
  echo "erreur est produit";
}


?>