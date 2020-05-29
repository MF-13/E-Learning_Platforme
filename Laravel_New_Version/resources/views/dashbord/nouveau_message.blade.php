@extends('layouts.dashboard')

@section('title')
  <p>Nouveau Message</p>
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
                
              <form action="{{route('message.update',['message'=>$message->$id])}}" method="POST" id="formajout">
                @csrf
                @method('PUT')
                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                  </div>
                  <input type="text" name="recepteur_email" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>

                
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Message</span>
                  </div>
                  <textarea name="message" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Votre reponse..."></textarea>
                  
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

