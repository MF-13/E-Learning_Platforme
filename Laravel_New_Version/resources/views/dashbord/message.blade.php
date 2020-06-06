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
              <h6 class="m-0 font-weight-bold text-primary float-left"><i class="fas fa-envelope-open-text"></i> Messages List</h6>
            <a href="{{url('/new_message')}}" class="float-right btn btn-success">Envoyer un Message</a>
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
                      <th>Etat</th>
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
                      <th>Etat</th>
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
                          <td>
                            @if ($message->etat=='1')
                                Repondu
                            @else
                                Non Repondu
                            @endif
                          </td>
                          
                          {{-- Need Traitement --}}
                          <td><a href="{{ route('Message_boite.edit' , ['Message_boite' => $message->id] ) }}" class="btn btn-warning" >Répondre</a></td>
                          {{-- Supprimer button --}}
                      <td>
                        <form action="{{ route('contact.destroy', ['contact' => $message->id ]) }}" method="POST" style="display: inline;">
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