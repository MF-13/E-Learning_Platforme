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
   
    capterConnexion($_SESSION['id_user']);
    $typeresult = TypeUser($_SESSION['type']);
    ?>
    <!-- End NAV BAR -->
    

    <br>
    <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card text-center">
                <div class="card-header">
                    <i class="fas fa-envelope-open"> Boite Message</i>   
                </div>
                <?php
 
                  $info = array($_SESSION['id_user'],$_SESSION['type']);
                  $stm= dislay_message($info);
                      if(!empty($stm)){
                        
                          if($stm->rowCount()!=0){
                                    while ($row = $stm->fetch()) {
                                      if ($row['etat']==0) {
                                        $etat  = "non lu";
                                      }else{
                                        $etat  = "lu";
                                      }
                                       echo '
                                        <div class="card-body">
                                            <div class="card">
                                                <div class="card-body textleft">
                                                  <h5 class="card-title">L\'expéditeur : '.$row['emetteur_nom'].'</h5>
                                                  <h6 class="card-subtitle mb-2 text-muted">'.$row['emetteur_email'].'</h6><br>
                                                  <p class="card-text">Message : &nbsp&nbsp'.$row['message'].'</p>
                                                  <button type="button" class="btn btn-danger float-right" onclick="window.location.href = \'traitement/dropmsg.php?id='.$row['id_msg'].'\'"><i class="fas fa-trash-alt"></i> Supprimer</button>
                                                  <p class="text-muted">'.$row['date_env'].'</p>
                                                </div>
                                            </div>
                                       </div>

                                       ';                                   
                                        }
                          }

                      }else{

                        echo ' <div class="card-body">
                                <div class="card">
                                   <div class="card-body textleft">
                                      <h5 class="card-title"> Vide</h5>
                                      <p class="card-text">Vous n\'avez aucun message pour le moment !</p>
                              </div>
                          </div>
                      </div>';
                      }


                ?>

                <div class="card-footer text-muted">
                  <?php 
                   echo '
                    <button type="button" class="btn btn-outline-danger btn-sm float-right" 
                    onclick="window.location.href = \'traitement/dropallmsg.php?id='.$_SESSION['id_user'].'\'" ><i class="fas fa-trash-alt"></i> Supprimer les messages</button>
                      ';
                    ?>
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