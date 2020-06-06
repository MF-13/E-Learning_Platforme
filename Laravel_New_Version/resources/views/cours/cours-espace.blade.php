@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/cours-espace.css") }}>
@endsection

@section('title')
    Cours Espace
@endsection


@section('content')
  {{-- Si L'utilisateur est Connecter --}}
 
@Auth

@if(Auth::user()->verify==null ||Auth::user()->verify=='false')
      @php
       
         redirect('/')->with('status','Attendez jusqu\'a l\'activation de votre compte') 
      @endphp
@else

    <!-- Type Donnes Section -->
    <ul class="nav nav-pills nav-fill tab">
      <li class="nav-item">
        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'cour')" id="defaultOpen" style="padding-left: 50px; padding-right: 50px;">Cours</button>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'tp')" style="padding-left: 50px; padding-right: 50px;" >TP</button>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'td')" style="padding-left: 50px; padding-right: 50px;">TD</button>
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'quiz')"  style="padding-left: 50px; padding-right: 50px;">Quiz</button>
      </li>
    </ul>

@if (Auth::user()->type_user == 'professeur')
<!-- affichage des buttons pour les professeurs -->
    <div style="padding-left: 40%">
                <br>
                <a href="{{route('quiz.create')}}" class="btn btn-info" >Ajouter Quiz</a>
                <a href="{{route('cour.create')}}" class="btn btn-info">Ajouter cours</a>
    </div>            
@endif

<section class="Posts">
  <p class="Text"> Fichiers pour filiere : {{strtoupper(Auth::user()->filiere_user)}}</p>
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      @php
        $types=['cour','td','tp'];
      @endphp
      @foreach($types as $type)
        <div id="{{$type}}" class="tabcontent">
          @foreach ($files as $file)
            @if($file->type_cour==$type && $file->id_filiere==Auth::user()->filiere_user) 
              <div class="card text-center cardpadding">
                <div class="card-body">
                  <div class="media">
                    <img src="\storage\images\img\cours espace\undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">
                    <div class="media-body">
              <!-- Afficher les cards -->
                          
                          <h4 class="mt-0">{{strtoupper($file->type_cour)}} : {{strtoupper($file->titre)}}  </h4>
                          
                          <p class="pmedia">
                              <ul class="pmedia mylist">

                                <li><b>Module:</b> {{$cours[$file->id_cour]}}</li>

                                <li><b>commantaire:</b> {{$file->commantaire}}</li>

                                <li><b>Publier le :</b> {{$file->date_ajoute}}</li>
                                <br>
                              </ul>
                          </p>
                        <!-- Telecharger le fichier -->
                            <div class="formbutton">
                              @php
                                  $lien = 'storage/'.$file->pdf_lien;
                              @endphp
                              <a href="{{$lien}}" download>
                                <button type="submit" class="btn btn-outline-success btnmarging">
                                  <i class="fas fa-download"></i> Telecharger
                                </button>
                              </a>
                            </div>
                            <!-- supprimer le fichier si c'est le profeeseur qui a poser le fichier -->

                            @if ($file->code_prof == Auth::user()->id && Auth::user()->type_user=='professeur')
                              <form class="formbutton" action="{{ route('cour.destroy', ['cour' => $file->id ]) }}" method="POST"">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-outline-danger btnmarging"><i class="fas fa-trash"></i> Supprimer</button>
                              </form>
                            @endif

                      </div>
                  </div>
                </div>
              </div>
              <hr>
             @endif 
          @endforeach
        </div>
      @endforeach
    </div>
  </div> 
</div> 

  <!-- *************************************** traitement pour QUIZ *******************************************-->
                                
