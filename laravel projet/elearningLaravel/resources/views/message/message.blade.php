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
                    <tr>
                          <td>hassan elakali</td>
                          <td>professeur</td>
                          <td>un message</td>
                          <td>non lue</td>
                         <td><button class="btn btn-warning" onclick="window.location.href = \'msg_details.php?id='.$row['id_msg'].'\';">Repondre</button></td>
                          <td><button class="btn btn-danger" onclick="window.location.href = \'msg_drop.php?id='.$row['id_msg'].'\';">supprimer</button></td>
                            
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
@endsection