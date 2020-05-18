<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
    {
       
        return view('users.index', 
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
        
        // methode  1
        // $user = new User();

        // $user->nom_user = $request->input('nom_user');
        // $user->prenom_user = $request->input('prenom_user');
        // $user->date_naiss_user = $request->input('date_naiss_user');
        // $user->num_tele_user = $request->input('num_tele_user');
        // $user->filiere_user = $request->input('filiere_user');
        // $user->email_user = $request->input('email_user');
        // $user->mdps_user = $request->input('mdps_user');
        // $user->adresse_user = $request->input('adresse_user');
        // $user->type_user = $request->input('type_user');

        // $exist_email = self::is_email_exist($request->input('email_user'));
        // $exist_numero = self::is_numero_exist($request->input('num_tele_user'));


        // if($exist_email)
        //     {
        //             echo 'email already exist<br>';
        // }else{
        //             echo 'email not  exist<br>';
        //     }
        
        // if($exist_numero)
        //     {
        //             echo 'num already exist<br>' ;
        // }else{
        //             echo 'num not  exist<br>';
        //     }


        // if($exist_numero && $exist_email)
        // {
        //     $user->save();

        //     $request->session()->flash('status','User jouter avec succes');
                    
        //     return redirect('/user');

        // }
            // methode 2 
            
        $data = $request->only(['nom_user','prenom_user','date_naiss_user',
                                'num_tele_user','filiere_user','email_user',
                                'mdps_user','adresse_user','type_user']);

        // exemple de champs genere automatiquement  
        // $data['type_user'] = 'professeur';

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
    public function show($id)
    {
        
        return view('users.show', 
                    ['user' =>   User::find($id)
                    ] );
        
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
        $user->email_user = $request->input('email_user');
        $user->mdps_user = $request->input('mdps_user');
        $user->adresse_user = $request->input('adresse_user');
        $user->type_user = $request->input('type_user');

        $user->save();
        $request->session()->flash('status','User modifier avec succes');
                    
        return redirect('/user');
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
        // $user = User::findOrFail($id);
        // $user->delete();

        $request->session()->flash('status','supprimer avec succes');
        return redirect('/user');
        
    }

    public function is_email_exist($email)
    {
        if (User::where('email_user', '=', $email)->exists()) {
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
