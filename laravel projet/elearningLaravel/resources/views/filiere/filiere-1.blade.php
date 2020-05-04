@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/filiere-1.css") }}>

@endsection

@section('title')
    filiere
@endsection


@section('content')

    


    <div class="container" >

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <!-- card -->

                  

<div class="card" style="margin-top: 100px; background-color: #eeeeee; border-style: none;">';

    <button class="accordion"><h3 class="titre">Departement de la filiere</h3> </button>

            <div class="panel">

              <img src="static/img/index/filiere/nom du departement.png" class="card-img-top" alt="...">';


        <div class="card-body">';

          <h5 class="card-title">filiere nom</h5>

            <p class="card-text">description de la filiere</p>

               <p class="card-text"><strong>Cours de la filiere : </strong></p>

              <ul>

                  <li>cours n1</li>
                  <li>cours n2</li>
                  <li>cours n3</li>

              </ul>
              <br><hr>


          </div>

            
    </div>
</div>

<!-- end card -->

              

         

          </div>

          </div>

        </div>     

</body>

<footer>

    <!-- footer include -->

</footer>



<script>

          var acc = document.getElementsByClassName("accordion");

          var i;



          for (i = 0; i < acc.length; i++) {

            acc[i].addEventListener("click", function() {

              this.classList.toggle("active");

              var panel = this.nextElementSibling;

              if (panel.style.display === "block") {

                panel.style.display = "none";

              } else {

                panel.style.display = "block";

              }

            });

          }

          </script>

@endsection