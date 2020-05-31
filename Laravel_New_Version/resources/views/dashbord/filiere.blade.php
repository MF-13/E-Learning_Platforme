@extends('dashbord.dashboard')

@section('title')
  Filiere
@endsection

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
               @foreach ($fields as $field)
                   
               
                    <tr>
                      <td>{{$field->filiere_id}}</td>
                      <td>{{$field->filiere}}</td>
                      <td>{{$field->filiere_description}}</td>
                      <td>{{$field->departement}}</td>
                      <td><button type="button" class="btn btn-warning" onclick=" window.location.href = \'filieretrait.php?id='.$row['filiere_id'].'\';">Modifier</button></td>
                      <td><button type="button" class="btn btn-danger" onclick=" window.location.href = \'supprimer.php?id='.$row['filiere_id'].'\';">Supprimer</button></td>
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

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

@endsection
