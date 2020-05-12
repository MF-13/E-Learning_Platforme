@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/index.css") }}>
    <link rel="stylesheet" href={{ asset("css/site/cours-espace.css") }}>
@endsection

@section('title')
    cours espace
@endsection


@section('content')



    <!-- Type Donnes Section -->

    <ul class="nav nav-pills nav-fill tab">

      <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'cour')" id="defaultOpen" style="padding-left: 50px; padding-right: 50px;">Cours</button>

      </li>

      <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'tp')" style="padding-left: 50px; padding-right: 50px;" >TP</button>

      </li>

      <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'td')" style="padding-left: 50px; padding-right: 50px;">TD</button>

      </li>

      <li class="nav-item">

        <button type="button" class="btn btn-link tablinks" onclick="openCity(event, 'quiz')"  style="padding-left: 50px; padding-right: 50px;">Quiz</button>

      </li>

    </ul>

    <div style="padding-left: 40%">

                <br>
                  <!-- pour le professeur -->
                <a href="{{url('/cours/addquiz')}}" class="btn btn-info" >Ajouter Quiz</a>
                <a href="{{url('/cours/addcours-1')}}" class="btn btn-info">Ajouter cours</a>

                

    <!-- Type Donnes Section -->

    <!--Selection des fichiers a afficher-->

  <section class="Posts">

    <p class="Text"> Fichiers pour filiere : nom filiere</p>

    
      

      <div id="type_cour" class="tabcontent">

      <hr>



          <div class="container">

            <div class="row">

              <div class="col-lg-12 col-md-12 col-sm-12">

                <div class="card text-center cardpadding">

                  <div class="card-body">

                    <div class="media">

                      <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

                        <div class="media-body">      

                        
                          <!-- traitement depuis la base de donnes -->
        <h4 class="mt-0">type cour : nom cour</h4>

        <p class="pmedia">

                <ul class="pmedia mylist">

                  <li><b>Nom Cour:</b> nom cour</li>

                  <li><b>commantaire:</b> commantaire</li>

                  <li><b>Publier le :</b> date_ajoute</li>
                    <!-- devdir = direction du fichier \\\  file = nom du fichier -->
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

        ';

        

        <!-- si c est un professeur -->
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


 

  



  <!-- ***************************************

                   traitement pour QUIZ                    

 *******************************************-->

      <div id="quiz" class="tabcontent">";

        

       <!--  /* si c'est un etudiant*/ -->


                <div class="container">

                  <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12">

                      <div class="card text-center cardpadding">

                        <div class="card-body">

                          <div class="media">

                            <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

                              <div class="media-body"> 

                                <h4 class="mt-0">Quiz : nom quiz</h4>

                                <p class="pmedia">

                                  <ul class="pmedia mylist">

                                      <li><b>Réaliser par :</b> $nom_prof</li>

                                      <li><b>Publier le :</b>date_publication</li>

                                      <li><b>Dérniére date a faire :</b> dernier delai</li>

                                 <br>
                                    <form method="post" action="quiz.php">
                                      <input type="hidden" name="id" value="id du quiz">
                                      <button type="submit" class="btn btn-outline-danger btnmarging">Realiser le Quiz</button>
                                    </form>
                                  </ul>

                                </p>

                              </div>

                            </div>

                          </div>

                        </div>

                      </div>

                    </div>

              </div>

        



<!-- /*si c'est un professeur*/ -->


  <div class="container">

  <div class="row">

    <div class="col-lg-12 col-md-12 col-sm-12">

      <div class="card text-center cardpadding">

        <div class="card-body">

          <div class="media">

            <img src="static/img/cours espace/undraw_files1_9ool.svg" class="align-self-start mr-3 pdfsize" alt="pdf png image">

              <div class="media-body"> 
               
                <h4 class="mt-0">Quiz : nom quiz</h4>

                

                <p class="pmedia">

                  <ul class="pmedia mylist">

                    <li><b>Publier le :</b>date publication</li>

                    <li><b>Dérniére date a rendre :</b>dernier_delai</li>

                        <br>
                    <form method="post" action="quiz.php">
                
                      <input type="hidden" name="id" value="id quiz">
                      <button type="submit" class="btn btn-outline-danger btnmarging">Consulter</button>
                                  
                   </form>
                      

                  </ul>


                  <form method="post" action="traitement/dropquiz.php">
                
                      <input type="hidden" name="id" value="id quiz">
                      <button type="submit" class="btn btn-outline-danger btnmarging">Supprimer</button>
                                  
                   </form>


                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#'.$row['id_quiz'].'"

                   aria-expanded="false" aria-controls="collapseExample">

                    <i class="fas fa-sort-down fa-2x" style="padding-bottom: 10px;"></i> Etudiants Résultas

                  </button>';

                    <!-- /*result des etudiants  */ -->

                      <div class="collapse" id="id quiz">

                            <div class="card card-body">

                            <table class="table">

                                  <thead>

                                    <tr style="background-color: #393e46; color: white;">

                                      <th scope="col" style="text-align: center;">Nom d\'etudiant</th>

                                      <th scope="col" style="text-align: center;">Nombre des reponses correcte</th>

                                    </tr>

                                  </thead>

                                  <tbody>

                                  <tr>

                                    <td>nom etudiant</td>

                                    <td>resultat</td>

                           <!--si aucun etudian n' pas encore repondue <td>acune resultat est disponible pour le moment</td> -->

                  

                      </tbody>

                      </table>

                      </div>

                      </div>

                </p>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>

</div>

</div>


  </section>
  
  <script src={{ asset("js/site/cours-espace.js") }}></script>

  @endsection