<div id="quiz" class="tabcontent">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        {{-- Si L'utilisateur est un Etudiant ou admin --}}
        @if(Auth::user()->type_user=='etudiant' || Auth::user()->type_user=='admin')
          @foreach ($quizzes as $quizze)
            @if($quizze->dernier_delai>date('Y-m-d H:i:s'))
            <div class="card text-center cardpadding">
              <div class="card-body">
                <div class="media">
                  <img src="\storage\images\img\cours espace\undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">
                    <div class="media-body"> 
                      <h4 class="mt-0">Quiz : {{$quizze->nom_quiz}}</h4>
                      <p class="pmedia">
                      <ul class="pmedia mylist">
                        <li><b>Publier le : </b>{{$quizze->date_pub}}</li>
                        <li><b>Dérniére date a faire : </b>{{$quizze->dernier_delai}}</li>
                        <br>
                        {{-- Need Traitement --}}
                        @php
                            // dd($id_etd_repondu)
                        @endphp
                        @if(in_array(Auth::user()->id,$id_etd_repondu[$quizze->id_quiz]))
                           <p class="alert alert-info">Quiz deja realiser</p>
                        @else
                          <a href="{{ route('quiz.show',['quiz'=> $quizze->id_quiz ])}}" class="btn btn-outline-info btnmarging"><i class="fas fa-edit"></i> Réaliser le Quiz</a>
                        @endif
                      </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        @endif
      </div>
    </div>
  </div>
    



{{-- Si L'utilisateur est un Professeur est lui qui a poser le quiz--}}


  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        @foreach ($quizzes as $quizze)
           @if(Auth::user()->id==$quizze->id_prof) 
              <div class="card text-center cardpadding">
                <div class="card-body">
                  <div class="media">
                    <img src="\storage\images\img\cours espace\undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">
                      <div class="media-body"> 
                        <h4 class="mt-0">Quiz : {{$quizze->nom_quiz}}</h4>
                          <p class="pmedia">
                            <ul class="pmedia mylist">
                              <li><b>Publier le :</b> {{$quizze->date_pub}}</li>
                              <li><b>Dérniére date a rendre :</b> {{$quizze->dernier_delai}}</li>
                              <br>
                              <a href="{{ route('quiz.show',['quiz'=> $quizze->id_quiz ])}}" class="btn btn-outline-info btnmarging"><i class="fas fa-edit"></i>Consulter le Quiz</a>

                            </ul>
                            {{-- Supprimer le quiz --}}
                            <form class="formbutton" action="{{ route('quiz.destroy', ['quiz' => $quizze->id_quiz ]) }}" method="POST"">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-outline-danger btnmarging"><i class="fas fa-trash"></i> Supprimer</button>
                            </form>
                            {{-- End Supprimer  --}}
                            {{-- Affichage Les Résultats des Etudiant qui Réealiser le quiz --}}
                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#{{$quizze->id_quiz}}" aria-expanded="false" aria-controls="collapseExample">
                              <i class="fas fa-sort-down fa-2x" style="padding-bottom: 10px;"></i> Etudiants Résultas
                            </button>
                            {{-- Tableau qui sort --}}
                                <div class="collapse" id="{{$quizze->id_quiz}}">
                                  <div class="card card-body">
                                    <table class="table">
                                      <thead>
                                        <tr style="background-color: #393e46; color: white;">
                                          <th scope="col" style="text-align: center;">Nom d'etudiant</th>
                                          <th scope="col" style="text-align: center;">Nombre des reponses correcte</th>
                                        </tr>
                                      </thead>
                                      {{-- Afficher les Résultats des étudiants --}}
                                      <tbody>
                                        @foreach ($resultats as $resultat) 
                                            @if(!empty($resultat[$quizze->id_quiz]))
                                                @php
                                                    $rslts = $resultat[$quizze->id_quiz];
                                                  
                                                @endphp
                                                
                                                    @if(!(empty($rslts)))
                                                      <tr>
                                                        <td>{{strtoupper($rslts[0])}}</td>
                                                        <td>{{strtoupper($rslts[1])}}</td>
                                                      </tr> 
                                                    @endif
                                            @else
                                            {{-- si aucun etudian n' pas encore repondue  --}}
                                                      <tr><td>Aucune reponse pour le moment</td></tr>       
                                            @endif
                                        
                                        @endforeach
                                      </tbody>
                                    </table>
                                  </div>
                                </div>
                              {{-- END Tableau qui sort --}}
                              {{-- End Affichage Les Résultats --}}
                            </p>
                          </div>
                    </div>
                  </div>
                </div>
          @endif
        @endforeach
        </div>
      </div>
    </div>
  
</div>
</section>
  
  <script src={{ asset("js/site/cours-espace.js") }}></script>
  {{-- Si L'utilisateur n'est pas Connecter --}}
  @endif
@else
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="alert alert-warning warningsection" role="alert">
          <i class="fas fa-exclamation-triangle fa-1x"></i>  <a class="wlien" href="{{ route('login') }}">Connecter</a> pour consulter les cours disponibles . Si vous n'avez pas un compte , <a class="wlien" href="{{ route('register') }}">créer</a> 
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  @endauth
  @endsection