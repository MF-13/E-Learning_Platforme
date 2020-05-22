<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;

class Filierecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $fields=Field::all();
        return view('filiere.filiere-1',['fields'=>Field::all()]);
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

    public function findCours($id){

        $query = "select nom from classes where id_filiere=".$id.";";

    }

}
