<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
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
        //
        return view('message.message_boit' , [
            'messages'=>Message::orderBy('created_at', 'desc')->get()
        ]);
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

        return redirect('/message')->with('status', 'Le Message est Envoyer a L\'administration !');

        return redirect('/cours/cours-espace')->with('status', 'L\'opération s\'effectues avec successe  !');
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

        return redirect('/message')->with('status', 'Le Message est Envoyer a L\'administration !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Message::destroy($id);
        return redirect('/Message_boite')->with('status', 'Le Messsage est Supprimer');
    }
}
