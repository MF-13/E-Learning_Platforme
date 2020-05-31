<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // //$user = User::findOrFail($id);
        // $type = $user->filiere_user ;
        // return view('cours.cours-espace', 
        //             ['files' => File::where('id_filiere', $type)->get()   ] );
        return view('cours.cours-espace', 
                    ['files' => File::all()   ] );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexbibl()
    {
        //
        return view('cours.biblio', 
                    ['files' => File::where('type_cour','bibliotheque')->get()   ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('cours.addcours-1');
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
        // *******************************traitement de fichier *****************************

        $this->validate($request, [
            'titre' => 'required',
            'id_filiere' => 'required',
            'type_cour' => 'required',
            'userfile' => 'required|max:1999'
        ]);

        // Handle File Upload
        if($request->hasFile('userfile')){
            $filiereName = $request->id_filiere ;
            // Get filename with the extension
            $filenameWithExt = $request->file('userfile')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('userfile')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'.'.$extension;
            // Upload Image
            $path = $request->file('userfile')->storeAs('public/file', $filiereName.'/'.$fileNameToStore);
        } 
        // Le ficher est ajouter dans C:\wamp\www\PFE\Laravel_New_Version\storage\app\public\file\

        // Create Post
        $file = new File;
        $file->code_prof = $request->input('code_prof');
        $file->titre = $request->input('titre');
        $file->id_filiere = $request->input('id_filiere');
        $file->type_cour = $request->input('type_cour');
        $file->commantaire = $request->input('commentaire');
        $file->nom_pdf = $fileNameToStore;
        $file->pdf_lien = $path;
        $file->save();

        return redirect('/cour')->with('success', 'cour Created');
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
        return view('cours.cours-detail', ['files' => File::findOrFail($id)]);
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
    }
}
