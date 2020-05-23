 <?php



include("function.php");



if (!isset($_POST['id_msg'])) {
	echo '<script language="Javascript"> document.location.replace("../message_boit.php"); </script>';
}else{

	$id = $_POST['id_msg'];
}




$query = "DELETE from message where id_msg = ?";

$values = array($id);

$stm = PDO($query,$values);


if($stm){


echo '<script language="Javascript"> document.location.replace("../message_boit.php?etat=true"); </script>';
}else{
echo '<script language="Javascript"> document.location.replace("../message_boit.php?etat=false"); </script>';

}




?>