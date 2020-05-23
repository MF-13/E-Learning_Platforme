<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<?php
/*pour le proff pour entrez le quiz*/
if (isset($_GET['number'])) {
	$n = $_GET['number'];
	echo'<form action="quizbd.php?qst='.$n.'" method="post">
		  titre<input type="text" name="titre"><br><hr>';
	for ($i=1; $i <=$n ; $i++) { 
		
		echo 'question'.$i.'<input type="text" name="question'.$i.'"><br>';
		echo 'Question correcte <input type="text" name="repcorrques'.$i.'"><br>';
		echo 'question 2 <input type="text" name="rep2ques'.$i.'"><br>';
		echo 'question 3 <input type="text" name="rep3ques'.$i.'"><br><hr>';
	}

	 echo '<input type="submit" value="submit" >';
echo '</form>';
}else{
echo '
<form>  
Enter No:<input type="text" id="number" name="number"/><br/>  
<input type="submit" value="submit" onclick="numberquestion()"/>  
</form> 
';


}

?>

	

<script type="text/javascript">  
function numberquestion(){  

var number=document.getElementById("number").value; 

document.location.replace("random.php?"+number);



}  
</script> 

 
</body>

</html>