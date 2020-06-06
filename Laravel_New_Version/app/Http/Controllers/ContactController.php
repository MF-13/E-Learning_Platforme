<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Message;
use App\User;
use Illuminate\Support\Facades\Auth;





class ContactController extends Controller
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
        return view('message.contact-us');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $email_admin = "admin@gmail.com";
        $id_admin = "0";
        $admin_type = "admin";

        if(Auth::user())
        {
            $emetteur_id = Auth::user()->id ;
            $emetteur_type = Auth::user()->type_user  ;
        }

        else
        {
            $emetteur_id = -1 ;
            $emetteur_type = 'visiteur'  ;
        }

        $message = new Message();

        $message->emetteur_id = $emetteur_id;
        $message->emetteur_nom = $request->input('nom');
        $message->emetteur_email = $request->input('email');
        $message->emetteur_telephone = $request->input('telephone');
        $message->emetteur_type = $emetteur_type;

        $message->message = $request->input('message');

        $message->recepteur_id = $id_admin;
        $message->recepteur_email = $email_admin;
        $message->recepteur_type = $admin_type;
        
        $message->save();
        return redirect(route('index'))->with('status', 'Le Message est Envoyer a L\'administration !');
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
        //
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
        $message = Message::findOrFail($id) ;
        $message->delete();
        return redirect('/message')->with('status', 'Le Message est Supprimer');
    }
}
