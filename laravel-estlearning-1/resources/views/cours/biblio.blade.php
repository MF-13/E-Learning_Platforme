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

                  <div class="col-lg-12">

                    <div class="card text-center cardpadding">

                      <div class="card-body">

                        <div class="media">

                          <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

                            <div class="media-body">      

                            

                         <!--  /*l'affichage ici*/ -->


                             <h4 class="mt-0">Nom fichier</h4>

                             <p class="pmedia">

                              <ul class="pmedia mylist">

                              <li><b>Publier le :</b> date_ajoute</li>

                              <br>
                              <form class="formbutton" method="post" action="cours-detail.php">
                                <input type="hidden" name="file" value=".$file.">
                                <input type="hidden" name="dir" value=".$devdir.">
                                <button type="submit" class="btn btn-outline-primary btnmarging">Consulter...</button>
                              </form>

                              </ul></p>

                              <!-- /*Telecharger le fichier*/ -->

                             
                                      <form class="formbutton" action="traitement/downloadfile.php" method="post">
                                          <input type="hidden" name="file" value="'.$file.'">
                                          <input type="hidden" name="dir" value="'.$devdir.'">
                                          <button type="submit" class="btn btn-outline-primary btnmarging"> Telecharger</button>
                                     </form>


                              

           <!-- si c'est un professeur -->
              <form class="formbutton" action="traitement/dropfile.php" method="post">
                  <input type="hidden" name="file" value="'.$file.'">
                  <input type="hidden" name="dir" value="'.$devdir.'">
                  <button type="submit" class="btn btn-outline-danger btnmarging">Supprimer</button>
              </form> 

                  </div>

                  </div>

                  </div>

                  </div>

                  </div>

                  </div>

                  </div>
                  <hr></div>



<!--Fotter,script and Contact form-->

</section>

       
@endsection