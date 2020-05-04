<!DOCTYPE html>

<html>

<head>

	<title>Demande</title>

    <link rel="stylesheet" href={{ asset("css/sign-up.css") }}>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

</head>

<body>

	<div class="container">

		<div class="contact-box">

			<div class="left"></div>

			<div class="right">

				<h2>Demande</h2>

			<form method="POST" action="#">

			<!--<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">-->

				<input type="text" name="nom" class="field" placeholder="Nom" >

				<input type="text" name="prenom" class="field" placeholder="Prenom" >

				<input type="date" name="date_naiss" class="field" placeholder="Date Naissance" >

				<select class="field" name="filiere" >

					<option>gi</option>
					<option>tm</option>
					<option>gc</option>


				</select>

				<select class="field" name="type" >

					<option>etudiant</option>

					<option>professeur</option>

				</select>

				<input type="email" name="email" class="field" placeholder="Email" >

				<input type="text" class="field" name="adresse" placeholder="Adresse" >

				<input type="text" class="field" name="telephone" placeholder="telephone" >

				<input type="password" name="pass" class="field" placeholder="Mot de passe" >

				<input type="submit" name="submit" class="btn btn-danger">
				

			</form>

			</div>

		</div>

	</div>

	<!--Traitement d ajoute-->



</body>

</html>