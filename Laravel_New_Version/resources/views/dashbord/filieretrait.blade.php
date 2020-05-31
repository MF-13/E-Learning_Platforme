@extends('layouts.dashboard')

@section('title')
  Filiere traitement
@endsection


  @section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">

        
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-folder-plus"></i> Filiere</h6>

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
                <form action="{{route('filiere.update',['fields'=>$field->id])}}" method="POST" id="formajout">
                  @csrf
                  @method('PUT')
                  <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs est obligatoires</p>  
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Filiére ID</span>
                  </div>
                  <input type="text" name="filiere_id" class="form-control" placeholder="ex : GI" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{old('field',$field->filiere_id)}}">
              </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Filiére Nom </span>
                  </div>
                  <input type="text" name="filiere" placeholder="Genie Informatique" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{old('field',$field->filiere)}}">
              </div>
              <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">departement</span>
                  </div>
                  <input type="text" name="departement" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="ex : genie informatique" value="{{old('field',$field->departement)}}">
              </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Description</span>
                  </div>
                  <input type="text" name="filiere_description" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{old('field',$field->filiere_description)}}">
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
