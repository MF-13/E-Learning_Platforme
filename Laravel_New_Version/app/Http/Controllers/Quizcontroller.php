<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Question;

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
        return view('cours.cours-espace' , ['quizs' => Quizze::all()   ]);
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
        //
        Quiz::destroy($id);
        // 
        return redirect('/dashbord');
    }
}
