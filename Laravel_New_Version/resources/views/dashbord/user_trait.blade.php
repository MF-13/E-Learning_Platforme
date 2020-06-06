@extends('dashbord.dashboard')

@section('title')
  @if(empty($user))  
    Ajouter User
  @else 
      {{strtoupper($user->type_user)}} traitement
  @endif
@endsection

@section('content')

<!-- Début Page Content -->
<div class="container-fluid">
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-edit"></i> {{strtoupper($dashbord->type_user)}} Modification</h6>
    </div>
  <div class="card-body">
    <div class="table-responsive">
    <style>
      #datatable {
        text-align: center;
        font-size: 17px;
        font-family: monospace;
      }
      sup{color: red;}
    </style>
    <form action="{{ route('dashbord.update',  ['dashbord' => $dashbord->id ]) }}" method="POST" id="formajout">
      @csrf
      @method('PUT')
      <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs sont obligatoires</p>
      @if($dashbord->verify==null || $dashbord->verify=='false' )
       <p style="color: blue;"><i class="fas fa-exclamation-triangle"></i> On cliquant sur modifier , vous accepter l'utilisateur dans le site web </p>
      @endif

        <div class="input-group mb-3" hidden>
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">ID</span>
          </div>
          <input type="number" value="{{$dashbord->id ?? null}}" name="code_massar" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
          </div>
            <input type="text" name="nom_user" value="{{$dashbord->nom_user ?? null}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Prenom</span>
          </div>
            <input type="text" name="prenom_user" value="{{$dashbord->prenom_user ?? null}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe (Entrer le nouveau mdps sinon laisser l'actuel)</span>
          </div>
          <input type="password" name="password" value="{{$dashbord->password ?? null}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Date De Naissance</span>
          </div>
            <input type="date" name="date_naiss_user" value="{{$dashbord->date_naiss_user ?? null}}" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>
                  
        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Filiere</span>
          </div>
          <input type="text" name="filiere_user" value="{{$dashbord->filiere_user ?? null}}" placeholder="ex : GI" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
          </div>
            <input type="number" name="num_tele_user" value="{{$dashbord->num_tele_user ?? null}}" placeholder="06********" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">adresse</span>
          </div>
          <input type="text" name="adresse_user" value="{{$dashbord->adresse_user ?? null}}" placeholder="Adresse..." class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>

        <div class="input-group mb-3">
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
          </div>
          <input type="email" name="email" value="{{$dashbord->email ?? null}}" placeholder="exemple@domain.com" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>
                
        <div class="input-group mb-3" hidden>
          <div class="input-group-prepend">
            <span class="input-group-text" id="inputGroup-sizing-default">type_user</span>
          </div>
          <input type="text" name="type_user" value="{{$dashbord->type_user ?? null}}" placeholder="type_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
        </div>

        @if($errors->any())
            <ul style="color: red">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <button type="submit" name="submit" class="btn btn-info float-right" >Modifier</button>

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
