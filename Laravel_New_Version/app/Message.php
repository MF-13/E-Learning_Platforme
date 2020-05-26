<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    //
    // protected $primarykey = 'id_msg' ;
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','emetteur_id','emetteur_nom','emetteur_email','emetteur_telephone','emetteur_type','message','etat','date_env','recepteur_id','recepteur_email','recepteur_type'
    ];
}
