@extends('dashbord.dashboard')

@section('title')
Modules Liste
@endsection


@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
        

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-book"></i> Modules Liste</h6>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Id Module</th>
                    <th>Nom</th>
                    <th>description</th>
                    <th>filiere</th>
                    <th>Modifier</th>
                    <th>Suprimmer</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Id Module</th>
                    <th>Nom</th>
                    <th>description</th>
                    <th>filiere</th>
                    <th>Modifier</th>
                    <th>Suprimmer</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($classes as $classe)
                     <tr>
                       <td>{{$classe->id}}</td>
                       <td>{{$classe->nom}}</td>
                       <td>{{$classe->description}}</td>
                       <td>{{$classe->id_filiere}}</td>
                       {{-- Need Traitement --}}
                      {{-- Modifier Button --}}
                      <td><a href="{{ route('classe.edit' , ['classe' => $classe->id] ) }}" class="btn btn-warning" >Modifier</a></td>
                      {{-- Supprimer button --}}
                      <td>
                        <form action="{{ route('classe.destroy', ['classe' => $classe->id ]) }}" method="POST" style="display: inline;">
                          @csrf
                          @method('DELETE')
                          <button type="submit" name="submit" class="btn btn-danger" style="display: inline;">Supprimer</button>
                        </form>
                      </td>
                      {{-- END Supprimer button --}}
                     </tr>
                @endforeach
            </tbody>
          </table>
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

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@endsection
