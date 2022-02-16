@extends('dashbord.dashboard')

@section('title')
  @if(empty($field))  
    Ajouter cours
  @else 
   Cours traitement  
  @endif
@endsection


  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-edit"></i>  @if(!empty($classe))  
                  Module Modification
                  @else 
                  Cours traitement  
                  @endif
              </h6>

            </div>
            <div class="card-body">
              <div class="table-responsive">
               
        
                <form action="{{ route('classe.update',  ['classe' => $classe->id ]) }}" method="POST" id="formajout">
                  @csrf
                  @method('PUT')
                  <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>
                  <br>  
                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cours ID</span>
                  </div>
                  <input type="text" name="id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$classe->id ?? null}}">
              </div>
              <br>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Module Nom </span>
                  </div>
                  <input type="text" name="nom" placeholder="EX : Programmation" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$classe->nom ?? null}}">
              </div>
              <br>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                  </div>
                  <input type="text" name="description" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{$classe->description ?? null}}">
              </div>
              <br>
              <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect02">Filiére du Module</label>
                </div>
                <select class="custom-select" name="id_filiere" id="inputGroupSelect02">
                  <option value="{{$classe->id_filiere ?? null}}" >{{$classe->id_filiere  ?? null}}</option>
                    @foreach ($fields as $field)
                    <option value="{{$field}}" >{{strtoupper($field)}}</option>
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
