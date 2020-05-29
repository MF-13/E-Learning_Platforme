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

    public function affcher_etudiant()
    {
        return view('dashbord.etudiant',  ['users' => User::where('type_user','etudiant')->get()   ] );
    }

    public function afficher_professeur()
    {
        return view('dashbord.prof', ['users' => User::where('type_user','professeur')->get()   ] );
    }
}
