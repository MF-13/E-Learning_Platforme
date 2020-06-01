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
                <style>
                  #datatable {
                  text-align: center;
                  font-size: 17px;
                  font-family: monospace;
                }
                sup{
                   color: red;
                }
                </style>
                
                <form action="{{ route('Message_boite.update',  ['Message_boite' => $message->id ]) }}" method="POST" id="formajout">
                  @csrf
                  @method('PUT')
                
                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message ID</span>
                  </div>
                  <input type="number" name="id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('id',  $message->id ?? null  ) }}" hidden >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend" hidden>
                    <span class="input-group-text" id="inputGroup-sizing-default">Code emetteur</span>
                  </div>
                  <input type="text" name="emetteur_id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_id',  $message->emetteur_id ?? null  ) }}" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom du Emetteur</span>
                  </div>
                  <input type="text" name="emetteur_nom" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_nom',  $message->emetteur_nom ?? null  ) }}" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email du Emetteur</span>
                  </div>
                  <input type="text" name="emetteur_email" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_email',  $message->emetteur_email ?? null  ) }}" >
                </div>
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
                  </div>
                  <input type="text" name="emetteur_telephone" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_telephone',  $message->emetteur_telephone ?? null  ) }}" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Type d'Emetteur</span>
                  </div>
                  <input type="text" name="emetteur_type" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('emetteur_type',  $message->emetteur_type ?? null  ) }}" >
                </div>
                  
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">date envoie</span>
                        </div>
                        <input type="text" name="date_env" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('date_env',  $message->date_env ?? null  ) }}" >
                </div>

                {{-- <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message d'Emetteur</span>
                  </div>
                  <textarea class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('message',  $message->message ?? null  ) }}" ></textarea>
                </div> --}}
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
                  <button class="btn btn-danger" onclick="window.location.href = \'msg_drop.php?id='.$id.'\';">supprimer</button>';?>
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
