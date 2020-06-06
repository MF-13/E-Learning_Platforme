@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/profile.css") }}>
@endsection

@section('title')
    Boite Message
@endsection

@section('content')

<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
      {{-- Messages card --}}
      <div class="card text-center" style="margin-top: 60px">
        <div class="card-header"><i class="fas fa-envelope-open"> Boite Message</i></div>
@if($nbr!=0)                     
        @foreach ($messages as $message)
          <div class="card-body">
            <div class="card">
              <div class="card-body textleft">
                <h5 class="card-title">L'expéditeur : {{$message->emetteur_nom}}</h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{$message->emetteur_email}}</h6><br>
                <p class="card-text">Message : {{$message->message}}</p>
                <p class="text-muted">{{$message->date_env}}</p>
                {{-- Supprimer Le Message --}}
                <form method="post" action="{{route('Message_boite.destroy', ['Message_boite' => $message->id])}}">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-trash-alt"></i> Supprimer</button>
                </form>
                <button class="btn btn-primary float-left" type="button" data-toggle="collapse" data-target="#{{$message->id}}" aria-expanded="false" aria-controls="collapseExample">
                  <i class="fas fa-sort-down fa-2x" style="padding-bottom: 10px;"></i> Repondre
                </button><br>
                {{-- Tableau qui sort --}}
                <div class="collapse" id="{{$message->id}}">
                  <div class="card card-body">
                    <form action="{{route('contact.store')}}" method="POST">
                            @csrf
                            <div class="txtb" hidden>
                              <label hidden>Nom Complet : </label>
                              <input type="text" name="nom" hidden required placeholder="Enter Votre Nom" value="{{ Auth::user()->nom_user }} {{ Auth::user()->prenom_user }}">
                            </div>
                            <div class="txtb" hidden>
                              <label>Telephone : </label>
                              <input type="number" name="telephone" required placeholder="Enter Votre Numero" value="{{ Auth::user()->num_tele_user }}">
                            </div>
                            <div class="txtb" hidden>
                               <label>Email :</label>
                               <input type="email" name="email" required placeholder="Enter Votre Email" value="{{ Auth::user()->email }}">
                            </div>
                            <div class="txtb">
                              <label>Message :</label>
                              <input type="text" name="message" required placeholder="Votre reponse..." >
                           </div>
                           <input type="submit" class="btn btn-success">
                    </form>
                      
                
                  </div>
                </div>
              </div>
            </div> 
          </div>
         
    @endforeach
    <form method="post" action="{{route('Message_boite.destroy',['Message_boite' => $message->id])}}">
      @csrf
      @method('DELETE')
      <input type="hidden" id="delete" name="delete" value="0">
      <input type="submit" class="btn btn-outline-danger btn-sm float-right" value="Supprimer tous les messages">
      
    </form>

@else 
    <!-- si la boite message et vide on affiche le contenue suivant -->
    <div class="card-body">
    <div class="card">
      <div class="card-body textleft">
        <h5 class="card-title"> Vide</h5>
        <p class="card-text">Vous n'avez aucun message pour le moment !</p>
      </div>
    </div>
    </div>   
@endif
       
      </div>
     </div>
    </div>
  </div>

    <!-- End Posts Section -->

    <script src={{ asset("js/site/bootstrap.js") }}></script>


@endsection