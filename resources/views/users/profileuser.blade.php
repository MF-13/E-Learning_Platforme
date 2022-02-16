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
  <div class="row" style="margin-top: 100px;">
    <div class="col-lg-4 col-md-4 col-sm-12">
      <div class="card text-center">
        <div class="card-header">Bonjour</div>
          <div class="card-body">
            <div class="textcenter">
              <!-- la photo de profile-->
                {{-- Défault Image pour l'utilisateur --}}
                  
                 <img src="/storage/{{$path}}" class="rounded-circle" width="100px"  height="100px">
                       

                <br>
                <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal2" data-whatever="@getbootstrap" style=" margin-left: -20px;">Modifier la photo de profile</button>
            </div>
            <br>
            <p class="card-text"><b>Nom Complet: </b>{{$user->nom_user}} {{$user->prenom_user}}</p>
            <p class="card-text"><b>Email: </b>{{$user->email}}</p>

            <!------------------------Go TO MESSAGE-------------------------------------------------------------------------------------------->
            @if(Auth::user()->user_type=='admin')
              <a  class="btn btn-primary btn-sm btn-block" href="{{route('Message_boite.index')}}"><i class="fas fa-envelope-open"></i>Boite Message</a>
            @else 
              <a  class="btn btn-primary btn-sm btn-block" href="{{url('/Message_boite')}}"><i class="fas fa-envelope-open"></i>Boite Message</a>
            @endif

            <!------------------------END TO MESSAGE-------------------------------------------------------------------------------------------->               
          </div>
          <div class="card-footer text-muted">
          <!-- si c'est un  professeur on ajouter le button d'aller au page d ajoute de cours/quiz -->
          @if (Auth::user()->type_user=='professeur')
            <a href="{{route('quiz.create')}}" class="btn btn-info">Ajouter Quiz</a>
            <a href="{{route('cour.create')}}" class="btn btn-info">Ajouter cours</a><br>
          @endif
          <!-- si c'est un admin on affiche le button pour aller au panel -->
          @if (Auth::user()->type_user=='admin')
            <a href="{{route('dashbord.index')}}" class="btn btn-info">Panel Admin</a> 
          @endif
          <a href="{{route('cour.index')}}" class="btn btn-info">cours disponible</a> 
          <a class="btn btn-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">   
            {{ __('Déconnexion') }}
          </a>
        </div>
      </div>
    </div>
    {{-- Formation card --}}
    <div class="col-lg-8 col-md-8 col-sm-12">
      <div class="card text-center">
        <div class="card-header">Votre Information</div>
          <div class="card-body">
              @if($errors->any())
                  <ul style="color: red" class="float-left">
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
                 <br> <hr>
             @endif
            {{-- Affiche Les Informations Depuis Base Données --}}
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
              {{-- Si L'utilisateur est un Admin --}}
              @if (Auth::user()->type_user=='admin')
              {{-- Modifier les Information Dans dashbord --}}
                <a href="{{route('dashbord.index')}}" class="btn btn-outline-success btn-sm ">Modifier le profile</a> 
              @else
                <button type="button" class="btn btn-outline-success btn-sm " data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Modifier le profile</button>
              @endif
              
            </div>
            {{-- Ce Modal est Afficher Lorsque On Click Sur Button Modifier --}}
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
                    {{-- Button Fermer Le Modal --}}
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  </div>
                  <div class="modal-body">
                   <!-- form pour changer les informations du user , dans ce qu'as il faut remplire les input avec le nom prenom ... de l'utilisateur avec l attribue :  value="la valeur" -->
                    <form action="{{ route('user.update', ['user' => $user->id ]) }}" method="POST">         
                      @csrf
                      @method('PUT')
                      {{-- Inporter La Page qui Contient Les Inputs --}}
                      @include('users.form')
                      <button type="submit" class="btn btn-primary btn-sm" name="submit">Enregistrer</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            {{-- END MODULE --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  {{-- Cette Partier est pour Changer la Photo de l'utilsateur  --}}
  <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modification</h5>
          {{-- Button Fermer Le Modal --}}
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
         <div class="modal-body">
        {{-- Traitement Nécessaire --}}

          <form action="{{url('/change_picture')}}" method="POST" enctype = "multipart/form-data">
            @csrf
            @method('GET')
            <div class="form-group">
              <label for="recipient-name" class="col-form-label">changer la photo</label>
                <input name = "pic" accept="image/png" type="file" class="form-control" id="recipient-name">
            </div>
            <div class="modal-footer">
              <input type="submit" class="btn btn-primary btn-sm" value="Enregistrer">
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>

  {{-- Les scripts --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src={{ asset("js/site/bootstrap.js") }}></script>


@endsection