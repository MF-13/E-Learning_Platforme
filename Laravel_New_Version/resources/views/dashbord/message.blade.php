@extends('dashbord.dashboard')

@section('title')
  Message
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
                      <th>From</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Message</th>
                      <th>date d'envoie</th>
                      <th>Repondre</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>From</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Message</th>
                      <th>date d'envoie</th>
                      <th>Repondre</th>
                      <th>Supprimer</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($messages as $message)              
                        <tr>
                          <td>{{$message->emetteur_nom}}</td>
                          <td>{{$message->emetteur_email}}</td>
                          <td>{{$message->emetteur_type}}</td>
                          <td>{{$message->message}}</td>
                          <td>{{$message->date_env}}</td>
                          {{-- Need Traitement --}}
                          <td><button class="btn btn-warning" onclick="window.location.href = '{{ '/messages/' . $message->id}}';">Repondre</button></td>
                          <td><button class="btn btn-danger" onclick="window.location.href = \'msg_drop.php?id='.$row['id_msg'].'\';">supprimer</button></td>                    
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