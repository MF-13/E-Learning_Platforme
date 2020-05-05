@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/profile.css") }}>
@endsection

@section('title')
    Profile
@endsection


@section('content')

   

    <div class="container">

        <div class="row">

          <div class="col-lg-4 col-md-4 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                  Bonjour

                </div>

                <div class="card-body">

                   <div class="textcenter">

                   <!-- la photo de profile-->
                   <!-- si l'utilisateur n'a pas une photo on utilise une photo par defaul <img src="path/defaultpicture.png"> -->
                   <!-- path est le path vers le dossier profile image + type user + id user -->

                    <img src="path de la photo">


                      <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap" style=" margin-left: -20px;">Modifier la photo de profile</button>

                    </div>

                    <br>

                   

                  <p class="card-text"><b>Nom et prenom</b></p>

                  <p class="card-text"><b>email</b></p>

                  

<!------------------------TO MESSAGE-------------------------------------------------------------------------------------------->

                  <button type="button" class="btn btn-primary btn-sm btn-block" onclick="window.location.href='message_boit.php'"><i class="fas fa-envelope-open"></i> Boite Message</button>

<!------------------------TO MESSAGE-------------------------------------------------------------------------------------------->               

                </div>

                <div class="card-footer text-muted">

                  

                    <!-- verifier c'est c'est un etudiant ou professeur pour ajouter le button d'aller au page d ajoute de cours

                      <a href="addquiz.php" class="btn btn-info">Ajouter Quiz</a>

                      <a href="addcours-1.php" class="btn btn-info">Ajouter cours</a><br> -->

                    
                      <!-- si c'est un admin on affiche le button pour aller au panel

                        <a href="dash/index.php" class="btn btn-info">Panel admin</a><br> -->

                    

                  <a href="cours-espace.php" class="btn btn-info">cours disponible</a>

                  <a href="traitement/deconnexion.php" class="btn btn-danger">Déconnexion</a>

                </div>

              </div>

          </div>

          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                  Information

                </div>

                <div class="card-body">

                    <p class="text"><b>Code Massar : code</p>

                    <p class="text"><b>Nom : </b>nom</p>

                    <p class="text"><b>Prénom : </b> prnom</p>

                    <p class="text"><b>Date Naissance : date naiss</p>

                    <p class="text"><b>Filiére : </b>filiere</p>

                    <p class="text"><b>Adresse : </b>adresse</p>

                    <p class="text"><b>Telephone : </b>num tele</p>

                    <p class="text"><b>Type : </b>type user (prof , admin , etudiant) </p>

                </div>

                <div class="card-footer text-muted">

                    <div class="textright">

                    <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modifier</button>

                    </div> 

                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                     <div class="modal-dialog" role="document">

                        <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Modification</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <div class="modal-body">


                          <!-- form pour changer les informations du user , dans ce qu'as il faut remplire les input avec le nom prenom ... de l'utilisateur avec l attribue :  value="la valeur" -->
                           

                        <form action="traitement/modifier_user.php" method="POST">         

                            
                            
                            <input type="hidden" name="id" value="user id">


                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nouveau mot de pass</label>

                                <input type="password" class="form-control" id="recipient-name" name="pass1"

                                >

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Confirme mot de pass</label>

                                <input type="password" class="form-control" id="recipient-name" name="pass2">

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Nom</label>

                                <input type="text" class="form-control" id="recipient-name" name="nom">

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">prenom</label>

                                <input type="text" class="form-control" id="recipient-name" name="prenom">

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">date Naissance</label>

                                <input type="date" class="form-control" id="recipient-name" name="date_naiss">

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Email</label>

                                <input type="text" class="form-control" id="recipient-name" name="email">

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Adresse</label>

                                <input type="text" class="form-control" id="recipient-name" name="adresse">

                            </div>

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Telephone</label>

                                <input type="number" class="form-control" id="recipient-name" name="telephone">

                            </div>

                            <div class="modal-footer">

                            <input type="submit" class="btn btn-primary btn-sm" value="Enregistrer">

                             </div>
                             

                           </form>

                        </div>

                        

                        </div>

                    </div>

                    </div>

                </div>

              </div>

          </div>

        </div>

      </div>

        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                     <div class="modal-dialog" role="document">

                        <div class="modal-content">

                        <div class="modal-header">

                            <h5 class="modal-title" id="exampleModalLabel">Modification</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                            </button>

                        </div>

                        <div class="modal-body">

                          <form action="traitement/modifier_photo.php" method="POST" enctype = "multipart/form-data">

                            <div class="form-group">

                                <label for="recipient-name" class="col-form-label">changer la photo</label>

                                <input name = "userfile" type="file" class="form-control" id="recipient-name">

                            </div>

                            <div class="modal-footer">

                            <input type="submit" class="btn btn-primary btn-sm" value="Enregistrer">

                             </div>

                           </form>

                         </div>

                       </div>

                     </div>

         </div>


    <!-- End Posts Section -->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src={{ asset("js/site/bootstrap.js") }}></script>


@endsection