@extends('dashbord.dashboard')

  @section('title')
    Message details
  @endsection


  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-envelope-square"></i> Message details</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
                <form action="{{ route('Message_boite.store') }}" method="POST" id="formajout">
                  @csrf
                  
                  <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>  
                
                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message ID</span>
                  </div>
                  <input type="number" name="id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('id',  $message->id ?? null  ) }}" hidden >
                </div>

                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend" hidden>
                    <span class="input-group-text" id="inputGroup-sizing-default">Code emetteur</span>
                  </div>
                  <input type="text" name="emetteur_id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_id',  $message->emetteur_id ?? null  ) }}" >
                </div>

                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom du Emetteur</span>
                  </div>
                  <input type="text" name="emetteur_nom" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_nom',  $message->emetteur_nom ?? null  ) }}" >
                </div>

                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email du Emetteur</span>
                  </div>
                  <input type="text" name="emetteur_email" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_email',  $message->emetteur_email ?? null  ) }}" >
                </div>
                
                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
                  </div>
                  <input type="text" name="emetteur_telephone" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_telephone',  $message->emetteur_telephone ?? null  ) }}" >
                </div>
                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Type d'Emetteur</span>
                  </div>
                  <input type="text" name="emetteur_type" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_type',  $message->emetteur_type ?? null  ) }}" >
                </div>
                  
                <div class="input-group mb-3" hidden>
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">date envoie</span>
                        </div>
                        <input type="text" name="date_env" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('date_env',  $message->date_env ?? null  ) }}" >
                </div>
                <div class="card" style="margin-bottom: 10px">
                  <div class="card-body">
                    <b>Nom :</b>&nbsp; {{$message->emetteur_nom}}
                  </div>
                </div>
                <div class="card" style="margin-bottom: 10px">
                  <div class="card-body">
                    <b>Email :</b>&nbsp; {{$message->emetteur_email}}
                  </div>
                </div>
                <div class="card" style="margin-bottom: 10px">
                  <div class="card-body">
                    <b>Telephone :</b>&nbsp; {{$message->emetteur_telephone}}
                  </div>
                </div>
                <div class="card" style="margin-bottom: 10px">
                  <div class="card-body">
                    <b>Type :</b>&nbsp; {{$message->emetteur_type}}
                  </div>
                </div>
                <div class="card" style="margin-bottom: 10px">
                  <div class="card-body">
                    <b>Date d'envoie:</b>&nbsp; {{$message->date_env}}
                  </div>
                </div>
                <div class="card" style="margin-bottom: 10px">
                  <div class="card-body">
                    <b>Ancien Message :</b>&nbsp; {{$message->message}}
                  </div>
                </div>
              

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Votre Réponse au Message</span>
                  </div>
                  <textarea name="message" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Votre reponse..."></textarea>
                  
                </div>
                {{-- <form action="{{ route('contact.destroy', ['contact' => $message->id ]) }}" method="POST" style="display: inline;">
                  @csrf
                  @method('DELETE')
                  <button type="submit" name="submit" class="btn btn-danger" style="display: inline;">Supprimer</button>
                </form>                   --}}
                @if($errors->any())
                    <ul style="color: red">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <input type="submit" name="submit" class="btn btn-info float-right">
              </form>
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
