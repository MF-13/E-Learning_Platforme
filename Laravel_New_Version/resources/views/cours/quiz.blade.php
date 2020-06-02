@extends('layouts.temp')

@section('css')
    <link rel="stylesheet" href={{ asset("css/site/quiz.css") }}>
@endsection

@section('title')
    Quiz
@endsection


@section('content')

  <div class="container">

    <div class="row">

      <div class="col-lg-12 col-md-12 col-sm-12">

        <div class="card">

          <div class="card-body">

              <form action="{{ route('result.store',['question_nbr'=>$question_nbr]) }}" method="POST">
                @csrf
                
              <input type="hidden"  name="id_quiz" value="{{$quiz[0]['id_quiz']}}" >
              <h5 class="card-title">Nom quiz : {{$quiz[0]['nom_quiz']}} </h5>
                    @php
                      $nbr=0;
                    @endphp
                  @foreach($questions as $question)
                      
                        <p class="card-text">Question {{$nbr+1}} : {{$question['question']}} </p>
                        @if(Auth::user()->type_user=='etudiant')
                            @php // inverser l ordre des reponse 
                                $reps= [$question['rep_correcte'],$question['rep_2'],$question['rep_3']];
                                shuffle($reps);
                            @endphp

                            @foreach ($reps as $rep)
                            <input type="radio" value="{{$rep}}"  name="qst{{$nbr+1}}" style="margin-left: 20px; margin-bottom: 8px;"  >{{$rep}}<br>
                            @endforeach

                            @php
                                  $nbr++;
                            @endphp

                        @elseif(Auth::user()->type_user=='professeur')
                            @php // inverser l ordre des reponse 
                                $reps= [$question['rep_correcte'],$question['rep_2'],$question['rep_3']];
                            @endphp
                            <ul>
                                  <li>
                                      Reponse 1 (correcte) : {{$reps[0]}}
                                  </li>
                                  <li>
                                      Reponse 2 : {{$reps[1]}}
                                  </li>
                                  <li>
                                      Reponse 3 : {{$reps[2]}}
                                  </li>
                                
                            </ul>
                            @php
                                  $nbr++;
                            @endphp
                        @endif
                  @endforeach
                  @if(Auth::user()->type_user=='etudiant')
                      <input type="submit" name="submit" class="btn btn-success float-right">
                  @endif
              </form>

        </div>

      </div>

    </div>

  </div>

</div>


@endsection

