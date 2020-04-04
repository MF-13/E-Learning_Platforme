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
    <title>Profile</title>
</head>
<body>
    <!-- Nav BAR -->
   <?php
   include("traitement/navbar.php");
   include("traitement/function.php");
    $conn = connectedb();
   
    capterConnexion($_SESSION['code_massar']);
    $typeresult = TypeUser($_SESSION['type']);
    ?>
    <!-- End NAV BAR -->
    <!-- Path Section -->
    <section class="sectionpath">
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Profile </b></p>
    </section>
    <!-- Path Section -->
    <?php

        if($typeresult == -1){
          $query = "SELECT * from etudiant where code_massar=?;";
        }elseif($typeresult == 0){
          $query = "SELECT * from professeur where code_massar_prof=?;";
        }elseif ($typeresult == 1) {
          header("location: ../dash/index.php");
        }
        $values = array($_SESSION['code_massar']);
        $res=PDO($query,$values);

         if($res->rowCount()!=0){
              while ($row = $res->fetch()) {
                $nom = $row['nom'];
                $prenom =  $row['prenom'];
                $date_naiss =   $row['date_naiss'];
                $filiere = $row['filiere'];
                $num_tele =  $row['num_tele'];
                $adresse =  $row['adresse'];
                $email =  $row['email'];
                $mdps =  $row['mdps'];
                $type =  $row['type'];
              }
         }
    ?>
    <br>
    <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                  Bonjour
                </div>
                <div class="card-body">
                   <!-- <img src="static/img/Login/male.svg">-->
                    <?php echo '<img src="profileimage/'.$type.'/'.$_SESSION['code_massar'].'">';?>
                    <br>
                    <br>
                  <p class="card-text"><b><?php echo $nom." ".$prenom ; ?></b></p>
                  <p class="card-text"><b><?php  echo $email."";?></b></p>
                  <p class="textleft">Links : </p>
                  <a href="#" class="Facebook"><i class="fab fa-github-square fa-2x"></i></a>
                  <a href="#" class="Twitter"><i class="fab fa-twitter-square fa-2x"></i></a>
                  <a href="#" class="Linkdin"><i class="fab fa-linkedin fa-2x"></i></a>
                </div>
                <div class="card-footer text-muted">
                  <?php  
                    /*verifier c'est c'est un etudiant ou professeur pour ajouter le button d'aller au page d ajoute de cours*/
                    if($typeresult== 0){
                      echo'<a href="addcours-1.php" class="btn btn-info">Ajouter cours</a>';
                    }

                  ?>
                  <a href="cours-espace.php" class="btn btn-info">cours disponible</a>
                  <a href="traitement/deconnexion.php" class="btn btn-danger">Déconnexion</a>
                </div>
              </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                  Information
                </div>
                <div class="card-body">
                    <p class="text"><b>Code Massar : </b><?php  echo $_SESSION['code_massar'];?></p>
                    <p class="text"><b>Nom : </b><?php  echo $nom;?></p>
                    <p class="text"><b>Prénom : </b> <?php  echo $prenom;?></p>
                    <p class="text"><b>Date Naissance : </b><?php  echo $date_naiss;?></p>
                    <p class="text"><b>Filiére : </b><?php  echo $filiere;?></p>
                    <p class="text"><b>Adresse : </b><?php  echo $adresse;?></p>
                    <p class="text"><b>Telephone : </b><?php  echo $num_tele;?></p>
                    <p class="text"><b>Type : </b><?php echo $type ;?></p>
                </div>
                <div class="card-footer text-muted">
                    <div class="textright">
                    <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modifier</button>
                    </div> 
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                           <?php 
                                if($typeresult== -1){
                                  echo '<form action="traitement/modifier_etd.php?id='.$_SESSION['code_massar'].'"
                                         method="POST">' ; 
                                          }elseif($typeresult==0){
                                  echo '<form action="traitement/modifier_prof.php?id='.$_SESSION['code_massar'].'"
                                         method="POST">' ;
                                          }

                            ?>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nouveau mot de pass</label>
                                <input type="password" class="form-control" id="recipient-name" name="pass1"
                                >
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Confirme mot de pass</label>
                                <input type="password" class="form-control" id="recipient-name" name="pass2">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Nom</label>
                                <input type="text" class="form-control" id="recipient-name" name="nom" 
                                value=<?php echo $nom; ?>>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">prenom</label>
                                <input type="text" class="form-control" id="recipient-name" name="prenom"
                                value=<?php echo $prenom; ?>>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">date Naissance</label>
                                <input type="date" class="form-control" id="recipient-name" name="date_naiss"
                                value=<?php echo $date_naiss; ?>>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Email</label>
                                <input type="text" class="form-control" id="recipient-name" name="email"
                                value=<?php echo $email; ?>>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Adresse</label>
                                <input type="text" class="form-control" id="recipient-name" name="adresse"
                                value=<?php echo $adresse; ?>>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Telephone</label>
                                <input type="number" class="form-control" id="recipient-name" name="telephone" 
                                value=<?php echo $num_tele; ?>>
                            </div>
                            <div class="modal-footer">
                            <input type="submit" class="btn btn-primary btn-sm" value="Enregistrer">
                             </div>
                           </form>
                        </div>
                        
                        </div>
                    </div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    
<?php
include("traitement/footer.php");
?>  
<!-- End Footer -->
    <!-- End Posts Section -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="static/js/bootstrap.js"></script>
</body>
</html>