<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\User;
use App\classe;
use App\Field;
use App\Result;
use App\Quiz;
use Auth;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreFile;
use Illuminate\Support\Facades\File as FileFacade;



class FileController extends Controller
{   
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {           // si l'utilisateur est connecter 
        if(Auth::user()){
                        //si l'utilisateur est un admin on affiche tous les  quizzes
                    if(Auth::user()->type_user=="admin"){
                            $quizzes = Quiz::all();
                    }
                    else
                    {
                        //si l'utilisateur n'est pas admin on affiche  les  quizzes par filieres
                        $quizzes = Quiz::where('id_filiere',Auth::user()->filiere_user)->get();
                    }
                        //pour l'affichage des resultats des etudiants 
                    $nbr_quiz = $quizzes->count();
                    if($nbr_quiz!=0){
                        foreach ($quizzes as $quiz) {
                                $results = Result::where('id_quiz',$quiz->id_quiz)->get();
                                // dd($quizzes);
                                if($results->count()!=0){
                                    $temp = array();
                                    $i=0;
                                    foreach($results as $result){
                                        $etd = User::where('id',$result->id_etudiant)->get();
                                                        
                                        $nom = $etd[0]['nom_user'].' '. $etd[0]['prenom_user'];
                                                        
                                        $temp = [$nom ,$result->resultat ];
                                                        
                                        $rslt[] = [$quiz->id_quiz=>$temp];

                                        // array_push($id_etd,);
                                        $id_etd[$quiz->id_quiz][$i] = $result->id_etudiant;
                                        $i++;
                                    } 
                                }else{
                                      $rslt = array();
                                      $id_etd[$quiz->id_quiz] = array();
                                }
                                
                        } 

                    }
                    else{
                        //si l'utilisateur est un etudiant , on donne au tableau $rslt un valeur null pour que Return functionne correctement
                        
                        $rslt = array();
                        $id_etd = array();

                    }
                    // $id_etd[$quiz->id_quiz][1] = 45;
                    // dd($id_etd);
                    // if(in_array(4,$id_etd[3])){
                    //     dd('yes');
                    // }else{
                    //     dd('no');
                    // }

                        //selection des cours et fichiers

                    $files = File::where('id_filiere',Auth::user()->filiere_user)->where('type_cour','!=','bibliotheque')->orderBy('date_ajoute','DESC')->get();
                    $nbr_files = $files->count();
                  

                    foreach($files as $file){
                        
                        $temp_name= array();
                        $id = $file->id_cour;
                        array_push($temp_name,classe::select('nom')->where('id',$id)->get());
                        $cour[$id]=$temp_name[0][0]['nom'];

                    }

                    if(empty($cour)){
                    
                        $cour = array();

                    }


                        

                    return view('cours.cours-espace', 
                                ['files' => $files ,'quizzes' => $quizzes, 'resultats'=>$rslt , 'cours'=>$cour,  'id_etd_repondu'=>$id_etd]   );
        }

        else

        {

                //s'il n'est pas connecter
            return view('cours.cours-espace');

        }


        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexbibl()
    {
            //Affichage tous les fichiers disponible dans la bibliotheque meme si l'utilisateur n'est pas connecter 
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
        //Il redirige vers la page du creation des  : cours / tp / td / bibliotheque

        $temp_cour = classe::select('id','nom')->where('id_filiere',Auth::user()->filiere_user)->get();
        $nbr = $temp_cour->count();
        // dd($nbr);
            // pour l'affichage de tous les filieres
        if($nbr>0){
            for ($i=0; $i < $nbr; $i++) { 
                 $cour[] = Arr::get($temp_cour,$i.'.nom') ;
            }
        }else{
            $cour = array();
        }
        
        // dd($cour);
        return view('cours.addcours-1',['cours'=>$cour]) ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFile $request)
    {
        //insertion du : cours / tp / td / bibliotheque dans la base de donnees

        // ******************************* Start traitement de fichier *****************************
        
       


        // Handle File Upload
        if($request->hasFile('userfile')){
           
            if($request->cour=='bibliotheque' && $request->type_cour=='bibliotheque'){
                $filiereName = 'bibliotheque' ;
                
            }else{
                 $filiereName = Auth::user()->filiere_user ;
            }

            // Get filename with the extension
            $filenameWithExt = $request->file('userfile')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('userfile')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= time().'_'.$filename.'.'.$extension;
            // Upload Image
            $path = $request->file('userfile')->storeAs('file/'.$filiereName,$fileNameToStore);
            
        } 

        // ******************************* ENDtraitement de fichier *****************************

        // Le ficher sera ajouter dans C:\wamp\www\PFE\Laravel_New_Version\storage\app\public\file\
        
        $file = new File;
        $file->code_prof = $request->input('code_prof');
        $file->titre = $request->input('titre');
        $file->id_filiere = Auth::user()->filiere_user;
        $file->type_cour = $request->input('type_cour');
        $file->commantaire = $request->input('commentaire');
        $file->nom_pdf = $fileNameToStore;
        $file->pdf_lien = $path;
        
        if($request->cour=='bibliotheque'){
            $file->id_cour=intval('-1');
        }else{
            $id = classe::select('id')->where('nom',$request->cour)->get();
            $id = $id[0]['id'];
            $file->id_cour=$id;
        }
            


        $file->save();

        return redirect('/cour')->with('status', 'Le Cour est Créer');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //redirection vers la page qui affiche le : cour / tp / td en detail
        
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
        return view('dashbord.departement_trait',['dept'=>$id]);

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
        // changer la photo du departement
       
        if($request->hasFile('userfile')){
            $departementName = $request->departement ;
            // Get filename with the extension
            $filenameWithExt = $request->file('userfile')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('userfile')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $departementName.'.'.$extension;
            // Upload Image
            $p = 'images/img/index/filiere/'.$fileNameToStore;
                //si la photo du departement deja existe , on supprime l'anciennes
            
            // dd($p);

            if(Storage::exists($p)){
            //    dd('true');

                Storage::delete($p);
            }

            $path = $request->file('userfile')->storeAs('images/img/index/filiere/',$fileNameToStore);
        }

        //Prend l'ancient nomdu departement
        $olddepartements_name = $request->old_dept ;
        //Prent depuis table Fields les filiere qui contient le meme deartement
        $field_departements[] = Field::select('filiere_id','departement')->where('departement',$olddepartements_name)->get() ;
        //Prend le filiere_id correspond a le departement name
        
        //Le nombre de line de $field_departements
        $nbr = Field::select('departement')->where('departement',$olddepartements_name)->count();

        $id=array();

        for ($i=0; $i < $nbr; $i++) {
            $id[] = Arr::get($field_departements,'0.'.$i.'.filiere_id') ;
        }

        if($nbr != 0){
            foreach($field_departements as $field_d){
                $field_d->departement = $request->departement;

                for ($j=0; $j < $nbr; $j++){
                $update = ['departement'=> $field_d->departement ];
                Field::where('filiere_id',$id[$j])->update($update); 
                }
            }

             //changer le nom de l'image
            $l="images/img/index/filiere/";
            $link = $l.$olddepartements_name.'.PNG';
            $newName = $l.$field_d->departement.'.PNG';
         

            Storage::move($link,$newName);

        }

        return redirect('/departement')->with('status', 'Le Département est Modifier');
       
        
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //supprimer le fichier de la base de donnees et supprimer le fichier dans le stockage
        
        $temp = File::select('pdf_lien')->where('id',$id)->get();
        $temp =   $temp[0]['pdf_lien'];

        if(Storage::exists($temp)){

            Storage::delete($temp);
            File::destroy($id);
             return redirect('/cour')->with('status','Le Cour est Supprimer');
            
          }else{
        
            
            return redirect('/cour')->with('status','Error hors de la suppresion du fichier');
        
          }
        
    }
}
