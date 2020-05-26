<?php

namespace App\Http\Controllers;

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
        //
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

    public function findCours($filiere_id){
        // $classes = classe::where('id_filiere', $filiere_id)->get() ;

        return view('filiere.filiere-1',['classes'=> $classes]);


    }
}
