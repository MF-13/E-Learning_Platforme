 <?php

include("function.php");
$id = $_GET['id'];


$query = "DELETE from message where id_msg = ?";
$values = array($id);
PDO($query,$values);

header("location: ../Message_Boit.php"); 

?>