<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

    <a class="navbar-brand" href="index.php"><img src="static/img/index/logo.png" width="45" height="45" class="d-inline-block align-top" alt=""></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav mr-auto">

        <li class="nav-item ">

          <a class="nav-link" href="{{ url('/') }}">Acceuil</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href=" {{ url('/filiere') }} ">Filiére</a>

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
    </div>
  </nav>        
</header>

  <!-- End NAV BAR -->

  <div class="status">
    {{-- Traitement pour ajouter la partie de alert de succes ou de  error --}}
    @if(session()->has('status'))
       <p class="alert alert-succes">{{ session()->get('status') }}</p>
    @endif
  
  </div>


  <div class="body mt-5" >
  
     @yield('content') 
  
  </div>


 
    

</body>
<footer>

  <!-- Footer -->

  <section class="footer">

    <div class="container">

      <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-4 ">

          <div>

            <h5>Menu</h5>

          </div>

          <ul class="mylist fixUl">

            <li><a href="filiere-1.php" class="aa" >Filiére</a></li><br>

            <li><a href="cours-espace.php"  class="aa" >Cours</a></li><br>                                  

            <li><a href="contact-us.php" class="aa" >Contact</a></li><br>

            <li><a href="profile.php" class="aa" >Profile</a></li><br>               

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
      <div class="col-sm-12 col-md-12 col-lg-4 ">
        <div>
          <h5>Donnés Votre Commentaire</h5>
        </div>
        <ul class="mylist fixUl">
          <li><input type="text" class="form-control" placeholder="Votre Nom"></li><br>
          <li><input type="text" class="form-control" placeholder="Votre Gmail"></li><br>                                  
          <li><textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre Opinion ..."></textarea></li><br>
          <li><button type="button" class="btn btn-warning float-right" class="aa">Envoyer</button></li><br>               
        </ul>                      
      </div>                                                                                        

      </div>

      <div>

        <p class="myText">Copyright © EST-Learning <?php echo "2019-".date("Y"); ?> - Tous droits réservés.</p>

      </div>

    </div>

  </section>

<!-- End Footer -->

<!-- Top buttons -->    

  <button type="button" id="btnScroll" class="btn btn-warning" onclick="toUp()"><i class="fa fa-arrow-circle-up fa-2x" aria-hidden="true"></i>

  </button>

<!-- End top buttons -->

 <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src={{ asset("js/site/bootstrap.js") }}></script>
    <script src={{ asset("js/site/footer.js") }}></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</footer>
</html>