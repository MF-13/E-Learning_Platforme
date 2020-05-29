<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

use App\Field;

class FieldController extends Controller
{
    //
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function field()
    // {
    //     return view('pages.filiere');

    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dept = Field::select('departement')->distinct()->get();
            //nombre des departements
        $dept_nbr=  $dept->count();
        
        $temp_filiere = array();

        foreach($dept as $f){
                //ici on selectionne tous les filiere de chaque departement            
            $temp_filiere[] = Field::select('filiere','filiere_description')->where('departement',$f->departement)->distinct()->get();

            
            $nbr = Field::select('filiere')->where('departement',$f->departement)->count();
            $fil_nbr[] = $nbr;
            for ($i=0; $i < $nbr; $i++) { 
                $arr[] = Arr::get($temp_filiere,'0.'.$i.'.filiere') ;
                $de[] = Arr::get($temp_filiere,'0.'.$i.'.filiere_description') ;

            }
                //pour envoyer les filieres
            $filieres[] = [$f->departement => $arr ];
                //pour envoyer les descriptions des filieres
            $desc[] = [$f->departement => $de ];


                //Pour vider le tableau arr et temp_filiere avant de commancer un nouvel traitement
            $arr = array();
            $de= array();
            $temp_filiere = array();
            
           
            
        }
       
        
        return view('filiere.filiere-1',['fields'=>$dept , 'filiere'=>$filieres,'description'=>$desc  , 'dept_nbr'=> $dept_nbr , 'fil_nbr'=>$fil_nbr]);
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
        $fields=Field::findOrFail($id);
        return view('filiere.filieretrait',['fields'=>$fields]);
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
        $fields = Field::findOrFail($id) ;
        $fields->filiere =  $request->filiere ;
        $fields->description =  $request->description ;
        $fields->filiere_description =  $request->filiere_description ;

        $fields->save();

        return redirect('/filiere/filieretrait')->with('status', 'L\'opération s\'effectues avec successe  !');
    }

    public function findCours($filiere_id){
        // $classes = classe::where('id_filiere', $filiere_id)->get() ;

        return view('filiere.filiere-1',['classes'=> $classes]);


    }
}
