
@extends('dashbord.dashboard')

@section('title')
  Etudiant
@endsection

@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Etudiants</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Date de naissance</th>   
                      <th>Filiere</th>
                      <th>Telephone</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Date de naissance</th>   
                      <th>Filiere</th>
                      <th>Telephone</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>Modifier</th>
                      <th>Suprimmer</th>
                    </tr>
                  </tfoot>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->nom_user}}</td>
                      <td>{{$user->prenom_user}}</td>
                      <td>{{$user->date_naiss_user}}</td>
                      <td>{{$user->filiere_user}}</td>
                      <td>{{$user->num_tele_user}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->adresse_user}}</td>
                      {{-- Modifier Button --}}
                      <td><a href="{{ route('dashbord.edit' , ['dashbord' => $user->id] ) }}" class="btn btn-warning" >Modifier</a></td>
                      {{-- Supprimer button --}}
                      <td>
                        <form action="{{ route('dashbord.destroy', ['dashbord' => $user->id ]) }}" method="POST" style="display: inline;">
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