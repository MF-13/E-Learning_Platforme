@extends('dashbord.dashboard')

@section('title')
  Nouveau Message
@endsection


@section('content')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-envelope-square"></i>&nbspNouveau Message</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                
              <form action="{{route('Message_boite.store')}}" method="POST" id="formajout">
                @csrf
                <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>  
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                  </div>
                  <input type="email" name="emetteur_email" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" required >
                </div>

                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message</span>
                  </div>
                  <textarea name="message" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Votre reponse..." required></textarea>
                  
                </div>
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

