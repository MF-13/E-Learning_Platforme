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

			<form method="POST" action="{{route('register')}}">
				@csrf

			{{-- <!--<form method="POST" action="<?php $_SERVER['PHP_SELF']?>">--> --}}

				{{-- <input type="text" name="nom_user" class="field" placeholder="Nom" > --}}
				<input id="nom_user" type="text" class="field form-control @error('nom_user') is-invalid @enderror" name="nom_user" value="{{ old('nom_user') }}" required autocomplete="nom_user" autofocus placeholder="Nom">

                                @error('nom_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				{{-- <input type="text" name="prenom_user" class="field" placeholder="Prenom" > --}}
				<input id="prenom_user" type="text" class="field form-control @error('prenom_user') is-invalid @enderror" name="prenom_user" value="{{ old('prenom_user') }}" required autocomplete="prenom_user" placeholder="Prenom">

                                @error('prenom_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				{{-- <input type="date" name="date_naiss_user" class="field" placeholder="Date Naissance" > --}}
				<input id="date_naiss_user" type="date" class="field form-control @error('date_naiss_user') is-invalid @enderror" name="date_naiss_user" value="{{ old('date_naiss_user') }}" required autocomplete="date_naiss_user" placeholder="Date Naissance">

                                @error('date_naiss_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				<select class="field" name="filiere_user" required >
					@foreach ($fields as $field)
						<option>{{strtolower($field)}}</option>
					@endforeach

				</select>

				<select class="field" name="type_user" required>

					<option>etudiant</option>

					<option>professeur</option>


				</select>

				{{-- <input type="email" name="email_user" class="field" placeholder="Email" > --}}
				<input id="email" type="email" class="field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				{{-- <input type="text" class="field" name="adresse_user" placeholder="Adresse" > --}}
				<input id="adresse_user" type="text" class="field form-control @error('adresse_user') is-invalid @enderror" name="adresse_user" value="{{ old('adresse_user') }}" required autocomplete="adresse_user" placeholder="Adresse">

                                @error('adresse_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				{{-- <input type="text" class="field" name="num_tele_user" placeholder="telephone" > --}}
				<input id="num_tele_user"  type="number" class="field form-control @error('num_tele_user') is-invalid @enderror" name="num_tele_user" value="{{ old('num_tele_user') }}" required autocomplete="num_tele_user" placeholder="Numéro de téléphone">

                                @error('num_tele_user')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				{{-- <input type="password" name="mdps_user" class="field" placeholder="Mot de passe" > --}}
				<input id="password" type="password" class="field form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Mot De Passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

				<input type="submit" name="submit" class="btn btn-danger">
				

			</form>

			</div>

		</div>

	</div>

	<!--Traitement d ajoute-->



</body>

</html>