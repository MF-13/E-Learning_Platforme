@extends('layouts.dashboard')

@section('title')
  <p>Filiere</p>
@endsection

<!-- Custom fonts for this template
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  Custom styles for this template -->
  <!-- <link href="css/sb-admin-2.min.css" rel="stylesheet">

   Custom styles for this page -->
  <!-- <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> -->


@section('content')

  

        <!-- Begin Page Content -->
        <div class="container-fluid">
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Filiere</h6>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Filiere ID</th>
                      <th>Filiere</th>
                      <th>description</th>
                      <th>departement</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Filiere ID</th>
                      <th>Filiere</th>
                      <th>description</th>
                      <th>departement</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </tfoot>
             <tbody>
                    <tr>
                      <td>gi</td>
                      <td>genie informatique</td>
                      <td>une filiere genie informatique</td>
                      <td>genie informatique</td>
                      <td><button type="button" class="btn btn-warning" onclick=" window.location.href = \'filieretrait.php?id='.$row['filiere_id'].'\';">Modifier</button></td>
                      <td><button type="button" class="btn btn-danger" onclick=" window.location.href = \'supprimer.php?id='.$row['filiere_id'].'\';">Supprimer</button></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

@endsection

@section('script')

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

  
@endsection
