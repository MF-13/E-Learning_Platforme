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
    <link rel="stylesheet" href="static/css/Profile.css">
    <link rel="stylesheet" href="static/css/Index.css">
    <link rel="stylesheet" href="static/css/addcours.css">
    <title>Ajouter un cour</title>
  </head>
  <body>
    <!-- Nav BAR -->
    <?php 
    include("traitement/navbar.php");
    include("traitement/function.php");
    capterConnexion($_SESSION['code_massar']);
    $typeresult = TypeUser($_SESSION['type']);
    capterConnexion($_SESSION['code_massar']);
    ?>
    <!-- End NAV BAR -->
    <!-- Path Section -->
    <section class="sectionpath">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Profile / Ajouter cours </b></p>
    </section>
    <?php 
    /*cette partie de code sert a capte les non-user pour ne pas acceder a la page des cours*/
    if ($typeresult==1) {
      header("location: ../dash/index.php");
    }
    if ($typeresult!=0 ){
      echo "
      <script>
     if(window.confirm(\"vous ne pouvez pas accedez a cette page \")){
        window.location.href = 'index.php';
      }else{
        window.location.href = 'index.php';
      }
      </script>";
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
                            <label required="required" for="exampleFormControlInput1">Nom de cours</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ex. langage C">
                            <label for="exampleFormControlFile1" class="textleft"> Choisir le fichier(au format <strong>texte</strong> ou <strong>HTML</strong> )</label>
                            <input name = "userfile" type="file" class="form-control-file " id="exampleFormControlFile1">
                            <br>
                            <select name="type_cours" class="form-control" id="exampleFormControlSelect1">
                                <option>Cours</option>
                                <option>TP</option>
                            </select>
         <!--specifier le cour dans le quelle on va importer ce fichier-->
                            <label for="exampleFormControlSelect2">Cours</label>
                            <select name="cours" class="form-control" id="exampleFormControlSelect2">
                            <?php
                                $res1 = query("SELECT filiere from professeur where code_massar_prof=".$_SESSION['code_massar'] .";");
                                while($row = mysqli_fetch_assoc($res1)) {
                                $filiere = $row['filiere'];
                                  } 
                                  $res2 = query("SELECT nom from cours where id_filiere=\"".$filiere."\";");
                                  while ($row = mysqli_fetch_assoc($res2)) {
                                    echo "<option>".$row['nom']."</option>";
                                  }
                             ?>
                            </select>
                            <label for="exampleFormControlTextarea1">Commentaire</label>
                            <textarea name="commentaire" required="required" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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