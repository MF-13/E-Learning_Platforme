@extends('dashbord.dashboard')

@section('title')
  <p>Profile Admine</p>
@endsection

@section('content')

 <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-user-plus"></i> Admin Profile</h6>
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
                
             {{-- <?php echo '<form action="traitement/modifyuser.php?id='.$id.'" method="POST" id="formajout">'?> --}}
                  
                
                <p style="color: red;"><i class="fas fa-exclamation-triangle"></i> Touts les champs est obligatoires</p>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id</span>
                  </div>
                  <input type="number" name="id" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default"  disabled>
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nom</span>
                  </div>
                  <input type="text" name="nom_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prenom</span>
                  </div>
                  <input type="text" name="prenom_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Mot de passe</span>
                  </div>
                  <input type="text" name="mdps_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Date</span>
                  </div>
                  <input type="date" name="date_naiss_user" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                  
                <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Filiere</span>
                        </div>
                        <input type="text" name="filiere_user" placeholder="ex : GI" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                  
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Telephone</span>
                  </div>
                  <input type="number" name="num_tele_user" placeholder="06********" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">adresse</span>
                  </div>
                  <input type="text" name="adresse_user" placeholder="Adresse..." class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Email</span>
                  </div>
                  <input type="email" name="email_user" placeholder="exemple@domain.com" class="form-control" required="required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" >
                </div>
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
