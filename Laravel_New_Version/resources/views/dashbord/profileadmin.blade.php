@extends('dashbord.dashboard')

@section('title')
  Profile Admine
@endsection

@section('content')

<div class="container-fluid">
<!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-id-card"></i> Admin Profile</h6>
    </div>
    <div class="card-body">
    <div class="table-responsive">
                     
     <form action="{{ route('dashbord.update', ['dashbord' => Auth::user()->id]) }}" method="POST">
                @csrf
                @method('PUT') 
                <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>
                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text"  id="inputGroup-sizing-default">Id</span>
                  </div>
                  <input type="number" name="id" value="{{Auth::user()->id}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" hidden>
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
                  </div>
                  <input type="text" name="nom_user" value="{{Auth::user()->nom_user}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prenom</span>
                  </div>
                  <input type="text" name="prenom_user" value="{{Auth::user()->prenom_user}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
                  </div>
                  <input type="password" name="password" placeholder="entrez le nouveau mot de passe (sinon votre mdps ) " class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                  </div>
                  <input type="date" name="date_naiss_user" value="{{Auth::user()->date_naiss_user}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                  
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Filiere</span>
                  </div>
                  <input type="text" name="filiere_user" value="{{Auth::user()->filiere_user}}" placeholder="ex : GI" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
                  </div>
                  <input type="number" name="num_tele_user" value="{{Auth::user()->num_tele_user}}" placeholder="06********" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">adresse</span>
                  </div>
                  <input type="text" name="adresse_user" value="{{Auth::user()->adresse_user}}" placeholder="Adresse..." class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>

                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                  </div>
                  <input type="email" name="email" value="{{Auth::user()->email}}" placeholder="exemple@domain.com" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                
                <div class="input-group mb-3" hidden>
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                  </div>
                  <input type="text" name="type_user" value="{{Auth::user()->type_user}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
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
<!--*************************************************************************************-->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->

  @endsection
