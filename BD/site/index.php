<?php
session_start();
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
    <title>E - Learning</title>
</head>
<body>
  <!--Begin of NavBar-->
 <?php
 include("traitement/navbar.php");
 ?>
  <!--END Nav bar-->
  <!-- Wall -->
  <article id="myinfo">
   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="static/img/Index/2.jpg" class="d-block w-100 mysize" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h4>Paltaforme E Learning</h4>
                <p>L'université Moulay Ismail lance sa plateforme d'enseignement à distance . </p>
              </div>
        </div>
        <div class="carousel-item">
          <img src="static/img/Index/1.jpg" class="d-block w-100 mysize" alt="...">
        </div>
        <div class="carousel-item">
          <img src="static/img/Index/3.jpg" class="d-block w-100 mysize" alt="...">
        </div>
      </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </article>
  <!-- End wall -->
  <!-- Carctéristique --> 
  <section class="caracteristique">
  <div class="container ">
    <div class="row">
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="row rowmarging">
          <div class="col-4">
          <i class="fas fa-history fa-4x"></i>
          </div>
          <div class="col-8 pstyle" style="padding-top: 17px;">Accés illimité</div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="row rowmarging">
          <div class="col-4">
          <i class="far fa-file-pdf fa-4x"></i>
          </div>
          <div class="col-8 pstyle" style="padding-top: 17px;">Nombreux fichiers</div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="row rowmarging">
          <div class="col-4">
            <i class="fab fa-creative-commons-nc fa-4x"></i>
          </div>
          <div class="col-8 pstyle" style="padding-top: 17px;">Contenu gratuit</div>
        </div>
      </div>
    </div>
  </div>
 </section>   
  <!-- End Carctéristique -->
  <!-- Relation -->
  <section class="relation">
    <div class="container">
      <div class="row relationrow">
        <div class="col-lg-3 col-md-3 col-sm-12 imgcentrer">
          <img src="static/img/Index/logo-est-meknès.png" alt="EST MEKNES" width="170" height="170">
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
          <p class="font-weight-bold relationpara">Cette plateforme a été créée en partenariat avec l'Université de Moulay Ismail - est Méknes pour fournir des ressources et des informations importantes et utiles aux personnes inscrites à l'université. </p>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-12 imgcentrer">
          <img src="static/img/Index/logo.png" alt="E Learning logo" width="120" height="140">
        </div>
      </div>
    </div>
  </section>
  <!-- End Relation -->
  <!-- Département Section -->
  <section class="Departement">
    <div>
      <h4 class="myText">ESTM Départements</h4>
      <br>
      <br>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <img class="card-img-top" src="static/img/Index/Filiére/communication.png" alt="TCC" height="70">
            <div class="card-body">
              <h5 class="card-title">Techniques de Commercialisation et de Communication</h5>
              <p class="card-text">Filiére :<br>
                <ul>
                  <li>Techniques de Commercialisation et de Communication</li>
                  <li>Commercialisation des Produits Agroalimentaires</li>
                </ul> 
              </p>
              <p class="card-text"><button type="button" class="btn btn-link">Plus...</button></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <img class="card-img-top" src="static/img/Index/Filiére/electrique.png" alt="GE" height="70">
            <div class="card-body">
              <h5 class="card-title">Génie éléctrique</h5>
              <p class="card-text">Filiére :<br>
                <ul>
                  <li>Génie Electrique</li>
                  <li>Génie Thermique et Energetique</li>
                  <li>Génie Industriel et Maintenance</li>
                  <li>Génie Civil</li>
                </ul> 
                <br>
              </p>
              <p class="card-text"><button type="button" class="btn btn-link">Plus...</button></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <img class="card-img-top" src="static/img/Index/Filiére/informatique.png" alt="GI" height="70">
            <div class="card-body">
              <h5 class="card-title">Génie Informatique</h5>
              <p class="card-text">Filiére :<br>
                <ul>
                  <li>Génie Informatique</li>
                  <li>Techniques du Son et de l'Image</li>
                </ul> 
                <br>
                <br>
                <br>
                <br>
              </p>
              <p class="card-text"><button type="button" class="btn btn-link">Plus...</button></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card">
            <img class="card-img-top" src="static/img/Index/Filiére/managment.png" alt="TM" height="70">
            <div class="card-body cardbody">
              <h5 class="card-title">Technique de managment</h5>
              <p class="card-text">Filiére :<br>
                <ul>
                  <li>Techniques de Management</li>
                  <li>Finance, Banque et Assurance</li>
                  <li>Gestion des ressources humaines</li>
                </ul> 
              </p>
              <p class="card-text"><button type="button" class="btn btn-link">Plus...</button></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Département section -->
  <!--Fotter,script and Contact form-->

  <?php
  include("traitement/footer.php");
  ?>                                                                                      
  </body>
</html>