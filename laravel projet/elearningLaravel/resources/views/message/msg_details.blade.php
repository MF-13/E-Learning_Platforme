@extends('layouts.dashboard')

  @section('title')
    <p>Message details</p>
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
                
             <form action="#" method="POST" id="formajout">
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message ID</span>
                  </div>
                  <input type="number" name="message_id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  disabled>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code emetteur</span>
                  </div>
                  <input type="text" name="id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
                  </div>
                  <input type="text" name="nom" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">email</span>
                  </div>
                  <input type="text" name="email" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">telephone</span>
                  </div>
                  <input type="text" name="telephone" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">type</span>
                  </div>
                  <input type="text" name="type" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                  
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">date envoie</span>
                        </div>
                        <input type="text" name="date_env" placeholder="ex : GI" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  >
                  
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message</span>
                  </div>
                  <textarea name="message" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" disabled>Message</textarea>
                  
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Votre reponse</span>
                  </div>
                  <textarea name="reply" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Votre reponse..."></textarea>
                  
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
