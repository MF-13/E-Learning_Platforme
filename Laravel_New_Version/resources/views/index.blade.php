@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/Style_NF.css") }}>
@endsection

@section('title')
    Index
@endsection


@section('content')

<!-- Wall -->
<article id="myinfo">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="\storage\images\img\index\wall\2.jpg" class="d-block w-100" alt="..." height="700px">
        <div class="carousel-caption d-none d-md-block">
          <h4>Palataforme E Learning</h4>
          <p>L'université Moulay Ismail lance sa plateforme d'enseignement à distance . </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="\storage\images\img\index\wall\1.jpg" class="d-block w-100" alt="..." height="700px">
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
      <div class="carousel-item">
        <img src="\storage\images\img\index\wall\3.jpg" class="d-block w-100" alt="..." height="700px">
        <div class="carousel-caption d-none d-md-block"></div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    {{-- END cursor TRAITEMENT --}}

</article>
<!-- End wall WALL TRAITEMENT-->

<!-- Carctéristique --> 
<section class="caracteristique">
  <div class="container ">
    <div class="row">
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="row rowmarging">
          <div class="col-4"><i class="fas fa-history fa-4x"></i></div>
          <div class="col-8 pstyle paddingcara">Accés illimité</div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="row rowmarging">
          <div class="col-4"><i class="far fa-file-pdf fa-4x"></i></div>
          <div class="col-8 pstyle paddingcara">Nombreux fichiers</div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-12 col-md-6">
        <div class="row rowmarging">
          <div class="col-4"><i class="fab fa-creative-commons-nc fa-4x"></i></div>
          <div class="col-8 pstyle paddingcara">Contenu gratuit</div>
        </div>
      </div>
    </div>
  </div>
</section>   
<!-- End Carctéristique -->

<!-- Relation -->

<section class="relation">
  <div class="container">
    <div class="row relationrow">
      <div class="col-lg-3 col-md-3 col-sm-12 imgcentrer">
        <img src="\storage\images\img\index\logo-est-meknГЁs.png" alt="EST MEKNES" width="170" height="170">
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <p class="font-weight-bold relationpara">Cette plateforme a été créé en partenariat avec l'Université de Moulay Ismail - est Méknes pour fournir des ressources et des informations importantes et utiles aux personnes inscrites à l'université. </p>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-12 imgcentrer">
        <img src="\storage\images\img\index\logo.png" alt="E Learning logo" width="120" height="140">
      </div>
    </div>
  </div>
</section>
<!-- End Relation -->

<!-- Département Section -->
<section class="Departement">
  <div>
    <h4 class="myText white">ESTM Départements</h4>
    <br><br>
  </div>
  <div class="container">
    <div class="row">
      @php
        $inc=0;
      @endphp
      @while ($inc < $dept_nbr)
        @foreach($fields as $dept)
          <div class="col-lg-3 col-md-6 col-sm-12" style="min-width: 100%;  ">
            <div class="card">
              <img class="card-img-top" src="\storage\images\img\index\filiere\{{$dept->departement}}.png" alt="TCC" height="150">
              <div class="card-body">
                <h5 class="card-title">{{strtoupper($dept->departement)}}</h5>
                <p class="card-text">Filiére :<br>
                @for ($i = 0; $i < $fil_nbr[$inc]; $i++)
                  <ul>
                    <li>{{$filiere[$inc][$dept->departement][$i]}}</li>
                  </ul> 
                @endfor
                </p>
                <p class="card-text"><button type="button" class="btn btn-link"><a href="{{url('/Field')}}" >Plus...</a></button></p>
              </div>
            </div>
          </div>
          @php
            $inc++;
          @endphp
        @endforeach
      @endwhile
    </div>
  </div>
</section>
<!-- End Département section -->

<!-- Comtact section -->
<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13253.011846027564!2d-5.5799945!3d33.8573711!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x227685e2846b5a39!2sEcole%20Sup%C3%A9rieure%20de%20Technologie!5e0!3m2!1sfr!2sma!4v1581183400398!5m2!1sfr!2sma" width="330" height="250" frameborder="0" allowfullscreen=""></iframe>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-6 ">
        <ul class="mylist myBtoo">
          <li>Address:  Km 5, Rue d'Agouray، N6, Meknes 50040</li>
          <li>Tel : 05 35 46 70 85</li>
          <li>Tel : 05 35 46 70 86</li>
          <li>Email : estm@est-umi.ac.ma</li>
          <br>
          <li>
            <a href="https://www.facebook.com/ESTMEKNES2017/?fref=ts"  target="_blank"><i class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>
            <a href="https://twitter.com/umi_meknes?lang=fr"  target="_blank"><i class="fab fa-twitter-square fa-3x" aria-hidden="true"></i></a>
          </li>
          <br>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection