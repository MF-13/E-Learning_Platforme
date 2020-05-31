<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\User;
use App\classe;
use App\Message;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreUser;




class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('role:administrator');
    }
    
    public function index()
    {
      
        return view('dashbord.profileadmin');
    }

    public function departement()
    {
        $departements = Field::select('departement')->distinct()->get(); 

        return view('dashbord.dapartement',['departements'=>$departements]);
    }

    public function afficher_etudiant()
    {
        return view('dashbord.etudiant',  ['users' => User::where('type_user','etudiant')->get() , 'type'=>'etudiant'   ] );
    }

    public function afficher_professeur()
    {
        return view('dashbord.prof', ['users' => User::where('type_user','professeur')->get()   ] );
    } 

    public function afficher_demande()
    {
       // il faut faire le traitement a partie de la table Request
        return view('dashbord.demande',  ['users' => User::orderBy('id', 'DESC')->get()   ] );
    }

    public function afficher_filiere()
    {
       // il faut faire le traitement a partie de la table Request
        return view('dashbord.filiere',  ['fields' => Field::orderBy('filiere_id', 'DESC')->get()   ] );
    }

    public function afficher_cours()
    {
       // il faut faire le traitement a partie de la table Request
        return view('dashbord.cours',  ['classes' => Classe::orderBy('id', 'ASC')->get()   ] );
    }

    public function afficher_departement()
    {
       // il faut faire le traitement a partie de la table Request
        return view('dashbord.departement',  ['departements' => Field::select('departement')->distinct()->get()   ] );
    }

    public function afficher_message()
    {
       // il faut faire le traitement a partie de la table Request
        return view('dashbord.message',  ['messages' => Message::where('recepteur_type','admin')->orderBy('date_env', 'desc')->get()   ] );
    }

    public function user_traitement()
    {

        return view('dashbord.user_trait');

    }

    public function filiere_traitement()
    {

        return view('dashbord.filiere_trait');

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashbord.user_trait', ['dashbord' => $user ]);
    }

    public function store(StoreUser $request)
    {
        $data = $request->only(['nom_user','prenom_user','date_naiss_user',
                                'num_tele_user','filiere_user','email',
                                'password','adresse_user','type_user']);

        $user = User::create($data);
                                
            $request->session()->flash('status','User ajouter avec succes');
                    
            return redirect('/user');
    }

    public function show()
    {
        return view('dashbord.profileadmin',  ['user' =>   User::find(Auth::user()->id)] );
    }

    public function update(Request $request, $id)
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
        return view('dashbord.demande' , ['users' => User::orderBy('id', 'DESC')->get()   ]);
    }

    public function destroy(Request $request , $id)
    {   
        User::destroy($id);
        $request->session()->flash('status','L\'utilisateur est Supprimer');
        return redirect('/dashbord');
        
    }
}
