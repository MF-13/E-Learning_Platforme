@extends('layouts.dashboard')

@section('title')
  <p>Demande recu</p>
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
                      <th>Mot de passe</th>
                      <th>Date de naissance</th>   
                      <th>Filiere</th>
                      <th>Telephone</th>
                      <th>Adresse</th>
                      <th>Email</th>
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
                      <th>Mot de passe</th>
                      <th>Date de naissance</th>   
                      <th>Filiere</th>
                      <th>Telephone</th>
                      <th>Adresse</th>
                      <th>Email</th>
                      <th>Type user</th>
                      <th>Accepter</th>
                      <th>Refuser</th>
                    </tr>
                  </tfoot>
                    <tr>
                      <td>45</td>
                      <td>elkhebaz</td>
                      <td>mohammed</td>
                      <td>5478</td>
                      <td>2020-07-07</td>
                      <td>gi</td>
                      <td>054789632</td>
                      <td>meknes</td>
                      <td>khebbaz@gmail.com</td>
                      <td>admin</td>
                    <td><button type="button" class="btn btn-success" onclick=" window.location.href = \'accepter.php?id='.$row['id'].'\';">Accepter</button></td>
                    <td><button type="button" class="btn btn-danger" onclick=" window.location.href = \'refuser.php?id='.$row['id'].'\';">Refuser</button></td>
                  </tr>

              
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