@extends('dashbord.dashboard')

@section('title')
  Demande
@endsection

@section('content')

        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Demande </h1>
          <p class="mb-4">Accepter / refuser les demandes des nouvelles utilisateurs ! </p>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Demandes</h6>
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
                      <th>Telephone</th>
                      <th>Filiere</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>Type user</th>
                      <th>Accepter</th>
                      <th>Refuser</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                      <th>Nom</th>
                      <th>Prenom</th>
                      <th>Date de naissance</th> 
                      <th>Telephone</th>
                      <th>Filiere</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>Type user</th>
                      <th>Accepter</th>
                      <th>Refuser</th>
                    </tr>
                  </tfoot>
                  @foreach ($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                      <td>{{$user->nom_user}}</td>
                      <td>{{$user->prenom_user}}</td>
                      <td>{{$user->date_naiss_user}}</td>
                      <td>{{$user->num_tele_user}}</td>
                      <td>{{$user->filiere_user}}</td>
                      <td>{{$user->email}}</td>
                      <td>{{$user->adresse_user}}</td>
                      <td>{{$user->type_user}}</td>
                    {{-- Need Traitement   --}}
                    <td>
                      <a href="{{ route('dashbord.edit' , ['dashbord' => $user->id] ) }}" class="btn btn-warning" >Modifier</a>
                    </td>

                    <td>
                      <form action="{{ route('dashbord.destroy', ['dashbord' => $user->id ]) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" name="submit" class="btn btn-danger" style="display: inline;">Refuser</button>
                      </form>
                    </td>
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

        <!---end of page content-->
    

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 
@endsection