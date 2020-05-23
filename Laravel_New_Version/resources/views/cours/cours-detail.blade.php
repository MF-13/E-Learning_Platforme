@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/cours-espace.css") }}>
@endsection

@section('title')
    Cours details
@endsection


@section('content')

<p class="Text"> Nom du cour : {{$classes->nom}}</p>
    <div class="pmedia" style=" text-align: center; ">

          <iframe src="path du fichier" class="frame" ></iframe>

          <br><br>

    

                <ul class="pmedia mylist">

                  <li><b>Publier le :</b> {{$classes->created_at}}</li>

                      <li><b>Commentaire : </b>{{$classes->description}}</li>

                </ul><br><br>



      <a href="path du fichier" download><button class="btn btn-danger">telecharger</button></a></div><br>



    
@endsection