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
        @foreach ($messages as $message)
        @if ($message->recepteur_id == Auth::user()->id)
          <div class="card-body">
            <div class="card">
              <div class="card-body textleft">
                <h5 class="card-title">L'expéditeur : {{$message->emetteur_nom}}</h5>
                <h6 class="card-subtitle mb-2 text-muted"> {{$message->emetteur_email}}</h6><br>
                <p class="card-text">Message : {{$message->message}}</p>
                {{-- Supprimer Le Message --}}
                <form method="post" action="{{route('Message_boite.destroy', ['Message_boite' => $message->id])}}">
                  <!-- input hidden pour envoyer l'id du msg en tout securiter et la valeur c'est l'id du message-->
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-outline-danger btn-sm float-right"><i class="fas fa-trash-alt"></i> Supprimer</button>
                </form>
                <p class="text-muted">{{$message->date_env}}</p>
              </div>
            </div>
          </div>
        {{-- @else --}}
        <!-- si la boite message et vide on affiche le contenue suivant -->
        {{-- <div class="card-body">
          <div class="card">
            <div class="card-body textleft">
              <h5 class="card-title"> Vide</h5>
              <p class="card-text">Vous n'avez aucun message pour le moment !</p>
            </div>
          </div>
        </div> --}}
        {{-- @break--}}
        @endif 
        {{-- @empty($message)
         <!-- si la boite message et vide on affiche le contenue suivant -->
         <div class="card-body">
          <div class="card">
            <div class="card-body textleft">
              <h5 class="card-title"> Vide</h5>
              <p class="card-text">Vous n'avez aucun message pour le moment !</p>
            </div>
          </div>
        </div>    
        @endempty  --}}
        
          @endforeach
      </div>
     </div>
    </div>
  </div>

    <!-- End Posts Section -->

    <script src={{ asset("js/site/bootstrap.js") }}></script>


@endsection