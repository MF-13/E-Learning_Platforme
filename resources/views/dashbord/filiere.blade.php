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
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder"></i> Filiere</h6>
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
               
               {{-- erreur  --}}
               @foreach ($fields as $field)
               {{-- @php
                 dd($field->filiere_id);  
               @endphp --}}
                    <tr>
                      <td>{{$field->filiere_id}}</td>
                      <td>{{$field->filiere}}</td>
                      <td>{{$field->filiere_description}}</td>
                      <td>{{$field->departement}}</td>
                      {{-- Need Traitement --}}
                      <td><a href="{{ route('Field.edit' , ['Field' => $field->filiere_id] ) }}" class="btn btn-warning" >Modifier</a></td>
                      {{-- Supprimer button --}}
                      <td>
                        <form action="{{ route('Field.destroy', ['Field' => $field->filiere_id ]) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" name="submit" class="btn btn-danger" style="display: inline;">Supprimer</button>
                        </form>
                      </td>
                      {{-- END Supprimer button --}}
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
