<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Http\Request;

use App\Field;
use App\classe;

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
            $temp_filiere[] = Field::select('filiere_id','filiere','filiere_description')->where('departement',$f->departement)->distinct()->get();

            $nbr = Field::select('filiere')->where('departement',$f->departement)->count();
            $fil_nbr[] = $nbr;

            for ($i=0; $i < $nbr; $i++) { 

                $arr[] = Arr::get($temp_filiere,'0.'.$i.'.filiere') ;
                $de[] = Arr::get($temp_filiere,'0.'.$i.'.filiere_description') ;
                $id[] = Arr::get($temp_filiere,'0.'.$i.'.filiere_id') ;
            }
                //pour envoyer les filieres
            $filieres[] = [$f->departement => $arr ];
                //pour envoyer les descriptions des filieres
            $desc[] = [$f->departement => $de ];
            $ids[] = [$f->departement => $id ];

                //Pour vider le tableau arr et temp_filiere avant de commancer un nouvel traitement
            $arr = array();
            $de= array();
            $id=array();
            $temp_filiere = array();
            
            
           
            
        }
        //enregitrer les cours
        $inc=0;
        while ($inc < $dept_nbr){ // 3
            foreach($dept as $dptr){ // departement => genie informatique , techniques de management , genie electrique
                $d = $dptr['departement']; // genie informatique , techniques de management , genie electrique
                
                for($j = 0; $j < $fil_nbr[$inc]; $j++){ // 3 1 2
                        
                        $filiere = $filieres[$inc][$d][$j];
                        $id = strtoupper($ids[$inc][$d][$j]);
                        
                        $temp_cour = classe::select('nom')->where('field_id',$id)->get();
                        $nbr = $temp_cour->count();
                        $cour_nbr[] = $nbr;
                        
                        for($k=0;$k<$nbr;$k++){
                            
                            $cours[] = $temp_cour[$k]['nom'];
                        
                        }
                }  
                $temp_cour = array();

                $inc++;
            } 
            // dd($cours) ;

            // dd($cour_nbr) ; 
            
        }
        
        return view('filiere.filiere-1',
                ['fields'=>$dept , 'filiere'=>$filieres,'description'=>$desc  ,
                 'dept_nbr'=> $dept_nbr , 'fil_nbr'=>$fil_nbr, 'cours'=>$cours ,'cour_nbr'=>$cour_nbr]);
            
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
        $fields=Field::where('filiere_id',$id)->get();

        foreach ($fields as $field) {
            // dd($field);
        }
        
        return view('dashbord.filiere_trait',['fields'=>$field]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        $fields = Field::findOrFail($id) ;
        $fields->filiere =  $request->filiere ;
        $fields->description =  $request->description ;
        $fields->filiere_description =  $request->filiere_description ;

        $fields->save();

        return redirect('/filiere/filieretrait')->with('status', 'L\'opération s\'effectues avec successe  !');
    }

    public function destroy($id)
    {
        //
        // 
        // Field::whereIn('id', 'filiere_id')->destroy();
        dd($id);
        Field::destroy($id);
        return redirect('/filiere')->with('status', 'Filiére est Supprimer');
    }

    public function findCours($id){
        // $classes = classe::where('id_filiere', $filiere_id)->get() ;

        // return view('filiere.filiere-1',['classes'=> $classes]);


    }
}
