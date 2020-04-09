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
    <title>Boit Messages</title>
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
        <p><b><i class="fas fa-home"></i>&nbspAcceuil / Profile / Message</b></p>
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
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                    <i class="fas fa-envelope-open"></i>    Boite Message
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-body textleft">
                          <h5 class="card-title">L'expéditeur : Admin nom</h5>
                          <h6 class="card-subtitle mb-2 text-muted">email dyalo</h6>
                          <p class="card-text">Message context  blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla.</p>
                          <button type="button" class="btn btn-warning float-right"><i class="fas fa-reply"></i> Répondre</button>
                          <p class="text-muted">13/04/2020 - 12:00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body textleft">
                          <h5 class="card-title">L'expéditeur : Admin nom</h5>
                          <h6 class="card-subtitle mb-2 text-muted">email dyalo</h6>
                          <p class="card-text">Message context  blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla.</p>
                          <button type="button" class="btn btn-warning float-right"><i class="fas fa-reply"></i> Répondre</button>
                          <p class="text-muted">13/04/2020 - 12:00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body textleft">
                          <h5 class="card-title">L'expéditeur : Admin nom</h5>
                          <h6 class="card-subtitle mb-2 text-muted">email dyalo</h6>
                          <p class="card-text">Message context  blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla.</p>
                          <button type="button" class="btn btn-warning float-right"><i class="fas fa-reply"></i> Répondre</button>
                          <p class="text-muted">13/04/2020 - 12:00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body textleft">
                          <h5 class="card-title">L'expéditeur : Admin nom</h5>
                          <h6 class="card-subtitle mb-2 text-muted">email dyalo</h6>
                          <p class="card-text">Message context  blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla.</p>
                          <button type="button" class="btn btn-warning float-right"><i class="fas fa-reply"></i> Répondre</button>
                          <p class="text-muted">13/04/2020 - 12:00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body textleft">
                          <h5 class="card-title">L'expéditeur : Admin nom</h5>
                          <h6 class="card-subtitle mb-2 text-muted">email dyalo</h6>
                          <p class="card-text">Message context  blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla.</p>
                          <button type="button" class="btn btn-warning float-right"><i class="fas fa-reply"></i> Répondre</button>
                          <p class="text-muted">13/04/2020 - 12:00</p>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body textleft">
                          <h5 class="card-title">L'expéditeur : Admin nom</h5>
                          <h6 class="card-subtitle mb-2 text-muted">email dyalo</h6>
                          <p class="card-text">Message context  blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla blablablabla.</p>
                          <button type="button" class="btn btn-warning float-right"><i class="fas fa-reply"></i> Répondre</button>
                          <p class="text-muted">13/04/2020 - 12:00</p>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <button type="button" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-trash-alt"></i> Supprimer les messages</button>
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