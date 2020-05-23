 <?php



include("function.php");


if (!isset($_POST['id_msg'])) {
	echo '<script language="Javascript"> document.location.replace("../message_boit.php"); </script>';
}else{

	$id = $_POST['id'];
}






$query = "DELETE from message where recepteur_id = ?";

$values = array($id);

$stm = PDO($query,$values);





if($stm){


echo '<script language="Javascript"> document.location.replace("../message_boit.php?etat=true"); </script>';
}else{
echo '<script language="Javascript"> document.location.replace("../message_boit.php?etat=false"); </script>';

}

?>