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
  echo '<a href="loginetud.php">Login Etudiant</a>&nbsp&nbsp&nbsp&nbsp';
    /*<button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>*/
    echo '<a href="loginproff.php">Log In Professeur</a>';
    /*<button class="btn btn-outline-success my-2 my-sm-0" type="submit"></button>*/
} 
//else on fait une redirection a la page de connexion
else{
  echo '<p class="btn btn-outline-success my-2 my-sm-0"><a href="profile1.php" >Bonjour '.$_SESSION['nom'].' ! </a></p>';
  echo ' <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="traitement/deconnexion.php"> Deconnexion</a></button>';
    
 }

?>       
      </form>
    </div>
  </nav> 
  <!-- End NAV BAR -->