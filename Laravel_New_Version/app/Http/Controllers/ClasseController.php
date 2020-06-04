<?php

namespace App\Http\Controllers;

use App\classe;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClasse;
use Illuminate\Support\Arr;

use App\Field;


class ClasseController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classes = classe::all();
        return view('cours.cours-espace' , [
            'classes'=>classe::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $temp_field = Field::select('filiere_id')->get();
        $nbr = $temp_field->count();


        for ($i=0; $i < $nbr; $i++) { 
            $field[] = Arr::get($temp_field,$i.'.filiere_id') ;

        }
        return view('dashbord.addcour',['fields'=>$field]) ;
    }

    public function create_cours(classe $class)
    {   
        // pour afficher les filieres
        $fields = Field::select('filiere_id')->distinct()->get();

        // variable class c'est pour traiter les donnees s il existe
        if($class){

            $cours = $class;

        }else{
            $cours= array();
        }
        
        return view('dashbord.cours_trait',['fields'=>$fields,'cour'=>$cours]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClasse $request)
    {
        //
        // $request->validate([

        //     'nom' =>  'required|max:30',
        //     'description' => 'required|max:500'
        // ]);

        $classes = new classe() ;
        $classes->nom =  $request->nom ;
        $classes->description =  $request->description ;
        // $classes->field_id =  $request->id_filiere ;
        $classes->id_filiere =  $request->id_filiere ;
        $classes->save();

        return redirect('/cours')->with('status', 'Le Cour est Ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        // $classes = classe::findOrFail($id_cour);
        return view('cours.cours-detail', ['classes' => classe::findOrFail($id)]);
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
        $temp_field = Field::select('filiere_id')->get();
        $nbr = $temp_field->count();


        for ($i=0; $i < $nbr; $i++) { 
            $field[] = Arr::get($temp_field,$i.'.filiere_id') ;

        }
        $classes=classe::findOrFail($id);
        return view('dashbord.cours_trait',['classe'=>$classes , 'fields' => $field]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClasse $request, $id)
    {
        //
        // $request->validate([

        //     'nom' =>  'required|max:30',
        //     'description' => 'required|max:500'
        // ]);

        $classes = classe::findOrFail($id) ;
        $classes->nom =  $request->input('nom');
        $classes->description =  $request->input('description') ;
        $classes->id_filiere =  $request->input('id_filiere') ;
        // dd($classes);
        $classes->save();

        return redirect('/cours')->with('status', 'Le Module est Modifier');
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
        $classes = classe::findOrFail($id) ;
        $classes->delete();
        return redirect('/cours')->with('status', 'Le Module est Supprimer');
    }

}
