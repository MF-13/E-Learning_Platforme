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
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <body id="page-top">

<?php
 /*Ajouter le Dashboard*/
include("../dashboard.php");
/*Ajouter la connexion a lbase de donnes*/
include("function.php");

if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['mdps']) AND isset($_POST['date_naiss'])
	 AND isset($_POST['filiere']) AND isset($_POST['telephone']) AND isset($_POST['adresse']) AND isset($_POST['email']))
	  {

	$nom = $_POST['nom'];
	$prenom = $_POST['prenom'];
	$date_naiss = $_POST['date_naiss'];
	$filiere = $_POST['filiere'];
	$telephone = $_POST['telephone'];
	$adresse = $_POST['adresse'];
	$email = $_POST['email'];
	$mdps = $_POST['mdps'];
	
	$url = (string)$_SERVER['HTTP_REFERER'];
	$tab = explode("/", $url);
	//print_r($tab);
    if($tab[count($tab)-1]=="etudtrait.php"){
		$type='etudiant';
    }else{
    		$type='professeur';
    }
	
	

	$query = "INSERT into user(nom_user,prenom_user,date_naiss_user,num_tele_user,filiere_user,email_user,mdps_user,adresse_user,type_user) 
				VALUES(?,?,?,?,?,?,?,?,?);";

	$value = array($nom,$prenom,$date_naiss,$telephone,$filiere,$email,$mdps,$adresse,$type);
	$result = PDO($query,$value);

	if ($result) {
		if($tab[count($tab)-1]=="etudtrait.php"){
			echo '		
			<div class="alert alert-success" <div style="margin-left: 20px; margin-right: 20px;">
			<i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>    L\'Etudiant est <strong>Ajouter</strong> !
			</div>
	  <script>
         setTimeout(function(){
            window.location.href = \'../etudtrait.php\';
         }, 2000);
      </script>';
		}else{
		echo '		
		<div class="alert alert-success" <div style="margin-left: 20px; margin-right: 20px;">
		<i class="far fa-check-square"></i> L\'opération s\'effectue avec <strong>Success!</strong>    Le Professeur est <strong>Ajouter</strong> !
		</div>
          	<script>
         setTimeout(function(){
            window.location.href = \'../proftrait.php\';
         }, 2000);
      </script>';
	}}
	else{
		echo '<div class="alert alert-danger" <div style="margin-left: 20px; margin-right: 20px;">
		<i class="fas fa-times"></i> <strong>Error !<strong> l\'hors de l\'opération ! .
		</div>';
	}



}
else
{
echo '<div class="alert alert-danger" <div style="margin-left: 20px; margin-right: 20px;">
<i class="fas fa-times"></i> <strong>Error !<strong> dans les information !  .
</div>';
	
	
}
?>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; E-learning 2019-<?php echo Date('Y');?></span>
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
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>
