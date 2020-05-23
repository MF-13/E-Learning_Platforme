<?php

/**
*
*confirmer les informations du Login a partir du fichier traitement/login.php
*
**/
  include("traitement/login.php");

if (isset($_SESSION['id_user'])) {
  header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Connexion</title>
	<link rel="stylesheet" type="text/css" href="static/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="static/css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="static/img/login/wave.png">
	<div class="container">
		<div class="img">
			<img src="static/img/login/undraw_authentication_fsn5.svg">
		</div>
		<div class="login-content">
			<form action="" method="POST">
				<img src="static/img/login/avatar.svg">
				<h2 class="title">Bonjour</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name="login" id="login">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password" id="password">
				          </div>
				      </div>
              
				<!------------------------------------------------------------------->
				<div class="btn-group marging" role="group" aria-label="Basic example">
					<button type="submit" class="btn btn-secondary" name="submit">Connecter</button>
				</div>
				
				<?php if(!empty($message)) : ?>
                  <p><?php echo $message; ?></p>

                  <?php  endif; ?>
                  <hr>
				<!--------------------------------------------------------------------->
            	<a href="forget_pass.php">Mot de passe oublié?</a>
            	<a class="lienindex" href="index.php">Page d'acceuil</a>
            	<!--<input type="submit" class="btnt" value="Login">-->
            	 
            </form>
        </div>
    </div>
    <script type="text/javascript" src="static/js/main.js"></script>
</body>
</html>
