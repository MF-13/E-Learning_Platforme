<?php
/*afficher les resultats du quiz*/
include("fun.php");

$dateserveur = new DateTimeImmutable('', new DateTimeZone('Africa/Casablanca'));
$date_delai = new DateTime('2020-04-20 10:35:00');

if ($dateserveur < $date_delai) {
	echo "afficher";
}else{
	echo "pas afficher";
}



$dt = new DateTime($_POST['delai']);
$dt->format('Y-m-d h:i:s');

print_r($dt);

?>
<?php
$score=0;
$q = 1;
$id_quiz =  $_GET['id'];
$rep_correcte = "";
$rep_incorrecte = "";
while ($q<= 10) {


	if (isset($_POST[$q])) {
	$query = "SELECT * from question_quiz where id_quiz = ? and n_question = ?" ;

	$value = array($id_quiz,$q);
	$res = PDO($query,$value);	

	
	if ($res->rowCount()!=0) {
		while($row = $res->fetch()){
			$reponse = $row['rep_correcte'];
		}

		if ($reponse==$_POST[$q]) {
			/*reponse correcte*/
		    $rep_correcte.=$q;
			$rep_correcte.= " ";
			$score++;
		}else{
			/*reponse incorrecte*/
			$rep_incorrecte.=$q;
			$rep_incorrecte.=" ";
			$score = $score;
		}
	}



	}else{
		/*si la reponse n'est pas selectioner le score reste le meme */
		$score=$score;
	}

$q++;	
}

echo "votre score est : ".$score."/10<br>";
echo "correcte ".$rep_correcte."<br>";
echo "incorrecte ".$rep_incorrecte;
$id_etd = '1';
$query2 = "insert into resultat_quiz values(?,?,?,?,?)";
$values2 = array($id_quiz,$id_etd,$score,$rep_correcte,$rep_incorrecte);
PDO($query2,$values2);

?>