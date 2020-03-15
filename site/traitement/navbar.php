<?php
  $url = $_SERVER['REQUEST_URI'];

  $tab = explode("/",$url);

   $act = array('index.php'=>'','filiere.php'=>'','cours-espace.php'=>'','contact-us.php'=>'');
    $title ="";
   
    switch($tab[4])
    {
      case 'index.php'       :      $act['index.php'] = 'active'; $title = 'E - Learning';break;
      case 'filiere.php'       :    $act['filiere.php'] = 'active'; $title = 'E - filiere';break;
      case 'cours-espace.php'       : $act['cours-espace.php'] = 'active'; $title = 'E - Cours';break;
      case 'contact-us.php'       : $act['contact-us.php'] = 'active'; $title = 'E - Contact';break;
      case 'addcours-1.php'       : $act['addcours-1.php'] = 'active'; $title = 'Ajouter courz';break;
    }


 ?>
  <!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/Index.css">
    
    <title><?php echo $title; ?></title>
</head>
<body>
 <!-- Nav BAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="index.php"><img src="static/img/Index/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item ">
          <a class="nav-link <?php echo $act['index.php']; ?>" href="index.php">Index<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $act['filiere.php']; ?>" href="filiere.php">Filiére</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $act['cours-espace.php']; ?>" href="cours-espace.php">Cours</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $act['contact-us.php']; ?>" href="contact-us.php">Contactez-Nous</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <?php

//cette partie de code sert a analyser s'il y a une connexion ou pas ! 
//si le nom est vide svd qu ' il ya pas de connexion donx en dit deja connexte ! 

if (!(isset($_SESSION['code_massar']))) {
    /*&nbsp est pour faire une tabulation*/
  echo '<button type="button" class="btn btn-outline-primary btnmarging" onclick="window.location.href = \'login.php \'"> LOGIN</button>&nbsp&nbsp&nbsp&nbsp';
  echo '<button type="button" class="btn btn-outline-primary btnmarging" onclick="window.location.href = \'sing-up.php \'">Nouveau Utilisateur ? </button>&nbsp&nbsp&nbsp&nbsp';
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