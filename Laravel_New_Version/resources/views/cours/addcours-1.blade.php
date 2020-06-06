@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/addcours.css") }}>
@endsection

@section('title')
    Ajouter un Cour
@endsection

@section('content')
 
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <div class="card text-center" style="margin-top: 60px; margin-bottom: 20px">
                <div class="card-header">Ajouter le cours</div>
                <div class="card-body">
                    <form  method = "POST" action ="{{route('cour.store')}}" enctype = "multipart/form-data">
                        @csrf
                            <div class="form-group">

                                <input type="hidden" name="code_prof" value="{{Auth::user()->id}}" class="form-control"  aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" hidden>

                                <label  for="titre">Titre cours</label>
                                <input type="text" name="titre" class="form-control" id="titre" placeholder="ex. langage C" >

                                <label for="userfile" class="textleft"> Choisir le fichier(<strong>taille max :  500mb</strong>)</label>
                                <input name = "userfile" type="file" class="form-control " id="userfile">

                                {{-- <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">Choissir une image </span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" name="userfile"  class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" >
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </div> --}}

                                <br>
                                
                                <label for="type_cour" class="textleft"> Type de Cour</label>
                                <select name="type_cour" class="form-control" id="exampleFormControlSelect1">
                                    <option value="cour">cour</option>
                                    <option value="tp">tp</option>
                                    <option value="td">td</option>
                                    <option value="bibliotheque">bibliotheque</option>
                                </select>
                                    
                                <label for="cour">Cours</label>
                                <select name="cour" class="form-control" id="cour">
                                    <option value="bibliotheque">Bibliotheque</option>
                                     @foreach ($cours as $cour)
                                        <option value="{{strtolower($cour)}}">{{strtolower($cour)}}</option>
      	                            @endforeach
                                </select>

                                <label for="commentaire">Commentaire</label>
                                <textarea name="commentaire"  class="form-control" id="commentaire" rows="3"></textarea>

                                @if($errors->any())
                                    <br>
                                    <ul style="color: red; text-align: left">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif

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