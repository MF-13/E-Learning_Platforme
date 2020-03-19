<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
<!--<button onclick="change()" id="button"> brk ya rbk</button><?php $_SERVER['PHP_SELF']?>-->
<form name="form" method="POST" action="TEST.php">	
	<input type="text" name="nom" placeholder="name" required><br><br>
	<input type="text" name="filiere" placeholder="filiere" required><br><br>
	<input type="submit" name="submit">
</form>
<!--
<?php/*
if (filter_has_var(INPUT_POST,"submit")) {
	echo "<script>alert('ok');</script>";
}*/
?>-->
<!--
<script>
	function change(){
		var para = document.createElement("p");
		para.setAttribute('id','alert');
		var button = document.getElementById("button");
		body.insertBefore(para, button);

		//document.body.appendChild(para);
		para.textContent="salam";
		
		//document.getElementById("alert").innerHTML="teeest ya rbk";
}
</script>
<style>
	#alert{
		background-color: red;
		padding: 15px;
		text-align: center;
		margin: 15px;
		color: green;
		border: 5px;
		border-radius: 100px;
	}
</style>-->
</body>
</html>