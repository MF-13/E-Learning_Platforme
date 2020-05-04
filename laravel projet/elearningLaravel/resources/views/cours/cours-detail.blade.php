@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/cours-espace.css") }}>
@endsection

@section('title')
    Cours details
@endsection


@section('content')

    
    <div class="pmedia" style=" text-align: center; ">

          <iframe src="path du fichier" class="frame" ></iframe>

          <br><br>

    

                <ul class="pmedia mylist">

                  <li><b>Publier le :</b> date_ajoute</li>

                      <li><b>Commentaire : </b>commanteire</li>

                </ul><br><br>



      <a href="path du fichier" download><button class="btn btn-danger">telecharger</button></a></div><br>



    
@endsection