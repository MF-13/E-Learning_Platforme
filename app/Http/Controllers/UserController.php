<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreUser;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FileFacade;


class UserController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function change_picture(Request $request)
    {
        //cree une photo de profile

        if($request->hasFile('pic')){
           
            // dd('tets');
            $id_user = Auth::user()->id ;
            $type_user = Auth::user()->type_user ;

            // Get filename with the extension
            $filenameWithExt = $request->file('pic')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('pic')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $id_user.'.'.$extension;

            $path='images/profileimage/'.$type_user.'/';
 
             if(Storage::exists($path)){
                    Storage::delete($path);
                    
            
             }
            // Upload Image
            $request->file('pic')->storeAs($path,$fileNameToStore);
            
        } 

            return view('users.profileuser',  ['user' =>   User::find(Auth::user()->id)] );



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $user = User::create([
            'nom_user' => $request['nom_user'],
            'prenom_user' => $request['prenom_user'],
            'date_naiss_user' => $request['date_naiss_user'],
            'num_tele_user' => $request['num_tele_user'],
            'filiere_user' => $request['filiere_user'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'adresse_user' => $request['adresse_user'],
            'type_user' => $request['type_user'],
        ]);
        $user->attachRole('user');

        $user->save();
                                
            $request->session()->flash('status','User ajouter avec succes');
                    
            return redirect('/user');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   
        $path = "images/profileimage/".Auth::user()->type_user."/".Auth::user()->id.".png";
        
        if(Storage::exists($path))
        {
            $picture = 1;

        }
        else
        {
            $picture = 0;  
            $path = "images/profileimage/".Auth::user()->type_user."/defaultpicture.png";

        }
        
        return view('users.profileuser',  ['user' =>   User::find(Auth::user()->id) , 'path'=>$path] );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreUser $request, $id)
    {
        
        $user = User::findOrFail($id);
        $user->nom_user = $request->input('nom_user');
        $user->prenom_user = $request->input('prenom_user');
        $user->date_naiss_user = $request->input('date_naiss_user');
        $user->num_tele_user = $request->input('num_tele_user');
        $user->filiere_user = $request->input('filiere_user');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));
        $user->adresse_user = $request->input('adresse_user');
        $user->type_user = $request->input('type_user');

        $user->save();
        $request->session()->flash('status','User modifier avec succes');
        
        return view('users.profileuser', 
                    ['user' =>   User::find($id)
                    ] );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {   
        User::destroy($id);
        $request->session()->flash('status','supprimer avec succes');
        return redirect('/dashbord');
        
    }

   
}
