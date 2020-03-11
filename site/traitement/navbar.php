 <!-- Nav BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="static/img/Index/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Index<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="filiere.php">Filiére</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cours-espace.php">Cours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact-us.php">Contactez-Nous</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <?php

//cette partie de code sert a analyser s'il y a une connexion ou pas ! 
//si le nom est vide svd qu ' il ya pas de connexion donx en dit deja connexte ! 

if (!(isset($_SESSION['code_massar']))) {
    /*&nbsp est pour faire une tabulation*/
  echo '<a href="login.php">Login</a>&nbsp&nbsp&nbsp&nbsp';
  echo '<a href="sing-up.php">Nouveau Utilisateur ?</a>';
} 
//else on fait une redirection a la page de connexion
else{
  echo ' 
  <form class="form-inline my-2 my-lg-0">
            <a class="alien" href="Profile.php"><i class="fas fa-user-graduate"></i>'.$_SESSION['nom'].'</a>
            &nbsp&nbsp
            <a class="btn btn-outline-success" type="submit" href="traitement/deconnexion.php"> Deconnexion</a>
  </form>
  ';
  
    
 }

?>       
      </form>
    </div>
  </nav> 
  <!-- End NAV BAR -->