<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\User;


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

    public function destroy(Request $request , $id)
    {   
        User::destroy($id);
        // $user = User::findOrFail($id);
        // $user->delete();
        $request->session()->flash('status','L\'utilisateur est Supprimer');
        return redirect('/dashbord');
        
    }
}
