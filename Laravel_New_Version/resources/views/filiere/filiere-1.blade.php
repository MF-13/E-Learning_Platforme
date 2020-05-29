@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/filiere-1.css") }}>

@endsection

@section('title')
    filiere
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                {{-- CARD --}}

                @php
                    $inc=0;
                @endphp
                @while ($inc < $dept_nbr)
                    @foreach ($fields as $dept)
                        <div class="card" style="margin-top: 100px; background-color: #eeeeee; border-style: none;">
                            <button class="accordion"><h3 class="titre">{{strtoupper($dept->departement)}}</h3></button>
                            
                            @for ($i = 0; $i < $fil_nbr[$inc]; $i++)
                                <div class="panel">
                                    <img src="static/img/index/filiere/{{$filiere[$inc][$dept->departement][$i]}}.png" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{$filiere[$inc][$dept->departement][$i]}}</h5>
                                        <p class="card-text">{{$description[$inc][$dept->departement][$i]}}</p>
                                        <p class="card-text"><strong>Cours de la filiere : </strong></p>
                                        <ul>
                                            <li>cours n1</li>
                                            <li>cours n2</li>
                                            <li>cours n3</li>
                                        </ul>
                                    </div>
                                </div>
                            @endfor

                        </div>
                        @php
                            $inc++;
                        @endphp
                    @endforeach
                @endwhile

                {{-- END CARD --}}
            </div>
        </div>
    </div>
<script src={{ asset("js/site/filiere.js") }}></script>

@endsection