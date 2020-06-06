<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::where('recepteur_id', Auth::user()->id)->orderBy('created_at', 'desc')->get() ; 
        $nbr = $messages->count();
        return view('message.message_boit' , [ 'messages'=> $messages , 'nbr'=>$nbr ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('message.nouveau_message') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message = new Message() ;
        $message->emetteur_id = 0 ;
        $message->emetteur_nom = "admin";
        $message->emetteur_email = Auth::user()->email ;
        $message->emetteur_telephone = Auth::user()->num_tele_user;
        $message->emetteur_type = "admin";

        $message->message = $request->input('message');
        $message->recepteur_email = $request->input('emetteur_email');

        if($request->input('emetteur_id')){
                $message->recepteur_id = $request->input('emetteur_id');
                $message->recepteur_type = $request->input('emetteur_type');
                if($message->recepteur_type=='visiteur'){
                 return redirect('/message')->with('false', 'email not found in the database , l\'utilisateur est un visiteur');
                }
                Message::where('id',$request->id)->update(['etat'=>'1']); 
                        
        }else{
            
            $temp = User::select('id','type_user')->where('email',$request->input('emetteur_email'))->get();
            $nbr= $temp->count();
            if($nbr==0){
                 return redirect('/new_message')->with('false', 'email not found');
            }else{
                $id = $temp[0]['id'];
                $type = $temp[0]['type_user'];
                $message->recepteur_id = $id;
                $message->recepteur_type = $type;
            }


        }
        
        $message->save();

        return redirect('/message')->with('status', 'Le Message est Envoyer');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('message.msg_details', ['messages' => Message::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $message=Message::findOrFail($id);
        return view('dashbord.msg_details',['message'=>$message]);
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
        $message = Message::findOrFail($id);
        // il va change emetteur est admin et récepteur user
        $message->emetteur_id = -1 ;
        $message->emetteur_nom = "admin";
        $message->emetteur_email = Auth::user()->email ;
        $message->emetteur_telephone = Auth::user()->num_tele_user;
        $message->emetteur_type = "admin";

        $message->message = $request->input('message');

        $message->recepteur_id = $request->input('emetteur_id');
        $message->recepteur_email = $request->input('emetteur_email');
        $message->recepteur_type = $request->input('emetteur_type');
        // $message->recepteur_nom = $request->input('emetteur_nom');
        
        $message->save();

        return redirect('/message')->with('status', 'Le Message est Modifier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        
        if(isset($request->delete)){

            Message::where('recepteur_id',Auth::user()->id)->delete();
            return redirect('/Message_boite')->with('status', 'tous Les Messsages  sont Supprimer');

        }else{
                
            Message::destroy($id);
            return redirect('/Message_boite')->with('status', 'Le Messsage est Supprimer');

        }
    }

    
}
