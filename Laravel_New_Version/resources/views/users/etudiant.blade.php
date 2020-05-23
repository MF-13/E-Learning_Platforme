
@extends('layouts.dashboard')

@section('title')
  <p>Etudiant</p>
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
                      <th>Mot de passe</th>
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
                      <th>Mot de passe</th>
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
                      <td>{{$user->mdps_user}}</td>
                      <td>{{$user->date_naiss_user}}</td>
                      <td>{{$user->filiere_user}}</td>
                      <td>{{$user->num_tele_user}}</td>
                      <td>{{$user->email_user}}</td>
                      <td>{{$user->adresse_user}}</td>
                      {{-- <td>5</td>
                      <td>elbouayadi</td>
                      <td>aiman</td>
                      <td>4444</td>
                      <td>2020-08-08</td>
                      <td>gi</td>
                      <td>0588888</td>
                      <td>aiman@gmail.com</td>
                      <td>rabat</td> --}}
                      <td><button type="button" class="btn btn-warning" onclick=" window.location.href = \'etudtrait.php?id='.$row['id_user'].'\';">Modifier</button></td>
                      <td><button type="button" class="btn btn-danger" onclick=" window.location.href = \'supprimer.php?id='.$row['id_user'].'\';">Supprimer</button></td>
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