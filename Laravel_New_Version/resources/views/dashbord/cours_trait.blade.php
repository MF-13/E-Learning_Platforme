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
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder-plus"></i>  @if(!empty($classe))  
                  Ajouter cours
                  @else 
                  Cours traitement  
                  @endif
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
        
                <form action="{{ route('classe.update',  ['classe' => $classe->id ]) }}" method="POST" id="formajout">
                  @csrf
                  @method('PUT')

                  <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs est obligatoires</p>
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
                    <span class="input-group-text" id="inputGroup-sizing-default">Cours Nom </span>
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
                  <label class="input-group-text" for="inputGroupSelect02">Filiére du Cour</label>
                </div>
                <select class="custom-select" name="field_id" id="inputGroupSelect02">
                  <option value="{{$classe->id_filiere ?? null}}" >{{$classe->id_filiere  ?? null}}</option>
                    @foreach ($fields as $field)
                    <option value="{{$field}}" >{{strtoupper($field)}}</option>
                    @endforeach
                </select>
              </div>
              <br>
              
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
