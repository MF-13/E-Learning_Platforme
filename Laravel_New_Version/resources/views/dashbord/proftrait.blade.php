@extends('layouts.dashboard')

@section('title')
    Professeur traitement 
@endsection

@section('content')

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Professeur</h6>
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
                <?php 
                  if(isset($_GET['id'])){
                    echo '<form action="traitement/modifyuser.php?id='.$id.'" method="POST" id="formajout">';
                  }else{
                    echo '<form action="traitement/adduser.php" method="POST" id="formajout">';
                  }
                ?>
                <form action="{{route('user.update',['user'=>$user->id])}}" method="POST" id="formajout">
                  @csrf
                  @method('PUT')
                <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs est obligatoires</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Code Professeur</span>
                  </div>
                  <input type="number" name="id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  disabled value="{{ old('nom_user', $user->id ?? null  ) }}">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
                  </div>
                  <input type="text" name="nom_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->nom_user ?? null  ) }}">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prenom</span>
                  </div>
                  <input type="text" name="prenom_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->prenom_user ?? null  ) }}">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
                  </div>
                  <input type="text" name="mdps_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->mdps_user ?? null  ) }}">
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                  </div>
                  <input type="date" name="date_naiss_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->date_naiss_user ?? null  ) }}">
                </div>
                  
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Filiere</span>
                        </div>
                        <input type="text" name="filiere_user" placeholder="ex : GI" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->filiere_user ?? null  ) }}">
                  
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
                  </div>
                  <input type="number" name="num_tele_user" placeholder="06********" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->num_tele_user ?? null  ) }}"<?php if(isset($_GET['id'])){ echo 'value="'.$telephone.'"'; }?>>
                </div> 
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Adresse</span>
                  </div>
                  <input type="text" name="adresse_user" placeholder="adresse..." class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->adresse_user ?? null  ) }}">
                
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                  </div>
                  <input type="email" name="email_user" placeholder="exemple@domain.com" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ old('nom_user', $user->email_user ?? null  ) }}">
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
