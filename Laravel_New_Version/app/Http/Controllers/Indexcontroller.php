<?php

namespace App\Http\Controllers;
use Illuminate\Support\Arr;

use Illuminate\Http\Request;
use App\Field;

class Indexcontroller extends Controller
{
    
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


                    //Pour vider le tableau arr et temp_filiere avant de commancer un nouvel traitement
                $arr = array();
                $temp_filiere = array();
            
            }
        
        return view('index',['fields'=>$dept , 'filiere'=>$filieres,'dept_nbr'=> $dept_nbr , 'fil_nbr'=>$fil_nbr]);
    }

}
