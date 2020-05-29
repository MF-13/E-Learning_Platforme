<!DOCTYPE html>

<html lang="en" dir="ltr">

  <head>

    <meta charset="utf-8">

    <title>Contactez-Nous</title>

    

      <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href={{ asset("css/site/bootstrap.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/contact-us.css") }}>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    

  </head>

  <body>



  <div class="contact-form">

  <form action="{{route('contact.store')}}" method="POST">
      @csrf
      
      <h1>Contactez Nous</h1>
        <div class="txtb" hidden>
          
          {{-- les donnes de ladmin --}}
          <input type="hidden" name="id_admin" required  value="1">
          <input type="hidden" name="email_admin" required  value="admin@gmail.com">
        </div>
        @auth

        <div class="txtb" hidden>
              <label hidden>Nom Complet : </label>

              <input type="hidden" name="id" required  value="{{ Auth::user()->id }}">
            
              <input type="text" name="nom" hidden required placeholder="Enter Votre Nom" value="{{ Auth::user()->nom_user }} {{ Auth::user()->prenom_user }}">
        </div>
        

        <div class="txtb" hidden>

              <label>Telephone : </label>

              <input type="number" name="telephone" required placeholder="Enter Votre Numero" value="{{ Auth::user()->num_tele_user }}">
        </div>

        <div class="txtb" hidden>

            <label>Email :</label>

            <input type="email" name="email" required placeholder="Enter Votre Email" value="{{ Auth::user()->email }}">
        </div>
        @else
        <div class="txtb">

          <label>Nom Complet : </label>
          <input type="hidden" name="id" required  value="0">

          <input type="text" name="nom" required placeholder="Enter Votre Nom">
      </div>

      <div class="txtb">

            <label>Telephone : </label>

            <input oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
            type = "number" maxlength = "9" name="telephone" placeholder="Entrer votre numero">
      </div>

      <div class="txtb">

          <label>Email :</label>

          <input type="email" name="email" required placeholder="Enter Votre Email"">
      </div>
      
        @endauth

        <div class="txtb">

          <label>Message :</label>
  
          <textarea class="txttb" name="message" required placeholder="Enter Votre Message"></textarea>
  
        </div>
        <input type="submit" name="submit" class="btn" value="Envoyer">

  </form>

    <a class="retourn" href="{{ route('index') }}">Retourner a l'acceuil</a>

  </div>
  


  </body>

</html>