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

                      <img src="..\images\profileimage\etudiant\defaultpicture.png">

                      <br>
                      <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap" style=" margin-left: -20px;">Modifier la photo de profile</button>

                    </div>

                    <br>

                   

                  <p class="card-text"><b>Nom et prenom: </b>{{$user->nom_user}} {{$user->prenom_user}}</p>

                  <p class="card-text"><b>Email: </b>{{$user->email}}</p>

                  

<!------------------------TO MESSAGE-------------------------------------------------------------------------------------------->

                  <a  class="btn btn-primary btn-sm btn-block" href="{{route('message.index')}}"><i class="fas fa-envelope-open"></i>Boite Message</a>


<!------------------------END TO MESSAGE-------------------------------------------------------------------------------------------->               

                </div>

                <div class="card-footer text-muted">

                  

                    <!-- si c'est un  professeur on ajouter le button d'aller au page d ajoute de cours/quiz -->
                      @if (Auth::user()->type_user=='professeur')
                         <a href="addquiz.php" class="btn btn-info">Ajouter Quiz</a>

                      <a href="addcours-1.php" class="btn btn-info">Ajouter cours</a><br>
                       @endif
                    
                      <!-- si c'est un admin on affiche le button pour aller au panel -->

                  @if (Auth::user()->type_user=='admin')
                    <a href="{{route('dashbord.index')}}" class="btn btn-info">Panel Admin</a> 
                  @endif
                  <a href="{{route('cour.index')}}" class="btn btn-info">cours disponible</a> 
                  <a class="btn btn-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                  </a>

                </div>

              </div>

          </div>

          <div class="col-lg-8 col-md-8 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                  Information

                </div>

                <div class="card-body">

                    <p class="text"><b>Code Massar : </b>{{$user->id}}</p>

                    <p class="text"><b>Nom : </b>{{$user->nom_user}}</p>

                    <p class="text"><b>Prénom : </b> {{$user->prenom_user}}</p>

                    <p class="text"><b>Date Naissance : </b>{{$user->date_naiss_user}}</p>

                    <p class="text"><b>Filiére : </b>{{$user->filiere_user}}</p>

                    <p class="text"><b>Adresse : </b>{{$user->adresse_user}}</p>

                    <p class="text"><b>Telephone : </b>{{$user->num_tele_user}}</p>

                    <p class="text"><b>Type User : </b>{{$user->type_user}} </p>
                </div>

                <div class="card-footer text-muted">
                  <div class="textright">
                      @if (Auth::user()->type_user=='admin')
                          <a href="{{route('dashbord.index')}}" class="btn btn-info">Modifier le profile</a> 
                      @else
                        <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modifier</button>
                      @endif
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
                           

                        <form action="{{ route('user.update', ['user' => $user->id ]) }}" method="POST">         
                          @csrf
                          @method('PUT')
                            
                            
                            {{-- <input type="hidden" id="type_user" name="type_user" value="{{ old('type_user', $user->type_user ?? null  ) }}" > --}}


                            {{-- <div class="form-group">

                                <label for="mdps_user" class="col-form-label">Nouveau mot de pass</label>

                                <input type="password" class="form-control" id="mdps_user" name="mdps_user"

                                >

                            </div>

                            {{-- <div class="form-group">

                                <label for="recipient-name" class="col-form-label">Confirme mot de pass</label>

                                <input type="password" class="form-control" id="recipient-name" name="pass2">

                            </div> --}}

                            {{-- <div class="form-group">  --}}

                                {{-- <label for="nom_user" class="col-form-label">Nom</label>

                                <input type="text" class="form-control" id="nom_user" name="nom_user" value="{{ old('nom_user', $user->nom_user ?? null  ) }}">

                            </div>

                            <div class="form-group">

                                <label for="prenom_user" class="col-form-label">Prenom</label>

                                <input type="text" class="form-control" id="prenom_user" name="prenom_user" value="{{ old('prenom_user', $user->prenom_user ?? null  ) }}">

                            </div>

                            <div class="form-group">

                                <label for="date_naiss_user" class="col-form-label">Date Naissance</label>

                                <input type="date" class="form-control" id="date_naiss_user" name="date_naiss_user" value="{{ old('date_naiss_user', $user->date_naiss_user ?? null  ) }}">

                            </div>

                            <div class="form-group">

                                <label for="email_user" class="col-form-label">Email</label>

                                <input type="text" class="form-control" id="email_user" name="email_user" value="{{ old('email_user', $user->email_user ?? null  ) }}">

                            </div>

                            <div class="form-group">

                                <label for="adresse_user" class="col-form-label">Adresse</label>

                                <input type="text" class="form-control" id="adresse_user" name="adresse_user" value="{{ old('adresse_user', $user->adresse_user ?? null  ) }}">

                            </div>

                            <div class="form-group">

                                <label for="num_tele_user" class="col-form-label">Telephone</label>

                                <input type="number" class="form-control" id="num_tele_user" name="num_tele_user" value="{{ old('num_tele_user', $user->num_tele_user ?? null  ) }}">

                            </div>
                            <div class="form-group">

                                  <label for="type_user" class="col-form-label">Type User</label>

                                  <input type="text" class="form-control" id="type_user" name="type_user" value="{{ old('type_user', $user->type_user ?? null  ) }}" disabled>

                            </div>
                            <div class="modal-footer"> --}}
                              @include('users.form')

                            {{-- <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Enregistrer"> --}}

                             {{-- </div> --}}
                              
                             
                             <button type="submit" class="btn btn-primary btn-sm" name="submit">Enregistrer</button>
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