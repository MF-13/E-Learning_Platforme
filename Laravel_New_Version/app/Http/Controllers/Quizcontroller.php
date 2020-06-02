<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Question;
use Auth;

class Quizcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cours.cours-espace' , ['quizs' => Quiz::all()   ]);
    }
    // protected $fillable = [
    //     'id_quiz','nom_quiz', 'id_prof', 'id_filiere', 'dernier_delai'
    // ];

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cours.addquiz');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $quiz = new Quiz();
        $quiz->nom_quiz = $request->nom_quiz;
        $quiz->id_prof = Auth::user()->id;
        $quiz->id_filiere = Auth::user()->filiere_user;
        if(empty($request->dernier_delai))
            {
                $quiz->dernier_delai = null;
            }
        else
            {
                $quiz->dernier_delai = $request->dernier_delai;
            }

        $quiz->save();
            //select the quiz id
        $last_id = Quiz::select('id_quiz')->orderBy('id_quiz', 'desc')->first();
        $last_id = $last_id->id_quiz;

        $nbr = intval($request->qst);

        
        for ($i=1; $i <=$nbr; $i++) { 
            
            $question = new Question();
            $question->id_quiz = $last_id;
            // dd($question);

            $question->n_question = $i;

            $qst = 'question'.$i;
            $question->question = $request->$qst;

            $repp1 = 'rep_correcte'.$i;
            
            $question->rep_correcte = $request->$repp1;

            $repp2 = 'rep_2'.$i;
            $question->rep_2 = $request->$repp2;

            $repp3 = 'rep_3'.$i;
            $question->rep_3 = $request->$repp3;

            $question->save();
        }
       




        return redirect('/cour')->with('status','Le Quiz est Ajouter'); ;
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            //select des informations du quiz
        $quiz=Quiz::where('id_quiz',$id)->get();
            //select des qu estions du quiz
        $questions = Question::where('id_quiz',$id)->get();
            // count le nombre de question par quiz
        $question_nbr = $questions->count();

        return view('cours.quiz',  ['quiz' => $quiz, 'questions'=>$questions,'question_nbr'=>$question_nbr] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supp = Quiz::where('id_quiz',$id)->delete();

        return redirect('/dashbord');
    }
}
