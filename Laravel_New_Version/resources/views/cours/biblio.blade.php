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
                    {{-- Affichage les fichier de type Bibliotheque --}}
                    @foreach ($files as $file)
                      
                    <div class="card text-center cardpadding">

                      <div class="card-body">

                        <div class="media">

                          <img src="\images\img\cours espace\pdf.png" class="align-self-start mr-3 pdfsize" alt="pdf png image">

                            <div class="media-body">      

                            <h4 class="mt-0">{{$file->titre}}</h4>

                             <p class="pmedia">

                              <ul class="pmedia mylist">

                              <li><b>Publier le :</b>{{$file->date_ajoute}}</li>
{{-- Consulter button ?????????????????????? --}}
                              {{-- <br>
                              <form class="formbutton" method="post" action="cours-detail.php">
                                <input type="hidden" name="file" value=".$file.">
                                <input type="hidden" name="dir" value=".$devdir.">
                                <li><button type="submit" class="btn btn btn-primary btn-sm float-left">Consulter...</button></li>
                              </form>

                              </ul></p> --}}
                            {{-- Need Traitement --}}
                              <!-- /*Telecharger le fichier*/ -->
                                <form class="formbutton" action="traitement/downloadfile.php" method="post">
                                  <input type="hidden" name="file" value="'.$file.'">
                                  <input type="hidden" name="dir" value="'.$devdir.'">
                                  <button type="submit" class="btn btn-outline-success btnmarging"><i class="fas fa-download"></i> Telecharger</button>
                                </form>
                                <!-- si L'utilisateur est un professeur -->
                                @if (Auth::user()->type_user == 'professeur')
                                    <!-- L'accées De Supprimer le fichier -->
                                    <form class="formbutton" action="{{ route('cour.destroy', ['cour' => $file->id ]) }}" method="POST"">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-outline-danger btnmarging"><i class="fas fa-trash"></i> Supprimer</button>
                                    </form>
                                @endif      
                              </div>
                              </div>
                              </div>
                              </div>
                              <hr>
                    @endforeach
</div>
</div>
</div>
</div>
</section>

       
@endsection