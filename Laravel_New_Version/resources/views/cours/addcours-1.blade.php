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

                <div class="card-header">Ajouter le cours</div>

                    <div class="card-body">

                        <form  method = "POST" action ="{{route('cour.store')}}" enctype = "multipart/form-data">
                            @csrf
                                <div class="form-group">

                                    <input type="hidden" name="code_prof" value="{{Auth::user()->id}}" class="form-control" required" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" hidden>

                                    <label  for="titre">Titre cours</label>

                                    <input type="text" name="titre" class="form-control" id="titre" placeholder="ex. langage C" required>

                                

                                    <label for="userfile" class="textleft"> Choisir le fichier(<strong>taille max :  500mb</strong>)</label>

                                    <input name = "userfile" type="file" class="form-control-file " id="userfile">

                                    <br>

                                
                                    <label for="type_cour" class="textleft"> Type de Cour</label>
                                    <select name="type_cour" class="form-control" id="exampleFormControlSelect1">
                                        <option>cour</option>
                                        <option>tp</option>
                                        <option>td</option>
                                        <option>bibliotheque</option>
                                    </select>
                                    
                                    <label for="cour">Cours</label>
                                    <select name="cour" class="form-control" id="cour">
                                        
                                        <option value="bibl">bibliotheque</option>
                                        @foreach ($cours as $cour)
                                            <option value="{{strtolower($cour)}}">{{strtolower($cour)}}</option>
      	                                @endforeach
                                    </select>

                                    <label for="commentaire">Commentaire</label>

                                    <textarea name="commentaire" required="required" class="form-control" id="commentaire" rows="3"></textarea>

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