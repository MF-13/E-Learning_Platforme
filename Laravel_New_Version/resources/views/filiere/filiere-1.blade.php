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
              {{-- hadi katsed hiya lewla 9bel mn div li class dialha card hya li dayra lmochkil --}}
          <div class="col-lg-12 col-md-12 col-sm-12"> 
            <!-- card -->
            {{-- the first foreach for the departements --}}
            <?php $inc=0; ?>
            @while($inc < $dept_nbr)
                @foreach ($fields as $dept)
                    
                    <div class="card" style="margin-top: 100px; background-color: #eeeeee; border-style: none;">
                        <button class="accordion"><h3 class="titre">{{strtoupper($dept->departement)}}</h3> </button>

                    {{-- @for ($i = 0; $i < $fil_nbr[$inc]; $i++)
                    {{$filiere[$inc][$dept->departement][$i]}}<br>
                    {{$description[$inc][$dept->departement][$i]}}<br><hr>
                    @endfor --}}

                    @for ($i = 0; $i < $fil_nbr[$inc]; $i++)
                    
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
                                        <br><hr>
                                </div>
                            

                    @endfor
                    
                    
                    <?php $inc++; ?>
                @endforeach
            @endwhile
            </div>
          </div>
        </div>     
<!-- end card -->
<script src={{ asset("js/site/filiere.js") }}></script>

@endsection