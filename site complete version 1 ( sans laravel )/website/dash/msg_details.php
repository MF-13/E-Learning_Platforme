<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Message Détails</title>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <link href="css/style.css" rel="stylesheet">

</head>

<body id="page-top">

  <body id="page-top">

 <?php
 /*Ajouter le Dashboard */
include("dashboard.php");
include("traitement/function.php");


/*Pour obtenir l'id de lurl*/
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else{
  echo "no id";
  header("location: message.php");
}

 ?>
 
 <?php
          $query = "UPDATE message set etat='1' where id_msg=?";
          $value = array($id);
          PDO($query,$value);
         

          $sql = "SELECT * FROM `message` WHERE id_msg=?";
          $value2 = array($id);
          $result = PDO($sql,$value2);

          if($result->rowCount()!=0)  {
            while($row = $result->fetch())
            {

             

           
           $emetteur_id = $row['emetteur_id'];
           $emetteur_nom = $row['emetteur_nom'];
          $emetteur_email =  $row['emetteur_email'];
          $emetteur_telephone = $row['emetteur_telephone'];
          $emetteur_type =  $row['emetteur_type'];
          $message =  $row['message'];
          $date_env =  $row['date_env'];

           
           
           
          ;

          }
        }

?>
<!--*************************************************************************************-->
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-envelope-square"></i> Message details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <!-- <style>
                  #datatable {
                  text-align: center;
                  font-size: 17px;
                  font-family: monospace;
                }
                sup{
                   color: red;
                }
                </style> -->
                
             <form action="#" method="POST" id="formajout">
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message ID</span>
                  </div>
                  <input type="number" name="message_id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$id.'"'; }?> disabled>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code emetteur</span>
                  </div>
                  <input type="text" name="id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$emetteur_id.'"'; }?> >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
                  </div>
                  <input type="text" name="nom" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$emetteur_nom.'"'; }?> >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                  </div>
                  <input type="text" name="email" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$emetteur_email.'"'; }?> >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">telephone</span>
                  </div>
                  <input type="text" name="telephone" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$emetteur_telephone.'"'; }?>>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">type</span>
                  </div>
                  <input type="text" name="type" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$emetteur_type.'"'; }?>>
                </div>
                  
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">date envoie</span>
                        </div>
                        <input type="text" name="date_env" placeholder="ex : GI" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" <?php if(isset($_GET['id'])){ echo 'value="'.$date_env.'"'; }?> >
                  
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message</span>
                  </div>
                  <textarea name="message" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled><?php if(isset($_GET['id'])){ echo $message; }?></textarea>
                  
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Votre reponse</span>
                  </div>
                  <textarea name="reply" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Votre reponse..."></textarea>
                  
                </div>
                <?php echo '<button class="btn btn-danger" onclick="window.location.href = \'msg_drop.php?id='.$id.'\';">supprimer</button>';?>
                <input type="submit" name="submit" class="btn btn-info float-right">
                  </form>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
        <!--traintement d envoie de reponse : -->
        <?php
        if (filter_has_var(INPUT_POST,"submit")) {

          $message = $_POST['reply'];
          $code_massar="1";
          $nom="admin";
          $email="ayman.admin@gmail.com";
          $telephone="0548615";
          $type="admin";
          $recepteur_id = $_POST['id'];
          $recepteur_email =  $_POST['email'];
          $recepteur_type = $_POST['type']; 

          $query2 = "INSERT INTO message(emetteur_id,emetteur_nom,emetteur_email,emetteur_telephone,emetteur_type,message,
            recepteur_id,recepteur_email,recepteur_type) values(?,?,?,?,?,?,?,?,?);";
            $values2 = array($code_massar,$nom,$email,$telephone,$type,$message,$recepteur_id,$recepteur_email,$recepteur_type);
            PDO($query2,$values2);

            if ($recepteur_type=="visiteur") {
              //transfer protocol by mail
              $to = $recepteur_email;
              $subject = "EST-ELEARNING -- NoReply";

              $message="<html><head></head><body>".$message."</body></html>";

              $headers  = 'EST-ELEARNING';
              //set fontion de  mail va etre activer une fois que le site et heberger , on utilise un SMTP
              //mail($to, $subject, $message, $headers);
            }
        }
   ?>
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
