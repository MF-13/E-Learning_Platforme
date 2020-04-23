<?php
include 'traitement/function.php';

$query = "DELETE FROM message WHERE id_msg = ?";
$values = array($_GET['id']);

PDO($query,$values);

header("location: message.php");
?>