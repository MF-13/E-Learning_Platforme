<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classe;

class CourController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classe = classe::all();
        return view('cours.cours-espace' , compact('classe'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cours.addcours-1') ;
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
        $request->validate([

            'nom' =>  'required|max:200',
            'description' => 'required|max:500'
        ]);

        $classe = new classe() ;
        $classe->nom =  $request->nom ;
        $classe->description =  $request->description ;
        $classe->id_filiere =  $request->id_filiere ;
        $classe->save();

        return redirect('/cours/cours-espace')->with('status', 'L\'opération s\'effectues avec successe  !');
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
        $classe = classe::findOrFail($id);
        return view('cours.cours-detail', compact('classe'));
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
        $request->validate([

            'title' =>  'required|max:200',
            'body' => 'required|max:500'
        ]);

        $classe = classe::findOrFail($id) ;
        $classe->nom =  $request->nom ;
        $classe->description =  $request->description ;
        $classe->id_filiere =  $request->id_filiere ;

        $classe->save();

        return redirect('/cours/cours-espace')->with('status', 'L\'opération s\'effectues avec successe  !');
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
        $classe = classe::findOrFail($id) ;
        $classe->delete();
        return redirect('/cours/cours-espace')->with('status', 'L\'opération s\'effectues avec successe  !');
    }
}
