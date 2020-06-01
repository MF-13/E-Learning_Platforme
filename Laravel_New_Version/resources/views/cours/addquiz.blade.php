@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/quiz.css") }}>
@endsection

@section('title')
   add quiz
@endsection


@section('content')
{{-- Need Traitement --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <h5 class="card-header">Ajouter le Quiz</h5>
                        <div class="card-body">
    @php
        if(isset($_POST['number'])){
            if (empty($_POST['number'])){
                redirect('/user');
            }
        
        $n = $_POST['number'];
    
    // {{-- Form D'ajoute quiz --}}
     echo'<form action="{{route(quiz.store)}}" method="post">
        @csrf
            <input type="hidden" name="id_prof" value="{{Auth::user()->id}}">
            <input type="hidden" name="id_filiere" value="{{Auth::user()-filiere_user}}">
            <input type="hidden" name="qst" value="'.$n.'">
            <div class="form-group row">
                <label for="nom_quiz" class="col-sm-2 col-form-label">Titre Quiz</label>
                <div class="col-sm-8">
                    <input type="text" name="nom_quiz" class="form-control" id="nom_quiz">
                </div>
            </div>

            <div class="form-group row">
                <label for="dernier_delai" class="col-sm-2 col-form-label">Dérnier délai</label>
                <div class="col-sm-8">
                    <input type="datetime-local" name="dernier_delai" class="form-control" id="dernier_delai">
                </div>
            </div>';
        // <!--   /*Question area*/ -->
//  <!-- on va utiliser une boucle pour afficher le nombre de question a ajouter , et se nombre sera entrer par le professeur dans la formilaire en bas -->
        echo'<div class="col-lg-12 col-md-12 col-sm-12">';
            for ($i=1; $i <=$n ; $i++){
                echo '<div class="card">
                        <div class="card-body"> Question '.$i.' </div>
                            
                            <input type="text" style="margin: 10px;" name="question'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Question">
                            <input type="text" style="margin: 10px;" name="rep_correcte'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Reponse correcte">
                            <input type="text" style="margin: 10px;" name="rep_2'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 2">
                            <input type="text" style="margin: 10px;" name="rep_3'.$i.'" class="form-control" id="exampleFormControlInput1" placeholder="Réponce 3">
                        </div>';
            }
                echo'</div>';
        // <!-- /*End Question area*/ -->
        echo'<input type="submit" value="Ajouter" class="btn btn-info float-right" >
    </form>';
// <!-- s'il ny a pas le nombre de question en demande au professeur de l'ajouter -->
    }else{
        // $_POST['number']; 
        echo'<form method="POST"> 
            <div class="form-group row">
                <label for="inputTitre" class="col-sm-2 col-form-label">Nombre des questions : </label>
                <div class="col-sm-8">
                    <input type="number" class="form-control"  id="number" name="number" placeholder="ex: 4">
                </div>
            </div> 
            <input type="submit" value="Suivant" class="btn btn-info float-right" onclick="numberquestion()"/>  
        </form> ';
    }  
    @endphp               
                </div>
            </div>
        </div>
    </div>
</div>
    
    
    <script type="text/javascript">  
        function numberquestion(){  

        var number=document.getElementById("number").value; 

        document.location.replace("random.php?"+number);

        }  
    </script> 



@endsection




