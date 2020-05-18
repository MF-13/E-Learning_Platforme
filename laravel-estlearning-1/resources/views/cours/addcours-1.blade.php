@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/addcours.css") }}>
@endsection

@section('title')
    ADD COURS
@endsection


@section('content')

    <div class="container">

        <div class="row">

          <div class="col-lg-12 col-md-12 col-sm-12">

            <div class="card text-center">

                <div class="card-header">

                  Ajouter le cours

                </div>

                <div class="card-body">

                <form  method = "POST" action ="{{route('cour.store')}}" enctype = "multipart/form-data">
                    @csrf
                        <div class="form-group">

                            <label  for="nom">Titre cours</label>

                            <input type="text" name="nom" class="form-control" id="nom" placeholder="ex. langage C" required>

                           

                            <label for="exampleFormControlFile1" class="textleft"> Choisir le fichier(<strong>taille max :  500mb</strong>)</label>

                            <input name = "userfile" type="file" class="form-control-file " id="exampleFormControlFile1">

                            <br>

                           

                            <select name="type_cours" class="form-control" id="exampleFormControlSelect1">

                                <option>cour</option>

                                <option>tp</option>

                                <option>td</option>

                                <option>bibliotheque</option>

                            </select>

         <!--specifier le cour dans le quelle on va importer ce fichier-->

                            <label for="exampleFormControlSelect2">Cours</label>

                            <select name="cours" class="form-control" id="exampleFormControlSelect2">

                                <option>nom de cour 1 </option>
                                <option>nom de cour 2 </option>
                                <option>nom de cour 3 </option>
                                <option>bibliotheque </option>

                          

                            </select>

                            <label for="description">Commentaire</label>

                            <textarea name="description" required="required" class="form-control" id="description" rows="3"></textarea>

                            </div>

                            <div class="card-footer text-muted">

                                <div class="textright">

                                   <input type="submit" name="submit" class="btn btn-outline-info btn-sm" value="Ajouter">

                                 </div>

                            </div>

                      </form>

                </div>

                

            </div>

        </div>

    </div>

</div>

@endsection