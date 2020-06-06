@extends('dashbord.dashboard')

@section('title')
  Editer le departement
@endsection


  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-edit"></i> Editer Le Departement </h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
           
                <form action="{{ route('cour.update' , ['cour' => $dept ]) }}" method="POST" id="formajout" enctype="multipart/form-data">
                  @csrf
                  @method('PUT')
                  <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>
                  <br>  
                  
                    <input type="hidden" name="old_dept" value="{{$dept}}">

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="inputGroup-sizing-default">Nom du Département</span>
                        </div>
                        <input type="text" name="departement" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$dept ?? null}}">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupFileAddon01">Choissir une image </span>
                        </div>
                        <div class="custom-file">
                          <input type="file" name="userfile" accept="image/png" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" >
                          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        </div>
                    </div>
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
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

@endsection
