<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="static/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="static/css/Profile.css">
    <link rel="stylesheet" href="static/css/Index.css">
    <link rel="stylesheet" href="static/css/addcours.css">
    <title>Ajoutation de cours</title>
  </head>
  <body>
    <!-- Nav BAR -->
    <?php 
    include("traitement/navbar.php");
    ?>
    <!-- End NAV BAR -->
    <!-- Path Section -->
    <section class="sectionpath">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Profile / Ajouter cours </b></p>
    </section>
    <br>
    <?php 
    /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/
    if (!(isset($_SESSION['code_massar'])) || $_SESSION['type']!="professeur" ){
      echo "
      <script>
     if(window.confirm(\"vous ne pouvez pas accedez a cette page \")){
        window.location.href = '../index.php';
      }else{
        window.location.href = '../index.php';
      }
      </script>";
    }
    ?>
    <!-- END Path Section -->
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                  Welcome
                </div>
                <div class="card-body">
                   <img src="static/img/Login/male.svg">
                    <br>
                    <br>
                  <p class="card-text"><b>EL KHABBAZ</b></p>
                  <p class="card-text"><b>Mohamed</b></p>
                  <p class="textleft">Links : </p>
                  <a href="#" class="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
                  <a href="#" class="Twitter"><i class="fab fa-twitter-square fa-2x"></i></a>
                  <a href="#" class="Linkdin"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
                <div class="card-footer text-muted">
                  <a href="addcours.php" class="btn btn-info">Ajouter cours</a>
                  <a href="cours-espace.php" class="btn btn-info">cours disponible</a>
                  <a href="traitement/deconnexion.php" class="btn btn-danger">Déconnexion</a>
                </div>
              </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                  Ajouter le cours
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nom de cours</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ex. langage C">
                            <label for="exampleFormControlFile1" class="textleft"> (au format <strong>texte</strong> ou <strong>HTML</strong> )</label>
                            <input type="file" class="form-control-file " id="exampleFormControlFile1">
                            <br>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Cours</option>
                                <option>TP</option>
                                <option>TD</option>
                            </select>
         <!--specifier le cour dans le quelle on va importer ce fichier-->

                            <label for="exampleFormControlSelect2">Filiére</label>
                            <select name="cours" multiple class="form-control" id="exampleFormControlSelect2">
                            <?php
                                $query1 = "SELECT filiere from professeur where code_massar_prof=".$_SESSION['code_massar'] .";";
                                $res1 = mysqli_query($conn,$query1);
                                while($row = mysqli_fetch_assoc($res1)) {
                                $filiere = $row['filiere'];
                                  } 

                                  $query2 = "SELECT nom from cours where id_filiere=\"".$filiere."\";";
                                  $res2 = mysqli_query($conn,$query2);
                                  while ($row = mysqli_fetch_assoc($res2)) {
                                    echo "<option>".$row['nom']."</option>";
                                  }
                             ?>
                            </select>
                            <label for="exampleFormControlTextarea1">Commentaire</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                      </form>
                
                </div>
                <div class="card-footer text-muted">
                    <div class="textright">
                        <button type="button" class="btn btn-outline-info btn-sm">Ajouter</button>
                    </div>
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