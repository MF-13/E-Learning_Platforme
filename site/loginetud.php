<?php
/**
*
*confirmer les informations du Login a partir du fichier traitement/login.php
*
**/
include("traitement/login-etd.php");
?>
<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/login.css">
    <title>LOGIN PAGE</title>
  </head>
  <body>
        
        <div class="filter">
        </div>
    
        <div class="login">
            <h1>Log in</h1>
            <form action="" method="POST">
                <input class="input" name="login" id="login" type="email" placeholder="Email"><br>
                <input class="input" type="password" name="password" id="password" type="password" placeholder="Password"><br>
                <button>Log in</button><br>
                <hr>
                <a href="index.php">Page d'acceuil</a> <br>
                <a href="#">Mot de pass oublier?</a><br><br>


                  <?php if(!empty($message)) : ?>
                  <p><?php echo $message; ?></p>

                  <?php  endif; ?>

            </form>
        
        </div>
    </body>
</html>