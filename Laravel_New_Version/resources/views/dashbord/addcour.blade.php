@extends('dashbord.dashboard')

@section('title')
   Ajouter Cour  
@endsection


  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder-plus"></i>    
                  Ajouter le Module  
              </h6>

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
        
                <form action="{{ route('classe.store') }}" method="POST" id="formajout">
                  @csrf
                  <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Module Nom </span>
                    </div>
                    <input type="text" name="nom" placeholder="EX : Programmation" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                  </div>

                  <br>

                  <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                      </div>
                      <input type="text" name="description" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                  </div>

                  <br>

                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect02">Filiére du Module</label>
                    </div>
                    <select class="custom-select" name="id_filiere" id="inputGroupSelect02">
                        @foreach ($fields as $field)
                        <option value="{{$field}}">{{strtolower($field)}}</option>
                        @endforeach
                    </select>
                  </div>

                  <br>
                  
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
    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

@endsection
