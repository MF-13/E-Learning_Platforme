@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/quiz.css") }}>
@endsection

@section('title')
   add quiz
@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card" style="margin-top: 60px">
                    <h5 class="card-header">Ajouter le Quiz</h5>
                        <div class="card-body">
                            @if(isset($_GET['number']))
                                @if (empty($_GET['number']) || $_GET['number']==0)
                                        <div class="alert alert-danger">Number de question est null</div>
                                        <a href="{{url('/cour/quiz/create')}}"> 
                                            <button class="btn btn-danger float-right" >
                                                Cliquer ici pour entrer le nombre des questions 
                                            </button>
                                        </a>
                                        <br>
                                        <br>
                                        <br>
                                @else
                                    @php
                                        $nbr_question = $_GET['number'];
                                    @endphp
                                            
                                            {{-- Form D'ajoute quiz --}}
                                    <form action="{{route('quiz.store')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="qst" value="{{$nbr_question}}">
                                            <div class="form-group row">
                                                    <label for="nom_quiz" class="col-sm-2 col-form-label" >Titre Quiz</label>
                                                    <div class="col-sm-8">
                                                        <input type="text" name="nom_quiz" class="form-control" id="nom_quiz" required>
                                                    </div>
                                            </div>

                                            <div class="form-group row">
                                                    <label for="dernier_delai" class="col-sm-2 col-form-label">Dérnier délai</label>
                                                    <div class="col-sm-8">
                                                        <input type="datetime-local" name="dernier_delai" class="form-control" id="dernier_delai">
                                                    </div>
                                            </div>
                                                <!--   /*Question area*/ -->
                                            <div class="col-lg-12 col-md-12 col-sm-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        @for ($i=1; $i <=$nbr_question ; $i++)
                                                            <label for="inputTitre" class="col-sm-2 col-form-label"> Question {{$i}}</label>
                                                            <input type="text" style="margin: 10px;" name="question{{$i}}" class="form-control" id="exampleFormControlInput1" placeholder="Question" required >
                                                            <input type="text" style="margin: 10px;" name="rep_correcte{{$i}}" class="form-control" id="exampleFormControlInput1" placeholder="Reponse correcte" required>
                                                            <input type="text" style="margin: 10px;" name="rep_2{{$i}}" class="form-control" id="exampleFormControlInput1" placeholder="Réponse 2" required>
                                                            <input type="text" style="margin: 10px;" name="rep_3{{$i}}" class="form-control" id="exampleFormControlInput1" placeholder="Réponse 3" required>
                                                                    
                                                        @endfor
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="submit" value="Ajouter" class="btn btn-info float-right" >
                                    </form>
                                @endif    
                            @else 
                                <!-- s'il ny a pas le nombre de question en demande au professeur de l'ajouter -->
                            <form method="GET" action="/cour/quiz/create"> 
                                    <div class="form-group row">
                                        <label for="inputTitre" class="col-sm-2 col-form-label">Nombre des questions : </label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control"  id="number" name="number" placeholder="ex: 4">
                                            </div>
                                    </div> 
                                    <input type="submit" value="Suivant" class="btn btn-info float-right" onclick="numberquestion()"/>  
                                </form>

                            @endif               
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
                                <br>
                                <br>
    
    <script type="text/javascript">  
        function numberquestion(){  

        var number=document.getElementById("number").value; 

        document.location.replace("random.php?"+number);

        }  
    </script> 



@endsection




