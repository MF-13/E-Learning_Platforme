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
                      <th>Modifier</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>departement</th>
                      <th>Modifier</th>
                    </tr>
                  </tfoot>
             <tbody>
            @foreach ($departements as $departement)
                    <tr>
                        <td>{{strtoupper($departement->departement)}}</td>
                        <td><a href="{{ route('cour.edit' , ['cour' => $departement->departement] ) }}" class="btn btn-warning" >Modifier</a></td>
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
