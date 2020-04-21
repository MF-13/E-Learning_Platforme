<?php
/*include("traitement/connectedb.php");*/
include("traitement/function.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Demande</title>
	<link rel="stylesheet" type="text/css" href="static/css/sign-up.css">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
</head>
<body>
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Demande</h2>
			<form method="POST" action="traitement/singup.php">
			<!--<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">-->
				<input type="text" name="nom" class="field" placeholder="Nom" required="required">
				<input type="text" name="prenom" class="field" placeholder="Prenom" required="required">
				<input type="date" name="date_naiss" class="field" placeholder="Date Naissance" required="required">
				<select class="field" name="filiere" required="required">
					<?php
						$values = array();
						$stm=PDO("SELECT * FROM filiere",$values);
						if($stm->rowCount()!=0){
							while ($row = $stm->fetch()) {
								echo "<option>".$row['filiere_id']."</option>";
							}
						}

					?>
				</select>
				<select class="field" name="type" required="required">
					<option>etudiant</option>
					<option>professeur</option>
				</select>
				<input type="email" name="email" class="field" placeholder="Email" required="required">
				<input type="text" class="field" name="adresse" placeholder="Adresse" required="required">
				<input type="text" class="field" name="telephone" placeholder="telephone" required="required">
				<input type="password" name="pass" class="field" placeholder="Mot de passe" required="required">
				<input type="submit" name="submit" class="btn btn-danger">
			</form>
			</div>
		</div>
	</div>
	<!--Traitement d ajoute-->
	<?php
			if (filter_has_var(INPUT_POST,"submit")) {
					/*Si user a qlickuer sur OK*/
					include("traitement/singup.php");	

				}
	?>
</body>
</html>