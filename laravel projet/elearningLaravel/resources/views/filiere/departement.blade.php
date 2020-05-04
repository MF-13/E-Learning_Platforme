@extends('layouts.dashboard')

@section('title')
  <p>departement</p>
@endsection

{{-- <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}


@section('content')

  

        <!-- Begin Page Content -->
        <div class="container-fluid">
        

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Departement</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>departement</th>
                      <th>Modifier la Photo</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>departement</th>
                      <th>Modifier la Photo</th>
                    </tr>
                  </tfoot>
             <tbody>
            <tr>
                <td>departement genie informatique</td>
                 <td><button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Modifier la photo de profile</button></td>
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
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                          <form action="traitement/modifier_photo.php" method="POST" enctype = "multipart/form-data">
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">nom de la filiere</label>
                                <input name = "dept" type="text" class="form-control" id="recipient-name">
                                <label for="recipient-name" class="col-form-label">changer la photo</label>
                                <input name = "userfile" type="file" class="form-control" id="recipient-name">
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
