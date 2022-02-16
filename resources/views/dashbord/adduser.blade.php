@extends('dashbord.dashboard')

@section('title')
  @if(empty($user))  
    Ajouter User
  @else 
      {{strtoupper($user->type_user)}} traitement
  @endif
@endsection

@section('content')


        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> @if(empty($user))  Ajouter User  @else {{strtoupper($user->type_user)}} @endif</h6>

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
                 {{-- <form action="{{ route('dashbord.update',  ['dashbord' => $dashbord->id ]) }}" method="POST" id="formajout">
                  @csrf
                  @method('PUT') --}}  
              <form action="{{ route('dashbord.store') }}" method="POST" id="formajout">
                @csrf
                <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>
                
                {{-- Importer La View qui Contient les Inputs --}}
                @include('dashbord.form')
                
                @if($errors->any())
                    <ul style="color: red">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <button type="submit" name="submit" class="btn btn-info float-right">Envoyer</button>
                
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
