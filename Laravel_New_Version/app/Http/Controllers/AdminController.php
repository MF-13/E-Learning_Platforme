<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Field;
use App\User;
use App\classe;
use App\Comment;
use App\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
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
        return view('dashbord.etudiant',  ['users' => User::where('type_user','etudiant')->orderBy('id','DESC')->get() , 'type'=>'etudiant'   ] );
    }

    public function afficher_professeur()
    {
        return view('dashbord.prof', ['users' => User::where('type_user','professeur')->orderby('id','DESC')->get()   ] );
    } 

    public function afficher_demande()
    {
       // il faut faire le traitement a partie de la table Request
        return view('dashbord.demande',  ['users' => User::where('verify','false')->orwhere('verify',null)->get() ] );
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

    public function afficher_comment()
    {
       // il faut faire le traitement a partie de la table Request
        return view('dashbord.comment',  ['comments' => Comment::all() ] );
    }

    public function user_traitement()
    {

        return view('dashbord.user_trait');

    }

    public function filiere_traitement()
    {

        return view('dashbord.filiere_trait');

    }

    public function create_message()
    {
            return view('dashbord.nouveau_message');
    }


    public function Cour_Add()
    {

        $temp_field = Field::select('filiere_id')->get();
        $nbr = $temp_field->count();


        for ($i=0; $i < $nbr; $i++) { 
            $field[] = Arr::get($temp_field,$i.'.filiere_id') ;

        }
        return view('dashbord.addcour',['fields'=>$field]) ;

    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('dashbord.user_trait', ['dashbord' => $user ]);
    }
    public function create()
    {
        $temp_field = Field::select('filiere_id')->get();
        $nbr = $temp_field->count();


        for ($i=0; $i < $nbr; $i++) { 
            $field[] = Arr::get($temp_field,$i.'.filiere_id') ;

        }
        return view('dashbord.adduser',['fields'=>$field]);
    }
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
                                
        switch( $user->type_user){
            case 'etudiant' :   return redirect('/etudiant');    break;
            case 'professeur' :  return redirect('/professeur');       break;
            case 'admin' : return redirect('/dashbord'); break;
            default :  return redirect('/dashbord'); break;

        }
           
    }

    public function show()
    {
        return view('dashbord.profileadmin',  ['user' =>   User::find(Auth::user()->id)] );
    }

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
        $user->verify = 'true';

        $user->save();
        $request->session()->flash('status','User modifier avec succes');

        switch( $user->type_user){
                case 'etudiant' :   return redirect('/etudiant')->with('status','Modifier avec succes');    break;
                case 'professeur' :  return redirect('/professeur')->with('status','Modifier avec succes');       break;
                case 'admin' : return redirect('/dashbord')->with('status','Modifier avec succes'); break;
                default :  return redirect('/dashbord'); break;

        }
       
    }

    public function destroy(Request $request , $id)
    {   
        
        $temp = User::select('type_user')->where('id',$id)->get();
        $type_user = $temp[0]['type_user'];
        
        User::destroy($id);

        switch( $type_user){
            case 'etudiant' :   return redirect('/etudiant')->with('status','L\'Etudiant est Supprimer');    break;
            case 'professeur' :  return redirect('/professeur')->with('status','Le Professeur est Supprimer');       break;
            case 'admin' : return redirect('/dashbord')->with('status','L\'utilisateur est Supprimer'); break;
            default :  return redirect('/dashbord')->with('status','L\'utilisateur est Supprimer'); break;

         }
        
    }
}
