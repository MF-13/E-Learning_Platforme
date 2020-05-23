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

    <link rel="stylesheet" href="static/css/bootstrap.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="static/css/Style_NF.css">

    <link rel="stylesheet" href="static/css/index.css">



    <title>EST - Learning</title>

</head>

<body>

  <!--Begin of NavBar-->

 <?php

 include("traitement/navbar.php");

 ?>

 <?php

      if (isset($_GET['etat'])) {

        if($_GET['etat']=="true"){

          echo '

            <div class="alert alert-success">

              <i class="far fa-check-square"></i> Success! attendez la confirmation de l\'administrateure 

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'index.php\';

               }, 1000);

            </script>

            ';





          }else{

            echo '<div class="alert alert-danger">

                      <i class="fas fa-times"></i> Erreur !l\'hors de l\'opération ! .

                  </div>

                  <script>

                     setTimeout(function(){

                        window.location.href = \'index.php\';

                     }, 1000);

                  </script>

                  ';



          }

      }

?>

 

  <!--END Nav bar-->

  <!-- Wall -->

  <article id="myinfo">

   <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">

      <div class="carousel-inner">

      <?php

      /*cette partie sert pour qfficher tous les photos qui sont dans le dossier /img/wall/ pour eviter la repitition du code n fois */



       $dir = opendir("static/img/index/wall/");

       $i=1;

       while ($file = readdir($dir)){

           if ($file != "." && $file != ".."){

                if($i==1){

                  echo '<div class="carousel-item active">

                  <img src="static/img/index/wall/'.$file.'" class="d-block w-100 mysize" alt="...">

                      <div class="carousel-caption d-none d-md-block">

                        <h4>Palataforme E Learning</h4>

                        <p>L\'université Moulay Ismail lance sa plateforme d\'enseignement à distance . </p>

                      </div>

                 </div>';

                }else{

                echo '<div class="carousel-item">

                        <img src="static/img/index/wall/'.$file.'" class="d-block w-100 mysize" alt="...">

                      </div>';

                }

                $i++;

            }

       }



      ?>

      <?php

      /*dook l3ibat dial tsawer nit li kaybiynohom */

      $j=1;

      echo '<ol class="carousel-indicators">';

      while($j<$i){

        if ($j==1) {

          echo '<li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>';

        }

        else {

          echo '<li data-target="#carouselExampleCaptions" data-slide-to="'.$j.'" class="active"></li>';

        }

        $j++;

      }

      echo '</ol>';

      ?>

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

          <div class="col-8 pstyle paddingcara">Accés illimité</div>

        </div>

      </div>

      <div class="col-lg-4 col-sm-12 col-md-6">

        <div class="row rowmarging">

          <div class="col-4">

          <i class="far fa-file-pdf fa-4x"></i>

          </div>

          <div class="col-8 pstyle paddingcara">Nombreux fichiers</div>

        </div>

      </div>

      <div class="col-lg-4 col-sm-12 col-md-6">

        <div class="row rowmarging">

          <div class="col-4">

            <i class="fab fa-creative-commons-nc fa-4x"></i>

          </div>

          <div class="col-8 pstyle paddingcara">Contenu gratuit</div>

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

          <img src="static/img/index/logo-est-meknès.png" alt="EST MEKNES" width="170" height="170">

        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">

          <p class="font-weight-bold relationpara">Cette plateforme a été créé en partenariat avec l'Université de Moulay Ismail - est Méknes pour fournir des ressources et des informations importantes et utiles aux personnes inscrites à l'université. </p>

        </div>

        <div class="col-lg-3 col-md-3 col-sm-12 imgcentrer">

          <img src="static/img/index/logo.png" alt="E Learning logo" width="120" height="140">

        </div>

      </div>

    </div>

  </section>

  <!-- End Relation -->

  <!-- Département Section -->

  <section class="Departement">

    <div>

      <h4 class="myText white">ESTM Départements</h4>

      <br>

      <br>

    </div>

    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-6 col-sm-12">

          <div class="card">

            <img class="card-img-top" src="static/img/index/filiére/techniques de commercialisation et de communication.png" alt="TCC" height="70">

            <div class="card-body">

              <h5 class="card-title">Techniques de Commercialisation et de Communication</h5>

              <p class="card-text">Filiére :<br>

                <ul>

                  <li>Techniques de Commercialisation et de Communication</li>

                  <li>Commercialisation des Produits Agroalimentaires</li>

                </ul> 

              </p>

              <p class="card-text"><button type="button" class="btn btn-link"><a href="http://www.est-umi.ac.ma/departement_tcc.php" target="blank">Plus...</a></button></p>

            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">

          <div class="card">

            <img class="card-img-top" src="static/img/index/filiére/genie electrique.png" alt="GE" height="70">

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

              <p class="card-text"><button type="button" class="btn btn-link"><a href="http://www.est-umi.ac.ma/departement_genie_electrique.php" target="blank">Plus...</a></button></p>

            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">

          <div class="card">

            <img class="card-img-top" src="static/img/index/filiére/genie informatique.png" alt="GI" height="70">

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

              <p class="card-text"><button type="button" class="btn btn-link"><a href="http://www.est-umi.ac.ma/departement_informatique.php" target="blank">Plus...</a></button></p>

            </div>

          </div>

        </div>

        <div class="col-lg-3 col-md-6 col-sm-12">

          <div class="card">

            <img class="card-img-top" src="static/img/index/filiére/techniques de management.png" alt="TM" height="70">

            <div class="card-body cardbody">

              <h5 class="card-title">Technique de managment</h5>

              <p class="card-text">Filiére :<br>

                <ul>

                  <li>Techniques de Management</li>

                  <li>Finance, Banque et Assurance</li>

                  <li>Gestion des ressources humaines</li>

                </ul> 

              </p>

              <p class="card-text"><button type="button" class="btn btn-link"><a href="http://www.est-umi.ac.ma/departement_technique_de_management.php" target="blank">Plus...</a></button></p>

            </div>

          </div>

        </div>

      </div>

    </div>

  </section>

  <!-- End Département section -->

   <!-- Comtact section -->

   <section class="contact">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-6 ">

          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13253.011846027564!2d-5.5799945!3d33.8573711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x227685e2846b5a39!2sEcole%20Sup%C3%A9rieure%20de%20Technologie!5e0!3m2!1sfr!2sma!4v1581183400398!5m2!1sfr!2sma" width="330" height="250" frameborder="0" allowfullscreen=""></iframe>

        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 ">

          <ul class="mylist myBtoo">

            <li>Address:  Km 5, Rue d'Agouray، N6, Meknes 50040</li>

            <li>Tel : 05 35 46 70 85</li>

            <li>Tel : 05 35 46 70 86</li>

            <li>Email : estm@est-umi.ac.ma</li>

            <br>

            <li>

              <a href="https://www.facebook.com/ESTMEKNES2017/?fref=ts"  target="_blank"><i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>

              <a href="https://twitter.com/umi_meknes?lang=fr"  target="_blank"><i class="fab fa-twitter-square fa-3x" aria-hidden="true"></i></a>

            </li>

            <br>

          </ul>

        </div>

      </div>

    </div>

  </section>

<!-- End Contact section -->

  <!--Fotter,script and Contact form-->



  <?php

  include("traitement/footer.php");

  ?>                                                                                      

  </body>

</html>