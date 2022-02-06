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

    <!-- <link rel="stylesheet" href="static/css/profile.css"> -->

    <!-- <link rel="stylesheet" href="static/css/index.css"> -->

    <link rel="stylesheet" href="static/css/addcours.css">

    <title>Ajouter un cour</title>

  </head>

  <body>

    <!-- Nav BAR -->

    <?php 

    include("traitement/navbar.php");

    include("traitement/function.php");



    capterConnexion($_SESSION['id_user']);

    $typeresult = TypeUser($_SESSION['type']);



    ?>

    <!-- End NAV BAR -->

    

    <?php 

    /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/

    if ($typeresult==1) {

      header("location: ../dash/index.php");

    }

    



    if (isset($_GET['etat'])) {

      if ($_GET['etat']=="true"){

        echo '<div class="alert alert-success"  style="margin-left: 20px; margin-right: 20px;">

              <i class="far fa-check-square"></i> L\'opération s\'effectue avec Success ,Cour Ajouter !

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'addcours-1.php\';

               }, 2000);

            </script>';

      }
      if($_GET['etat']=="false"){

         echo '

          <div class="alert alert-danger"  style="margin-left: 20px; margin-right: 20px;">

              <i class="far fa-check-square"></i> L\'opération n\'a  pas ete effectue!

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'addcours-1.php\';

               }, 2000);

            </script>

         ';

      }

      if($_GET['etat']=="nullfich"){

         echo '

          <div class="alert alert-danger"  style="margin-left: 20px; margin-right: 20px;">

              <i class="far fa-check-square"></i> aucun fichier selectioneer ! 

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'addcours-1.php\';

               }, 2000);

            </script>

         ';

      }

      if($_GET['etat']=="form"){

         echo '

          <div class="alert alert-danger"  style="margin-left: 20px; margin-right: 20px;">

              <i class="far fa-check-square"></i>Problème de téléchargement : Le fichier n\'est pas en format  autorise ! (txt,pdf,mp3,mp4,html,png,jpg,jpeg)

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'addcours-1.php\';

               }, 2000);

            </script>

         ';

      }


    

if($_GET['etat']=="taille"){

         echo '

          <div class="alert alert-danger"  style="margin-left: 20px; margin-right: 20px;">

              <i class="far fa-check-square"></i> Problème de téléchargement : taille du fichier nulle !

            </div>

            <script>

               setTimeout(function(){

                  window.location.href = \'addcours-1.php\';

               }, 2000);

            </script>

         ';

      }



    }

    

    ?>

    <br>

    <!-- END Path Section -->

    <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                  Ajouter le cours

                </div>

                <div class="card-body">

                    <form  method = "post" action ="traitement/upload.php" enctype = "multipart/form-data">

                        <div class="form-group">

                            <label  for="exampleFormControlInput1">Titre cours</label>

                            <input type="text" name="titre_cour" class="form-control" id="exampleFormControlInput1" placeholder="ex. langage C" required>

                           

                            <label for="exampleFormControlFile1" class="textleft"> Choisir le fichier(<strong>taille max :  500mb</strong>)</label>

                            <input name = "userfile" type="file" class="form-control-file " id="exampleFormControlFile1">

                            <br>

                           

                            <select name="type_cours" class="form-control" id="exampleFormControlSelect1">

                                <option>cour</option>

                                <option>tp</option>

                                <option>td</option>

                                <option>bibliotheque</option>

                            </select>

         <!--specifier le cour dans le quelle on va importer ce fichier-->

                            <label for="exampleFormControlSelect2">Cours</label>

                            <select name="cours" class="form-control" id="exampleFormControlSelect2">

                            <?php

                                $query1 = "SELECT filiere_user from user where id_user=?;";



                                $values1 = array($_SESSION['id_user']);

                                $res1 = PDO($query1,$values1);



                                if($res1->rowCount()!=0){

                                  while ($row = $res1->fetch()) {

                                    $filiere = test_input($row['filiere_user']);

                                  }

                                }



                                $query2 = "SELECT nom from cours where id_filiere=?;";



                                $values2 = array($filiere);

                                $res2 = PDO($query2,$values2);



                                 if($res2->rowCount()!=0){

                                  while ($row = $res2->fetch()) {

                                     echo "<option>".test_input($row['nom'])."</option>"; 

                                     }

                                }

                                      echo "<option>bibliotheque</option>";

                             ?>

                            </select>

                            <label for="exampleFormControlTextarea1">Commentaire</label>

                            <textarea name="commentaire" required="required" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

                            </div>

                            <div class="card-footer text-muted">

                                <div class="textright">

                                   <input type="submit" name="submit" class="btn btn-outline-info btn-sm" value="Ajouter">

                                 </div>

                            </div>

                      </form>

                </div>

                

            </div>

        </div>

    </div>

</div>

<!-- Footer -->

<?php

  include("traitement/footer.php");

  ?> 

<!-- End Footer -->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src="static/js/bootstrap.js"></script>

  </body>

</html>