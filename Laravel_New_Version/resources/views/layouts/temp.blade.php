<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href={{ asset("css/site/bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/Style_NF.css") }}>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    
    @yield('css')

    <title> @yield('title') </title>
</head>
<body>  
   
 <!-- Nav BAR -->
<header class="navbar">
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">

    <a class="navbar-brand" href="index.php"><img src="\storage\images\img\index\logo.png" width="45" height="45" class="d-inline-block align-top" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">

        <li class="nav-item ">

          <a class="nav-link" href="{{ url('/') }}">Acceuil</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href=" {{ url('/Field') }} ">Filiére</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href=" {{ url('/cour') }} ">Cours</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="{{ url('/bibliotheque') }}">Bibliotheque</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="{{ url('/contact') }}">Contactez-Nous</a>

        </li>

      </ul>

      {{-- Formulaire de sign in et sign up et deconnexion --}}
      <!-- Le cotées droit du NACBAR -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        {{-- Si un Visiteur affiche les buttons de login et demande --}}
        @guest
            <li class="nav-item">
                <a class="btn btn-outline-success btnmarging" style="margin: 5px" href="{{ route('login') }}">{{ __('Connecter') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="btn btn-outline-success btnmarging" style="margin: 5px" href="{{ route('register') }}">{{ __('Engistrer') }}</a>
                </li>
            @endif
        @else
        {{-- Si un Utilisateur est connecter --}}
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{-- Afficher le nom et le prenom de l'utilisteur connecter --}}
                  <i class="fas fa-user"></i>&nbsp;{{ Auth::user()->nom_user }}&nbsp;{{ Auth::user()->prenom_user }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  {{-- Si L'utilisateur est un ADMIN --}}
                  @if(Auth::user()->type_user=="admin")
                    <a class="dropdown-item" href="{{route('dashbord.index')}}">{{ __('Dashboard') }}</a>
                  @endif 
                    <a class="dropdown-item" href="{{route('user.show',['user'=>Auth::user()->id])}}">{{ __('Profile') }}</a>
                    {{-- Traitement Button de deconnexion --}}
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Déconnexion') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    {{-- END Traitement Button de deconnexion --}}
                </div>
            </li>
        @endguest
    </ul>
    </div>
  </nav>        
</header>
<!-- End NAV BAR -->
<body>
  <div class="body mt-5" >
    <div class="status" style="margin-top: 50px;">
      @if(session()->has('status'))
          <div class="alert alert-success">
            <i class="far fa-check-square"></i> L'opération s'effectue avec <strong>Success!</strong>&nbsp;{{session()->get('status')}}
          </div>
        @endif

    </div>
    {{-- Espace Du <Code></Code> --}}
@auth
    @if(Auth::user()->verify==null ||Auth::user()->verify=='false')
          @php
          
            redirect('/')->with('status','Attendez jusqu\'a l\'activation de votre compte') 
          @endphp
    @else
        @yield('content') 

    @endif
@else
    @yield('content') 
@endauth
 </div>
</body>

<footer>
  <section class="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-4 ">
          <div>
            <h5>Menu</h5>
          </div>
          <ul class="mylist fixUl">
            <li><a href="{{url('/Field')}}" class="aa" >Filiére</a></li><br>
            <li><a href="{{url('/cour')}}"  class="aa" >Cours</a></li><br>                                  
            <li><a href="{{url('/contact')}}" class="aa" >Contact</a></li><br>
            {{-- Si un Utilisateur est connecter --}}
            @auth
            <li><a href="{{route('user.show',['user'=>Auth::user()->id])}}" class="aa" >Profile</a></li><br>               
            @endauth
          </ul>                      
        </div>                                        

        <div class="col-sm-12 col-md-12 col-lg-4">
          <h5>Liens utiles</h5>                                     
          <ul class="mylist fixUl">      
            <li>
              <a href="http://www.est-umi.ac.ma" class="aa"  target="_blank">ESTM</a>
            </li><br>          
            <li>
              <a href="http://www.umi.ac.ma" class="aa" target="_blank">UMI</a>
            </li><br>
            <li>
              <a href="http://https://www.enssup.gov.ma/fr" class="aa" target="_blank">Ministere de l'education</a>
            </li>                                                 
          </ul>                                                 
        </div> 

      {{-- Partie avis --}}
        <div class="col-sm-12 col-md-12 col-lg-4 ">
          <div>
            <h5>Donnés Votre Commentaire</h5>
          </div>
          <ul class="mylist fixUl">
          <form action="{{route('comment.store')}}" method="POST">
            @csrf
            @auth
              <li><input type="text" hidden name="nom" class="form-control" placeholder="Votre Nom" required value="{{ Auth::user()->nom_user }} {{ Auth::user()->prenom_user }}"></li><br>
              <li><input type="text" hidden name="email" class="form-control" placeholder="Votre Gmail" required value="{{ Auth::user()->email }}"></li><br> 
            @else
              <li><input type="text" name="nom" class="form-control" placeholder="Votre Nom" required></li><br>
              <li><input type="text" name="email" class="form-control" placeholder="Votre Gmail" required></li><br>  
            @endguest                               
            <li><textarea class="form-control" name="opinion" id="exampleFormControlTextarea1" rows="3" placeholder="Votre Opinion ..." required></textarea></li><br>
            <li><button type="submit" name="submit" class="btn btn-warning float-right" class="aa">Envoyer</button></li><br>               
          </form>
          </ul>                      
        </div>  
      {{-- END Partie avis --}}

      </div>
    <div>
      <p class="myText">Copyright © EST-Learning <?php echo "2019-".date("Y"); ?> - Tous droits réservés.</p>
    </div>
  </div>
</section>
<!-- End Footer -->

<!-- Top buttons -->    
  <button type="button" id="btnScroll" class="btn btn-warning" onclick="toUp()"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i></button>
<!-- End top buttons -->
{{-- Les scripts --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src={{ asset("js/site/bootstrap.js") }}></script>

    <script src={{ asset("js/site/footer.js") }}></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</footer>
</html>