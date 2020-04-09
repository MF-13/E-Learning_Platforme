<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Tables</title>

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
include("connecteDB.php");
 ?>
<!--*************************************************************************************-->
        <!-- Begin Page Content -->
        <div class="container-fluid">

          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Etudiant</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <style>
                  #datatable {
                  text-align: center;
                  font-size: 17px;
                  font-family: monospace;
                }
                sup{
                   color: red;
                }
                </style>
                <form action="traitement/addetd.php" method="POST" id="formajout">
                <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs est obligatoires</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code Massare</span>
                  </div>
                  <input type="number" name="code_massar" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
                  </div>
                  <input type="text" name="nom" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prenom</span>
                  </div>
                  <input type="text" name="prenom" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
                  </div>
                  <input type="password" name="mdps" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                  </div>
                  <input type="date" name="date_naiss" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <?php
                  $sql = mysqli_query($conn,"SELECT filiere_id FROM filiere;");
                  echo "<div class=\"input-group mb-3\">
                        <div class=\"input-group-prepend\">
                        <label class=\"input-group-text\" for=\"inputGroupSelect01\">Filiére</label>
                        </div>
                  <select class=\"custom-select\" id=\"inputGroupSelect01\" required=\"required\" name=\"filiere\">
                   ";
                  while($row = mysqli_fetch_array($sql))
                    {
                      echo ' 
                      <option>'.$row['filiere_id'].'</option>
                        ';
                    }
                    echo "</select>
                    </div>";
                ?>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
                  </div>
                  <input type="number" name="telephone" placeholder="06********" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Adresse</span>
                  </div>
                  <input type="text" name="adresse" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                  </div>
                  <input type="email" name="email" placeholder="exemple@domain.com" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <input type="submit" name="submit" class="btn btn-danger float-right">
                <!--
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                 
                        <tr>
                            
                        Code Massar <input type="number" name="code_massar" placeholder="code massar" required="required" disabled="disabled"><br><hr><br>
                        </tr>
                        <tr>
                        Nom<sup>*</sup><input type="text" name="nom" placeholder="nom" required="required"><br><hr><br>
                        </tr>
                        <tr>
                         Prenom<sup>*</sup> <input type="text" name="prenom" placeholder="Prenom" required="required"><br><hr><br>
                        </tr>
                        <tr>
                        Mot de Passe<sup>*</sup>  <input type="text" name="mdps" placeholder="mot de passe" required="required"><br><hr><br>
                        </tr>
                        <tr>
                        Date de naissance<sup>*</sup>  <input type="date" name="date_naiss" placeholder="date de naissance" required="required"><br><hr><br>
                        </tr>
                        <tr>
                          
                          <?php
                              

                                     /* $sql = mysqli_query($conn,"SELECT filiere_id FROM filiere;");
                                      echo "Filiere<sup>*</sup> : <select required=\"required\" name=\"filiere\">";
                                    while($row = mysqli_fetch_array($sql))
                                    {
                                                  echo '
                                                     
                                                          <option>'.$row['filiere_id'].'</option>
                                                          
                                                  ';
                                          
                                         }
                                              echo "</select>";*/
                          ?><br><hr><br>
                        </tr>
                        <tr>
                         Telephone<sup>*</sup> <input type="number" name="telephone" placeholder="telephone" required="required"><br><hr><br>
                        </tr>
                        <tr>
                         Adresse<sup>*</sup> <input type="text" name="adresse" placeholder="Adresse" required="required"><br><hr><br>
                        </tr>
                        <tr>
                         Email<sup>*</sup> <input type="email" name="email" placeholder="Email" required="required"><br><hr><br>
                        </tr>
                        <tr>
                         <input type="submit" name="submit" class="btn btn-danger"><br><hr>
                         <p><sup>*</sup> : Champs obligatoires</p>
                        </tr>
                    </table>-->
                  </form>
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
            <span>Copyright &copy; EST-LEARNING 2019</span>
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