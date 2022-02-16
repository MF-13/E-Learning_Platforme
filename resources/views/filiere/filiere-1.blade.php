@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/filiere-1.css") }}>

@endsection

@section('title')
    Filiére Information
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                {{-- CARD --}}
                @php
                    $inc=0;
                    $c = 0;
                    $count=0;
                @endphp
                @while ($inc < $dept_nbr)
                    @foreach ($fields as $dept)
                        <div class="card" style="margin-top: 100px; background-color: #eeeeee; border-style: none;">
                            <button class="accordion"><h3 class="titre">{{strtoupper($dept->departement)}}</h3></button>
                            <div class="panel">
                            <img src="\storage\images\img\index\filiere\{{$dept->departement}}.png" class="card-img-top" alt="...">
                            @for ($i = 0; $i < $fil_nbr[$inc]; $i++)
                                <div class="card-body">
                                    <h5 class="card-title">{{$filiere[$inc][$dept->departement][$i]}}</h5>
                                    <p class="card-text">{{$description[$inc][$dept->departement][$i]}}</p>
                                    <p class="card-text"><strong>Les Modules du filiere : </strong></p>
                                        <ul>
                                            @php
                                                $j=0;
                                            @endphp
                                            @while($j<$cour_nbr[$count])
                                                <li>{{$cours[$c]}}</li>    
                                                @php
                                                    $c++;
                                                    $j++;
                                                @endphp    
                                            @endwhile
                                        </ul>
                                </div>
                                @php
                                    $count++;
                                @endphp
                            @endfor
                            </div>
                        </div>
                        @php
                            $inc++;
                        @endphp
                    @endforeach
                @endwhile
                {{-- END Card --}}
            </div>
        </div>
    </div>
    
<script src={{ asset("js/site/filiere.js") }}></script>

@endsection