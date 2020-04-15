<?php

include('connecteDB.php');

$id = $_GET['id'];

$query1="UPDATE demande set etat='1' where id=".$id.";";
$result1= mysqli_query($conn,$query1);



$query2 = "SELECT * FROM demande where id=".$id." AND etat=\"1\";";


$result2 = mysqli_query($conn,$query2);
$res = mysqli_num_rows($result2);

if ($res) {
	while($row = mysqli_fetch_array($result2))
            {
            	
                echo "nom  :  ".$row['nom']."<br>";
                echo "prenom  : ".$row['prenom'];
                echo "<br>date : ".$row['date_naiss'];
                echo "<br>num_tele : ".$row['num_tele'];
                echo "<br>filiere : ".$row['filiere'];
                echo "<br> email : ".$row['email'];
                echo "<br> mdps : ".$row['mdps'];
                echo "<br> adresse : ".$row['adresse'];
                echo "<br> type : ".$row['type_user']."<br>";
              	
              		$query3 = 'INSERT INTO user(nom_user,prenom_user,date_naiss_user,num_tele_user,filiere_user,email_user,mdps_user,adresse_user,type_user) 
                  values("'.$row['nom'].'","'.$row['prenom'].'","'.$row['date_naiss'].'","'.$row['num_tele'].'"
              		,"'.$row['filiere'].'","'.$row['email'].'","'.$row['mdps'].'","'.$row['adresse'].'","'.$row['type_user'].'");';
              	

              	

              	$result3 = mysqli_query($conn,$query3);
              	if ($result3) {
              			header("location: index.php");
              	}else{
              		echo $row['type_user']." erreur dans le traitement! ";
              	}
            }
}

?>