@extends('dashbord.dashboard')

@section('title')
Les Opinions des utilisateur
@endsection


@section('content')

 <!-- Begin Page Content -->
 <div class="container-fluid">
  <h1 class="h3 mb-2 text-gray-800">Opinions </h1>
  <p class="mb-4">Les Opinions envoyer par les différents visiteurs ou utilisateurs ! </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-comments"></i> Opinions</h6>
      </div>

      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Opinion</th>
                    <th>Suprimmer</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Opinion</th>
                    <th>Suprimmer</th>
                </tr>
            </tfoot>
            <tbody>
                @foreach ($comments as $comment)
                     <tr>
                       <td>{{$comment->nom}}</td>
                       <td>{{$comment->email}}</td>
                       <td>{{$comment->opinion}}</td>
                      {{-- Supprimer button --}}
                      <td>
                        <form action="{{ route('comment.destroy', ['comment' => $comment->id ]) }}" method="POST" style="display: inline;">
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

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

@endsection