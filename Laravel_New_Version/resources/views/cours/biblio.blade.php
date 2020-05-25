@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/biblio.css") }}>
@endsection

@section('title')
    Biliotheque
@endsection


@section('content')

   

<!--Selection des fichiers a afficher-->

 <section class="Posts">

      <p class="Text">Bibliotheque</p>


        <div id="td" class="tabcontent">

          <hr>

   

              <div class="container">

                <div class="row">

                  <div class="col-lg-12 col-md-12 col-sm-12">

                    @foreach ($files as $file)
                        
                    

                    <div class="card text-center cardpadding">

                      <div class="card-body">

                        <div class="media">

                          <img src="\images\img\cours espace\pdf.png" class="align-self-start mr-3 pdfsize" alt="pdf png image">

                            <div class="media-body">      

                            

                         <!--  /*l'affichage ici*/ -->


                            <h4 class="mt-0">{{$file->titre}}</h4>

                             <p class="pmedia">

                              <ul class="pmedia mylist">

                              <li><b>Publier le :</b>{{$file->date_ajoute}}</li>
{{-- Consulter button ?????????????????????? --}}
                              <br>
                              <form class="formbutton" method="post" action="cours-detail.php">
                                <input type="hidden" name="file" value=".$file.">
                                <input type="hidden" name="dir" value=".$devdir.">
                                <li><button type="submit" class="btn btn btn-primary btn-sm float-left">Consulter...</button></li>
                              </form>

                              </ul></p>

                              <!-- /*Telecharger le fichier*/ -->
        {{-- $file $devdir ?????????????????                       --}}
                                <form class="formbutton" action="traitement/downloadfile.php" method="post">
                                  <input type="hidden" name="file" value="'.$file.'">
                                  <input type="hidden" name="dir" value="'.$devdir.'">
                                  <button type="submit" class="btn btn-outline-success btnmarging"><i class="fas fa-download"></i> Telecharger</button>
                                </form>
                                <!-- si c'est un professeur -->
                                <form class="formbutton" action="traitement/dropfile.php" method="post">
                                  <input type="hidden" name="file" value="'.$file.'">
                                  <input type="hidden" name="dir" value="'.$devdir.'">
                                  <button type="submit" class="btn btn-outline-danger btnmarging"><i class="fas fa-trash"></i> Supprimer</button>
                                </form>       
        {{-- $file $devdir ?????????????????                       --}}                     

                              

           
                             
                  </div>

                  </div>

                  </div>

                  </div>

                  </div>

                  </div>

                  </div>
                  <hr></div>
                  @endforeach
{{-- @php
    $devdir = "file/".Auth::user()->prenom_user;
    echo "$devdir";
@endphp --}}
                  

<!--Fotter,script and Contact form-->

</section>

       
@endsection