<!DOCTYPE html>

<html>

<head>

	<title>Demande</title>

    <link rel="stylesheet" href={{ asset("css/site/sign-up.css") }}>
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

</head>

<body>

	<div class="container">

		<div class="contact-box">

			<div class="left"></div>

			<div class="right">

				<h2>Demande</h2>

			<form method="POST" action="{{route('user.store')}}">
				@csrf

			<!--<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">-->

				<input type="text" name="nom_user" class="field" placeholder="Nom" >

				<input type="text" name="prenom_user" class="field" placeholder="Prenom" >

				<input type="date" name="date_naiss_user" class="field" placeholder="Date Naissance" >

				<select class="field" name="filiere_user" >

					<option>gi</option>
					<option>tm</option>
					<option>gc</option>


				</select>

				<select class="field" name="type_user" >

					<option>etudiant</option>

					<option>professeur</option>

				</select>

				<input type="email" name="email_user" class="field" placeholder="Email" >

				<input type="text" class="field" name="adresse_user" placeholder="Adresse" >

				<input type="text" class="field" name="num_tele_user" placeholder="telephone" >

				<input type="password" name="mdps_user" class="field" placeholder="Mot de passe" >

				<input type="submit" name="submit" class="btn btn-danger">
				

			</form>

			</div>

		</div>

	</div>

	<!--Traitement d ajoute-->



</body>

</html>