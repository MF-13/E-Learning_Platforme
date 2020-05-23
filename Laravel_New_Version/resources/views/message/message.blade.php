@extends('layouts.dashboard')

@section('title')
  <p>Message</p>
@endsection


@section('content')
<div class="container-fluid">
          
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary float-left">Message</h6>
              <button type="button" class="btn btn-primary float-right" onclick="window.location.href='nouveau_message.php'">Nouveau Message</button>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>From</th>
                      <th>type</th>
                      <th>contenue</th>
                      <th>Etat</th>
                      <th>details</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>From</th>
                      <th>type</th>
                      <th>contenue</th>
                      <th>Etat</th>
                      <th>details</th>
                      <th>Supprimer</th>
                    </tr>
                  </tfoot>
                  @foreach ($messages as $message)
                      
                  
                    <tr>
                          <td>{{$message->emetteur_nom}}</td>
                          <td>{{$message->recepteur_type}}</td>
                          <td>{{$message->message}}</td>
                          <td>{{$message->etat}}</td>
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
@endsection