<?php

namespace App\Http\Controllers;

use App\Result;
use App\Quiz;
use App\Question;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    //initialiser les variable 
        $score=$count=0;
        $question_correcte=$question_incorrecte='';

        $question_nbr = $_GET['question_nbr'];
        $reponses = Question::select('rep_correcte')->where('id_quiz',$request->input('id_quiz'))->get();

        foreach($reponses as $reponse){
            $rep_correcte[]= $reponse['rep_correcte'];  
        }
        
          //result calcul  
        while($count<$question_nbr){
            
                $str = 'qst'.($count+1);
                $rep =  $request->$str;  

            if($rep==$rep_correcte[$count]){
                    //si la reponse est correcte
                $question_correcte.=($count+1);
			    $question_correcte.= " , ";
                $score++;
            }else{
                    //si la reponse est incorrecte
                $question_incorrecte.=($count+1);
			    $question_incorrecte.= " , ";
                $score=$score;
            }

            $count++;
        }
       

        $result = new Result;
        $result->id_quiz = $request->input('id_quiz');
        $result->id_etudiant = Auth::user()->id;
        $result->resultat = $score;
        $result->quesiont_corrcete = $question_correcte;
        $result->question_incorrecte = $question_incorrecte;

        // dd($result->result);
        $result->save();

        return redirect('/')->with('status','Votre Réponses sont Valider');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    
    

    
}
