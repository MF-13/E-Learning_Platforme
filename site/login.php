<?php
/**
*
*confirmer les informations du Login a partir du fichier traitement/login.php
*
**/
  include("traitement/logintrait.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="static/css/Login.css">
  <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
  <img class="wave" src="static/img/Login/wave.png">
  <div class="container">
    <div class="img">
      <img src="static/img/Login/bg.svg">
    </div>
    <div class="login-content">
      <form action="" method="POST">
        <img src="static/img/Login/avatar.svg">
        <h2 class="title">Welcome Back</h2>
              <div class="input-div one">
                 <div class="i">
                    <i class="fas fa-user"></i>
                 </div>
                 <div class="div">
                    <h5>Email</h5>
                    <input type="email" class="input" name="login" id="login">
                 </div>
              </div>
              <div class="input-div pass">
                 <div class="i"> 
                    <i class="fas fa-lock"></i>
                 </div>
                 <div class="div">
                    <h5>Mot de pass</h5>
                    <input type="password" class="input" name="password" id="password">
                 </div>
              </div>
               <div class="input-div pass">
                <div class="i"> 
                    <i class="fas fa-address-card"></i>
                 </div>
                 <div class="div">
                    <h5>Type User</h5>
                          <div class="form-group">
                              <select name ="type" class="form-control" id="sel1">
                                <option value="admin">admin</option>
                                <option value="professeur">professeur</option>
                                <option value="etudiant">etudiant</option>
                              </select>
                            </div>
                  </div>
              </div>
              <a href="#">Mot de passe oublier?</a>
              <a class="lienindex" href="index.php">Page d'acceuil</a>
              <?php if(!empty($message)) : ?>
                  <p><?php echo $message; ?></p>

                  <?php  endif; ?>
              <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="static/js/main.js"></script>
</body>
</html>