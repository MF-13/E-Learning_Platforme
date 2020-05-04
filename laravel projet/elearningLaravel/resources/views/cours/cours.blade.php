@extends('layouts.dashboard')

@section('title')
  <p>cours</p>
@endsection
  
@section('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Cours</h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id cour</th>
                      <th>Nom</th>
                      <th>description</th>
                      <th>filiere</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id cour</th>
                      <th>Nom</th>
                      <th>description</th>
                      <th>filiere</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </tfoot>
                    <tr>
                      <td>4</td>
                      <td>Programmation C</td>
                      <td>Un cour des principe du language C</td>
                      <td>GI</td>
                      <td><button type="button" class="btn btn-warning" onclick=" window.location.href = \'courtrait.php?id='.$row['id_cour'].'\';">Modifier</button></td>
                      <td><button type="button" class="btn btn-danger" onclick=" window.location.href = \'supprimer.php?id='.$row['id_cour'].'\';">Supprimer</button></td>
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