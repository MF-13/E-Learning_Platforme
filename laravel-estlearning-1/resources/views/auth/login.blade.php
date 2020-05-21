<!DOCTYPE html>

<html>

<head>

	<title>Connexion</title>

    <link rel="stylesheet" href={{ asset("css/site/style.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/bootstrap.css") }}>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

	<img class="wave" src="\images\img\login\wave.png">

	<div class="container">

		<div class="img">

			<img src="\images\img\login\undraw_authentication_fsn5.svg">

		</div>

		<div class="login-content">

			{{-- <form action="" method="POST"> --}}
				<form method="POST" action="{{ route('login') }}">
					@csrf

				<img src="\images\img\login\avatar.svg">

				<h2 class="title">Bonjour</h2>

           		<div class="input-div one">

           		   <div class="i">

           		   		<i class="fas fa-user"></i>

           		   </div>

           		   <div class="div">

           		   		<h5>Email</h5>

           		   		{{-- <input type="text" class="input" name="login" id="login"> --}}
						 <input id="email_user" type="email" class="input form-control @error('email_user') is-invalid @enderror" name="email_user" value="{{ old('email_user') }}" required autocomplete="email" autofocus>

						 @error('email_user')
							  <span class="invalid-feedback" role="alert">
								  <strong>{{ $message }}</strong>
							  </span>
						  @enderror

           		   </div>

           		</div>

           		<div class="input-div pass">

           		   <div class="i"> 

           		    	<i class="fas fa-lock"></i>

           		   </div>

           		   <div class="div">

           		    	<h5>Mot de passe</h5>

           		    	{{-- <input type="password" class="input" name="password" id="password"> --}}
						   <input id="mdps_user" type="password" class="input form-control @error('mdps_user') is-invalid @enderror" name="mdps_user" required autocomplete="current-password">

						   @error('mdps_user')
							   <span class="invalid-feedback" role="alert">
								   <strong>{{ $message }}</strong>
							   </span>
						   @enderror

				          </div>

				      </div>

              

				<!------------------------------------------------------------------->

				<div class="btn-group marging" role="group" aria-label="Basic example">

					{{-- <button type="submit" class="btn btn-secondary" name="submit">Connecter</button> --}}
					<button type="submit" name="submit" class="btn btn-secondary">
						{{ __('Connecter') }}
					</button>

				</div>

                  <hr>

				<!--------------------------------------------------------------------->

				{{-- <a href="forget_pass.php">Mot de passe oublié?</a> --}}
				@if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="text-decoration: none; color: #999">
                                        {{ __('Mot de passe oublié?') }}
                                    </a>
                                @endif

				{{-- <a class="lienindex" href="index.php">Page d'acceuil</a> --}}
				<a class="btn btn-link" href="{{ route('index') }}" style="text-decoration: none; color: #999">
					{{ __('Page d\'acceuil') }}
				</a>


            </form>

        </div>

	</div>
	
    <script src={{ asset("js/site/main.js") }}></script>

</body>

</html>

