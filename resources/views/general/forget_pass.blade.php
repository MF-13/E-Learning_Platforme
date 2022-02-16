<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href={{ asset("css/site/bootstrap.css") }}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset("css/site/forget_pass.css") }}>
    <title>Récupération de mot de passe</title>
</head>
<body class="text-center">
  <div class="container">
    {{-- Need Traitement --}}
    {{-- Envoyer L'email Pour Récupérer Le Mot De Passe --}}
    <form class="form-signin">
      <i class="fas fa-lock fa-6x margingbuttom"></i>
      <h1 class="h3 mb-3 font-weight-normal margingbuttom">Mot de passe oublié ?</h1>
      <p class="margingbuttom">Si vous oubliez le mot de passe , Contactez votre administration .</p>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control margingbuttom" placeholder="Email address" required="" autofocus="">
      <button class="btn btn-lg btn-primary btn-block margingbuttom" type="submit">Envoyez</button>
      <p class="mt-5 mb-3 text-muted">Copyright ©  <?php echo '<a href="index.php"> E-Learning</a> '; echo "2019-".date("Y")."<br>"; ?> - Tous droits réservés -</p>
    </form>
  </div>

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <script src={{ asset("js/site/bootstrap.js") }}></script>
  
  </body>
</html>