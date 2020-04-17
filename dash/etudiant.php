<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Etudiants</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">


 <?php
 /*Ajouter le Dashboard*/
include("dashboard.php");
/*Ajouter la connexion a lbase de donnes*/
include("traitement/function.php");

 ?>
<!--*************************************************************************************-->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Etudiants</h6>
<?php
      if (isset($_GET['etat'])) {
        if($_GET['etat']=="true"){
          echo '
            <div class="alert alert-success"  style="margin-left: 20px; margin-right: 20px;">
              <i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>Etudiant est <strong>Sipprimer</strong> !
            </div>
            <script>
               setTimeout(function(){
                  window.location.href = \'etudiant.php\';
               }, 1000);
            </script>
            ';


          }else{
            echo '<div class="alert alert-danger" style="margin-left: 20px; margin-right: 20px;">
                      <i class="fas fa-times"></i> <strong>Error !<strong> l\'hors de l\'opération ! .
                  </div>
                  <script>
                     setTimeout(function(){
                        window.location.href = \'etudiant.php\';
                     }, 1000);
                  </script>
                  ';

          }
      }
?>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Mot de passe</th>
                      <th>Date de naissance</th>   
                      <th>Filiere</th>
                      <th>Telephone</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Mot de passe</th>
                      <th>Date de naissance</th>   
                      <th>Filiere</th>
                      <th>Telephone</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </tfoot>
                    <?php
          $sql = "SELECT * FROM `user` where type_user='etudiant' ORDER BY id_user";
          $value = array();

          $result = PDO($sql,$value);

          if($result->rowCount()!=0)  {
            while($row = $result->fetch())
            {

              echo '<td>'.$row['id_user'].'</td><td>'.$row['nom_user'].'</td><td>'.$row['prenom_user'].'</td><td>'.$row['mdps_user'];
              echo '<td>'.$row['date_naiss_user'].'</td><td>'.$row['filiere_user'].'</td><td>'.$row['num_tele_user'].'</td><td>'.$row['email_user'].'</td><td>'.$row['adresse_user'].'</td>';
              echo '<td><button type="button" class="btn btn-warning" onclick=" window.location.href = \'etudtrait.php?id='.$row['id_user'].'\';">Modifier</button></td>';
              echo '<td><button type="button" class="btn btn-danger" onclick=" window.location.href = \'supprimer.php?id='.$row['id_user'].'\';">Supprimer</button></td></tr>';

              
            }
           // echo "</tr>";
          }

                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
