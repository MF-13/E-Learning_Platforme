<?php
include("PDO2.php");

$nom = $_POST['nom'];
$filiere = $_POST['filiere'];


$query = "SELECT * from etudiant where code_massar=? and filiere=?";
		$values = array($nom,$filiere);
		$stm=PDO($query,$values);


if($stm->rowCount()!=0){
while ($row = $stm->fetch()) {
		echo "<br>".$row['nom']."<br>";
	}
}else{
	echo "Nothing";
}

echo "<br><a href=\"FORM.php\">Form</a>";
		
?>