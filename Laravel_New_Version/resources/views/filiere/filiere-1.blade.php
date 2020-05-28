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
            {{-- the first foreach for the departements --}}
             @foreach ($fields as $dept)

                <div class="card" style="margin-top: 100px; background-color: #eeeeee; border-style: none;">
                <button class="accordion"><h3 class="titre">{{strtoupper($dept->departement)}}</h3> </button>
                
                {{-- {{ print_r($filiere['filiere'])  }} --}}
                <?php 
                    $i=0;
                ?>
                @foreach ($filiere as $ff)
                    
                    <?php 
                        dd($filiere);
                        echo $ff[0][$i]['filiere'];
                        $i++;
                    ?>

                @endforeach  
                         
                    
                    {{-- @foreach ($fil as $field)
                        <div class="panel">
                            <img src="static/img/index/filiere/{{$field->filiere}}.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{$field->filiere}}</h5>
                                    <p class="card-text">{{$field->filiere_description}}</p>
                                    <p class="card-text"><strong>Cours de la filiere : </strong></p>
                                    <ul>
                                {{-- cours from classes --}}
                                {{-- ???????????????????????????????? --}}
                                        {{-- <li>cours n1</li>
                                        <li>cours n2</li>
                                        <li>cours n3</li>
                                    </ul>
                                    <br><hr>
                            </div>
                        </div>
                    @endforeach --}} 

                </div>

            @endforeach
<!-- end card -->
          </div>
        </div>
    </div>     


<script src={{ asset("js/site/filiere.js") }}></script>

@endsection