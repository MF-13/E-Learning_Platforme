@extends('dashbord.dashboard')

@section('title')
  departement
@endsection

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
            @foreach ($departements as $departement)
                <tr>
                <td>{{$departement}}</td>
                {{-- traitement de Modification de photo --}}
                  <td><button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap">Modifier la photo de profile</button></td>
                </tr>
            @endforeach
                  
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
