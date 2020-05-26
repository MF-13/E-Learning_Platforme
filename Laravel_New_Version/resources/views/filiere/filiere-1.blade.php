@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/filiere-1.css") }}>

@endsection

@section('title')
    filiere
@endsection


@section('content')
    <div class="container" >
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12">
            <!-- card -->
             @foreach ($fields as $field)
                <div class="card" style="margin-top: 100px; background-color: #eeeeee; border-style: none;">
                    <button class="accordion"><h3 class="titre">{{strtoupper($field->departement)}}</h3> </button>
                        <div class="panel">
                            <img src="static/img/index/filiere/{{$field->filiere}}.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$field->filiere}}</h5>
                                    <p class="card-text">{{$field->filiere_description}}</p>
                                    <p class="card-text"><strong>Cours de la filiere : </strong></p>
                                    <ul>
                                {{-- cours from classes --}}
                                {{-- ???????????????????????????????? --}}
                                        <li>cours n1</li>
                                        <li>cours n2</li>
                                        <li>cours n3</li>
                                    </ul>
                                    <br><hr>
                            </div>
                        </div>
                </div>
            @endforeach
<!-- end card -->
          </div>
        </div>
    </div>     


<script src={{ asset("js/site/filiere.js") }}></script>

@endsection