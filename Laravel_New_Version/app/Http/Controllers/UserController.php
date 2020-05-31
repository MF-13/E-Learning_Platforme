<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\StoreUser;
use Auth;

class UserController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        return view('users.etudiant', 
                    ['users' => User::orderBy('id', 'DESC')->get()   ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $data = $request->only(['nom_user','prenom_user','date_naiss_user',
                                'num_tele_user','filiere_user','email',
                                'password','adresse_user','type_user']);

        

        $user = User::create($data);
                                
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
        return view('users.profileuser',  ['user' =>   User::find(Auth::user()->id)] );
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
        $user->password = $request->input('password');
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

    public function is_email_exist($email)
    {
        if (User::where('email', '=', $email)->exists()) {
            return true;
         }else{
            return false;
         }
    }

    public function is_numero_exist($num)
    {
        if (User::where('num_tele_user', '=', $num)->exists()) {
            return true;
         }else{
            return false;
         }
    }
}
