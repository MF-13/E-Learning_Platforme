<?php
/*insertion du quiz a la base de donnes*/

for ($i=1; $i <=$_GET['qst'] ; $i++) { 
	
if (isset($_POST['question'.$i]) && isset($_POST['repcorrques'.$i]) && isset($_POST['rep2ques'.$i]) && isset($_POST['rep3ques'.$i])) {
	
	if (empty($_POST['question'.$i]) || empty($_POST['repcorrques'.$i]) || empty($_POST['rep2ques'.$i]) || empty($_POST['rep3ques'.$i])) {
			echo "emty in ".$i."<br>";
        }else{
			echo "cordonnes ".$i."<br>";
			/*insertion a la base ici */
			$query = "insert "
        }


}else {
	echo "not existe ".$i."<br>";
}


















}



?>