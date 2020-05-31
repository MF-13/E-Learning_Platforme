<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\User;
use App\classe;



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



    public function destroy(Request $request , $id)
    {   
        User::destroy($id);
        // $user = User::findOrFail($id);
        // $user->delete();
        $request->session()->flash('status','L\'utilisateur est Supprimer');
        return redirect('/dashbord');
        
    }
}
