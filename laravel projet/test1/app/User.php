<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['nom_user','prenom_user','date_naiss_user',
                            'num_tele_user','filiere_user','email_user',
                            'mdps_user','adresse_user','type_user'];


}
