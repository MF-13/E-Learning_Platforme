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

    public function affEtud()
    {
        return view('dashbord.etudiant', 
                    ['users' => User::where('typr_user','etudiant')->get()   ] );
    }

    public function affProf()
    {
        return view('dashbord.prof', 
                    ['users' => User::where('typr_user','professeur')->get()   ] );
    }
}
